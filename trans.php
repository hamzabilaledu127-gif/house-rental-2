 <?php
    2 //namespace Elgg\I18n
   11    public class Translator {
   12 
   18     private $CONFIG;
   19 
   23     public function __construct() {
   24         global $CONFIG;
   25         $this->CONFIG = $CONFIG;
   26         $this->defaultPath = dirname(dirname(dirname(dirname(__DIR__)))) . "/languages/";
   27     }
   28 
   40     public function translate($message_key, $args = [], $language = "") {
   41         // TODO find a way to cache getLanguage() and get rid of this
   42         static $CURRENT_LANGUAGE;
   43         
   44         if (!is_string($message_key) || strlen($message_key) < 1) {
   45             _elgg_services()->logger->warn(
   46                 '$message_key needs to be a string in ' . __METHOD__ . '(), ' . gettype($message_key) . ' provided'
   47             );
   48             return '';
   49         }
   50         
   51         // old param order is deprecated
   52         if (!is_array($args)) {
   53             elgg_deprecated_notice(
   54                 'As of Elgg 1.8, the 2nd arg to elgg_echo() is an array of string replacements and the 3rd arg is the language.',
   55                 1.8
   56             );
   57 
   58             $language = $args;
   59             $args = array();
   60         }
   61 
   62         if (!$CURRENT_LANGUAGE) {
   63             $CURRENT_LANGUAGE = $this->getCurrentLanguage();
   64         }
   65         if (!$language) {
   66             $language = $CURRENT_LANGUAGE;
   67         }
   68 
   69         $this->ensureTranslationsLoaded($language);
   70 
   71         $notice = '';
   72         $string = $message_key;
   73 
   74         // avoid dupes without overhead of array_unique
   75         $langs[$language] = true;
   76         $langs['en'] = true;
   77 
   78         foreach (array_keys($langs) as $try_lang) {
   79             if (isset($GLOBALS['_ELGG']->translations[$try_lang][$message_key])) {
   80                 $string = $GLOBALS['_ELGG']->translations[$try_lang][$message_key];
   81 
   82                 // only pass through if we have arguments to allow backward compatibility
   83                 // with manual sprintf() calls.
   84                 if ($args) {
   85                     $string = vsprintf($string, $args);
   86                 }
   87 
   88                 break;
   89             } else {
   90                 $notice = sprintf(
   91                     'Missing %s translation for "%s" language key',
   92                     ($try_lang === 'en') ? 'English' : $try_lang,
   93                     $message_key
   94                 );
   95             }
   96         }
   97 
   98         if ($notice) {
   99             _elgg_services()->logger->notice($notice);
  100         }
  101 
  102         return $string;
  103     }
  104 
  118     public function addTranslation($country_code, $language_array) {
  119 
  120         if (!isset($GLOBALS['_ELGG']->translations)) {
  121             $GLOBALS['_ELGG']->translations = array();
  122         }
  123 
  124         $country_code = strtolower($country_code);
  125         $country_code = trim($country_code);
  126         if (is_array($language_array) && $country_code != "") {
  127             if (sizeof($language_array) > 0) {
  128                 if (!isset($GLOBALS['_ELGG']->translations[$country_code])) {
  129                     $GLOBALS['_ELGG']->translations[$country_code] = $language_array;
  130                 } else {
  131                     $GLOBALS['_ELGG']->translations[$country_code] = $language_array + $GLOBALS['_ELGG']->translations[$country_code];
  132                 }
  133             }
  134             return true;
  135         }
  136         return false;
  137     }
  138 
  144     public function getCurrentLanguage() {
  145         $language = $this->detectLanguage();
  146 
  147         if (!$language) {
  148             $language = 'en';
  149         }
  150 
  151         return $language;
  152     }
  153 
  159     public function detectLanguage() {
  160         $url_lang = _elgg_services()->input->get('hl');
  161         if ($url_lang) {
  162             return $url_lang;
  163         }
  164 
  165         $user = _elgg_services()->session->getLoggedInUser();
  166         $language = false;
  167 
  168         if (($user) && ($user->language)) {
  169             $language = $user->language;
  170         }
  171 
  172         if ((!$language) && (isset($this->CONFIG->language)) && ($this->CONFIG->language)) {
  173             $language = $this->CONFIG->language;
  174         }
  175 
  176         if ($language) {
  177             return $language;
  178         }
  179 
  180         return false;
  181     }
  182 
  196     public function loadTranslations($language = null) {
  197         if (elgg_is_system_cache_enabled()) {
  198             $loaded = true;
  199 
  200             if ($language) {
  201                 $languages = array($language);
  202             } else {
  203                 $languages = array_unique(array('en', $this->getCurrentLanguage()));
  204             }
  205 
  206             foreach ($languages as $language) {
  207                 $data = elgg_load_system_cache("$language.lang");
  208                 if ($data) {
  209                     $this->addTranslation($language, unserialize($data));
  210                 } else {
  211                     $loaded = false;
  212                 }
  213             }
  214 
  215             if ($loaded) {
  216                 $GLOBALS['_ELGG']->i18n_loaded_from_cache = true;
  217                 // this is here to force
  218                 $GLOBALS['_ELGG']->language_paths[$this->defaultPath] = true;
  219                 return;
  220             }
  221         }
  222 
  223         // load core translations from languages directory
  224         $this->registerTranslations($this->defaultPath, false, $language);
  225 
  226         // Plugin translation have already been loaded for the default
  227         // languages by ElggApplication::bootCore(), so there's no need
  228         // to continue unless loading a specific language on-demand
  229         if ($language) {
  230             $this->loadPluginTranslations($language);
  231         }
  232     }
  233 
  245     private function loadPluginTranslations($language) {
  246         // Get active plugins
  247         $plugins = _elgg_services()->plugins->find('active');
  248 
  249         if (!$plugins) {
  250             // Active plugins were not found, so no need to register plugin translations
  251             return;
  252         }
  253 
  254         foreach ($plugins as $plugin) {
  255             $languages_path = "{$plugin->getPath()}languages/";
  256 
  257             if (!is_dir($languages_path)) {
  258                 // This plugin doesn't have anything to translate
  259                 continue;
  260             }
  261 
  262             $language_file = "{$languages_path}{$language}.php";
  263 
  264             if (!file_exists($language_file)) {
  265                 // This plugin doesn't have translations for the requested language
  266 
  267                 $name = $plugin->getFriendlyName();
  268                 _elgg_services()->logger->notice("Plugin $name is missing translations for $language language");
  269 
  270                 continue;
  271             }
  272 
  273             // Register translations from the plugin languages directory
  274             if (!$this->registerTranslations($languages_path, false, $language)) {
  275                 throw new \PluginException(sprintf('Cannot register languages for plugin %s (guid: %s) at %s.',
  276                     array($plugin->getID(), $plugin->guid, $languages_path)));
  277             }
  278         }
  279     }
  280 
  288     public function registerPluginTranslations($path) {
  289         $languages_path = rtrim($path, "\\/") . "/languages";
  290 
  291         // don't need to have translations
  292         if (!is_dir($languages_path)) {
  293             return true;
  294         }
  295 
  296         return $this->registerTranslations($languages_path);
  297     }
  298 
  309     public function registerTranslations($path, $load_all = false, $language = null) {
  310         $path = sanitise_filepath($path);
  311 
  312         // Make a note of this path just incase we need to register this language later
  313         if (!isset($GLOBALS['_ELGG']->language_paths)) {
  314             $GLOBALS['_ELGG']->language_paths = array();
  315         }
  316         $GLOBALS['_ELGG']->language_paths[$path] = true;
  317 
  318         _elgg_services()->logger->info("Translations loaded from: $path");
  319 
  320         if ($language) {
  321             $load_language_files = array("$language.php");
  322             $load_all = false;
  323         } else {
  324             // Get the current language based on site defaults and user preference
  325             $current_language = $this->getCurrentLanguage();
  326 
  327             $load_language_files = array(
  328                 'en.php',
  329                 "$current_language.php"
  330             );
  331 
  332             $load_language_files = array_unique($load_language_files);
  333         }
  334 
  335         $handle = opendir($path);
  336         if (!$handle) {
  337             _elgg_services()->logger->error("Could not open language path: $path");
  338             return false;
  339         }
  340 
  341         $return = true;
  342         while (false !== ($language_file = readdir($handle))) {
  343             // ignore bad files
  344             if (substr($language_file, 0, 1) == '.' || substr($language_file, -4) !== '.php') {
  345                 continue;
  346             }
  347 
  348             if (in_array($language_file, $load_language_files) || $load_all) {
  349                 $result = include_once($path . $language_file);
  350                 if ($result === false) {
  351                     $return = false;
  352                     continue;
  353                 } elseif (is_array($result)) {
  354                     $this->addTranslation(basename($language_file, '.php'), $result);
  355                 }
  356             }
  357         }
  358 
  359         return $return;
  360     }
  361 
  371     public function reloadAllTranslations() {
  372 
  373 
  374         static $LANG_RELOAD_ALL_RUN;
  375         if ($LANG_RELOAD_ALL_RUN) {
  376             return;
  377         }
  378 
  379         if ($GLOBALS['_ELGG']->i18n_loaded_from_cache) {
  380             $cache = elgg_get_system_cache();
  381             $cache_dir = $cache->getVariable("cache_path");
  382             $filenames = elgg_get_file_list($cache_dir, array(), array(), array(".lang"));
  383             foreach ($filenames as $filename) {
  384                 // Look for files matching for example 'en.lang', 'cmn.lang' or 'pt_br.lang'.
  385                 // Note that this regex is just for the system cache. The original language
  386                 // files are allowed to have uppercase letters (e.g. pt_BR.php).
  387                 if (preg_match('/(([a-z]{2,3})(_[a-z]{2})?)\.lang$/', $filename, $matches)) {
  388                     $language = $matches[1];
  389                     $data = elgg_load_system_cache("$language.lang");
  390                     if ($data) {
  391                         $this->addTranslation($language, unserialize($data));
  392                     }
  393                 }
  394             }
  395         } else {
  396             foreach ($GLOBALS['_ELGG']->language_paths as $path => $dummy) {
  397                 $this->registerTranslations($path, true);
  398             }
  399         }
  400 
  401         $LANG_RELOAD_ALL_RUN = true;
  402     }
  403 
  410     public function getInstalledTranslations() {
  411 
  412 
  413         // Ensure that all possible translations are loaded
  414         $this->reloadAllTranslations();
  415 
  416         $installed = array();
  417 
  418         $admin_logged_in = _elgg_services()->session->isAdminLoggedIn();
  419 
  420         foreach ($GLOBALS['_ELGG']->translations as $k => $v) {
  421             if ($this->languageKeyExists($k, $k)) {
  422                 $lang = $this->translate($k, [], $k);
  423             } else {
  424                 $lang = $this->translate($k);
  425             }
  426             
  427             $installed[$k] = $lang;
  428             
  429             if (!$admin_logged_in || ($k === 'en')) {
  430                 continue;
  431             }
  432             
  433             $completeness = $this->getLanguageCompleteness($k);
  434             if ($completeness < 100) {
  435                 $installed[$k] .= " (" . $completeness . "% " . $this->translate('complete') . ")";
  436             }
  437         }
  438 
  439         return $installed;
  440     }
  441 
  449     public function getLanguageCompleteness($language) {
  450 
  451 
  452         // Ensure that all possible translations are loaded
  453         $this->reloadAllTranslations();
  454 
  455         $language = sanitise_string($language);
  456 
  457         $en = count($GLOBALS['_ELGG']->translations['en']);
  458 
  459         $missing = $this->getMissingLanguageKeys($language);
  460         if ($missing) {
  461             $missing = count($missing);
  462         } else {
  463             $missing = 0;
  464         }
  465 
  466         //$lang = count($GLOBALS['_ELGG']->translations[$language]);
  467         $lang = $en - $missing;
  468 
  469         return round(($lang / $en) * 100, 2);
  470     }
  471 
  480     public function getMissingLanguageKeys($language) {
  481 
  482 
  483         // Ensure that all possible translations are loaded
  484         $this->reloadAllTranslations();
  485 
  486         $missing = array();
  487 
  488         foreach ($GLOBALS['_ELGG']->translations['en'] as $k => $v) {
  489             if ((!isset($GLOBALS['_ELGG']->translations[$language][$k]))
  490             || ($GLOBALS['_ELGG']->translations[$language][$k] == $GLOBALS['_ELGG']->translations['en'][$k])) {
  491                 $missing[] = $k;
  492             }
  493         }
  494 
  495         if (count($missing)) {
  496             return $missing;
  497         }
  498 
  499         return false;
  500     }
  501 
  511     function languageKeyExists($key, $language = 'en') {
  512         if (empty($key)) {
  513             return false;
  514         }
  515 
  516         $this->ensureTranslationsLoaded($language);
  517 
  518         if (!array_key_exists($language, $GLOBALS['_ELGG']->translations)) {
  519             return false;
  520         }
  521 
  522         return array_key_exists($key, $GLOBALS['_ELGG']->translations[$language]);
  523     }
  524 
  531     private function ensureTranslationsLoaded($language) {
  532         if (!isset($GLOBALS['_ELGG']->translations)) {
  533             // this means we probably had an exception before translations were initialized
  534             $this->registerTranslations($this->defaultPath);
  535         }
  536 
  537         if (!isset($GLOBALS['_ELGG']->translations[$language])) {
  538             // The language being requested is not the same as the language of the
  539             // logged in user, so we will have to load it separately. (Most likely
  540             // we're sending a notification and the recipient is using a different
  541             // language than the logged in user.)
  542             $this->loadTranslations($language);
  543         }
  544     }
  545 
  551     public static function getAllLanguageCodes() {
  552         return [
  553             "aa", // "Afar"
  554             "ab", // "Abkhazian"
  555             "af", // "Afrikaans"
  556             "am", // "Amharic"
  557             "ar", // "Arabic"
  558             "as", // "Assamese"
  559             "ay", // "Aymara"
  560             "az", // "Azerbaijani"
  561             "ba", // "Bashkir"
  562             "be", // "Byelorussian"
  563             "bg", // "Bulgarian"
  564             "bh", // "Bihari"
  565             "bi", // "Bislama"
  566             "bn", // "Bengali; Bangla"
  567             "bo", // "Tibetan"
  568             "br", // "Breton"
  569             "ca", // "Catalan"
  570             "cmn", // "Mandarin Chinese" // ISO 639-3
  571             "co", // "Corsican"
  572             "cs", // "Czech"
  573             "cy", // "Welsh"
  574             "da", // "Danish"
  575             "de", // "German"
  576             "dz", // "Bhutani"
  577             "el", // "Greek"
  578             "en", // "English"
  579             "eo", // "Esperanto"
  580             "es", // "Spanish"
  581             "et", // "Estonian"
  582             "eu", // "Basque"
  583             "eu_es", // "Basque (Spain)"
  584             "fa", // "Persian"
  585             "fi", // "Finnish"
  586             "fj", // "Fiji"
  587             "fo", // "Faeroese"
  588             "fr", // "French"
  589             "fy", // "Frisian"
  590             "ga", // "Irish"
  591             "gd", // "Scots / Gaelic"
  592             "gl", // "Galician"
  593             "gn", // "Guarani"
  594             "gu", // "Gujarati"
  595             "he", // "Hebrew"
  596             "ha", // "Hausa"
  597             "hi", // "Hindi"
  598             "hr", // "Croatian"
  599             "hu", // "Hungarian"
  600             "hy", // "Armenian"
  601             "ia", // "Interlingua"
  602             "id", // "Indonesian"
  603             "ie", // "Interlingue"
  604             "ik", // "Inupiak"
  605             "is", // "Icelandic"
  606             "it", // "Italian"
  607             "iu", // "Inuktitut"
  608             "iw", // "Hebrew (obsolete)"
  609             "ja", // "Japanese"
  610             "ji", // "Yiddish (obsolete)"
  611             "jw", // "Javanese"
  612             "ka", // "Georgian"
  613             "kk", // "Kazakh"
  614             "kl", // "Greenlandic"
  615             "km", // "Cambodian"
  616             "kn", // "Kannada"
  617             "ko", // "Korean"
  618             "ks", // "Kashmiri"
  619             "ku", // "Kurdish"
  620             "ky", // "Kirghiz"
  621             "la", // "Latin"
  622             "ln", // "Lingala"
  623             "lo", // "Laothian"
  624             "lt", // "Lithuanian"
  625             "lv", // "Latvian/Lettish"
  626             "mg", // "Malagasy"
  627             "mi", // "Maori"
  628             "mk", // "Macedonian"
  629             "ml", // "Malayalam"
  630             "mn", // "Mongolian"
  631             "mo", // "Moldavian"
  632             "mr", // "Marathi"
  633             "ms", // "Malay"
  634             "mt", // "Maltese"
  635             "my", // "Burmese"
  636             "na", // "Nauru"
  637             "ne", // "Nepali"
  638             "nl", // "Dutch"
  639             "no", // "Norwegian"
  640             "oc", // "Occitan"
  641             "om", // "(Afan) Oromo"
  642             "or", // "Oriya"
  643             "pa", // "Punjabi"
  644             "pl", // "Polish"
  645             "ps", // "Pashto / Pushto"
  646             "pt", // "Portuguese"
  647             "pt_br", // "Portuguese (Brazil)"
  648             "qu", // "Quechua"
  649             "rm", // "Rhaeto-Romance"
  650             "rn", // "Kirundi"
  651             "ro", // "Romanian"
  652             "ro_ro", // "Romanian (Romania)"
  653             "ru", // "Russian"
  654             "rw", // "Kinyarwanda"
  655             "sa", // "Sanskrit"
  656             "sd", // "Sindhi"
  657             "sg", // "Sangro"
  658             "sh", // "Serbo-Croatian"
  659             "si", // "Singhalese"
  660             "sk", // "Slovak"
  661             "sl", // "Slovenian"
  662             "sm", // "Samoan"
  663             "sn", // "Shona"
  664             "so", // "Somali"
  665             "sq", // "Albanian"
  666             "sr", // "Serbian"
  667             "sr_latin", // "Serbian (Latin)"
  668             "ss", // "Siswati"
  669             "st", // "Sesotho"
  670             "su", // "Sundanese"
  671             "sv", // "Swedish"
  672             "sw", // "Swahili"
  673             "ta", // "Tamil"
  674             "te", // "Tegulu"
  675             "tg", // "Tajik"
  676             "th", // "Thai"
  677             "ti", // "Tigrinya"
  678             "tk", // "Turkmen"
  679             "tl", // "Tagalog"
  680             "tn", // "Setswana"
  681             "to", // "Tonga"
  682             "tr", // "Turkish"
  683             "ts", // "Tsonga"
  684             "tt", // "Tatar"
  685             "tw", // "Twi"
  686             "ug", // "Uigur"
  687             "uk", // "Ukrainian"
  688             "ur", // "Urdu"
  689             "uz", // "Uzbek"
  690             "vi", // "Vietnamese"
  691             "vo", // "Volapuk"
  692             "wo", // "Wolof"
  693             "xh", // "Xhosa"
  694             "yi", // "Yiddish"
  695             "yo", // "Yoruba"
  696             "za", // "Zuang"
  697             "zh", // "Chinese"
  698             "zh_hans", // "Chinese Simplified"
  699             "zu", // "Zulu"
  700         ];
  701     }
  702 
  710     public static function normalizeLanguageCode($code) {
  711         $code = strtolower($code);
  712         $code = preg_replace('~[^a-z0-9]~', '_', $code);

  713         return $code;

  714     }
  715 }
  <? php
  include(configration.php);
  ?>