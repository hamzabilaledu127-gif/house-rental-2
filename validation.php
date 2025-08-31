<script type="text/javascript">
	<!--
	function AllowAlphabet(){
			
			    if (!myform.contact.value.match(/^[0-9]+$/) && myform.contact.value !="")
               {
                    myform.contact.value="";
                    myform.contact.focus(); 
                    alert("Please Enter only Number value for Phone/Telephone Number");
               }
			
			 if (!myform.fname.value.match(/^[a-zA-Z]+$/) && myform.fname.value !="")
               {
                    myform.fname.value="";
                    myform.fname.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
			    if (!myform.lname.value.match(/^[a-zA-Z]+$/) && myform.lname.value !="")
               {
                    myform.lname.value="";
                    myform.lname.focus(); 
                    alert("Please Enter only alphabets for Last Name");
               }
			    if (!myform.type.value.match(/^[a-zA-Z]+$/) && myform.type.value !="")
               {
                    myform.type.value="";
                    myform.type.focus(); 
                    alert("Please Enter only alphabets for type of house");
               }
               if (!myform.message.value.match(/^[0-9a-zA-Z]+$/) && myform.message.value !="")
               {
                    myform.message.value="";
                    myform.message.focus(); 
                    alert("Please Enter only alphabets for writing your message");
               }
			   if (!myform.kebele.value.match(/^[0-9]+$/) && myform.kebele.value !="")
               {
                    myform.kebele.value="";
                    myform.kebele.focus(); 
                    alert("Please Enter only Number value for kebele Value");
               }
                if (!myform.room.value.match(/^[0-9]+$/) && myform.room.value !="")
               {
                    myform.room.value="";
                    myform.room.focus(); 
                    alert("Please Enter only Number value for room Value");
               }
                if (!myform.housenumber.value.match(/^[0-9]+$/) && myform.housenumber.value !="")
               {
                    myform.housenumber.value="";
                    myform.housenumber.focus(); 
                    alert("Please Enter only Number value for housenumber Value");
               }
               
                if (!myform.price.value.match(/^[0-9]+$/) && myform.price.value !="")
               {
                    myform.price.value="";
                    myform.price.focus(); 
                    alert("Please Enter only Number value for price Value");
               }
                if (!myform.floor.value.match(/^[0-9]+$/) && myform.floor.value !="")
               {
                    myform.floor.value="";
                    myform.floor.focus(); 
                    alert("Please Enter only Number value for floor Value");
               }

			  if (!myform.email.value.match(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/) && myform.email.value !="")
               {
                    myform.email.value="";
                    myform.email.focus(); 
                    alert("Please Enter a valid email");
               }
  }
		}
		
	function check() {
    if(document.getElementById('password').value === document.getElementById('confirm_password').value) {
	 $('#message').html('Matching').css('color', 'green');
    } else {
        $('#message').html('Not Matching').css('color', 'red');
    }

   
}
	</script>	
	