
	
	 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function valid()
{

if($("#name").val()=="")
{

alert('Your name is mandatory ');
$("#name").focus();
return false;
}
else if($("#start").val()=="")
{
	alert('Invalid days');
	$("#start").focus();
return false;
}
else if($("#end").val()=="")
{
alert('Invalid working days');
$("#end").focus();
return false;
}
else if($("#email").val()=="")
{
alert('Please enter your email id ');
$("#email").focus();
return false;
}
else if (!validateEmail($("#email").val()))
{
	alert('Invalid Email!');
	$('#email').focus();
	return false;
}

else if($("#number").val().length<10||$("#number").val().length>10)
{
	alert('Enter valid Phone No.');
	$('#number').focus();
	return false;
}




else
{
  
  
  $.ajax({
type: "POST",
url: "php/create1_agreement.php", 

data: {name:$("#name").val(), number:$("#number").val(),day1:$("#start").val(), day2:$("#end").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val(),reg_id:$("#registration_id").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
//alert('');
$("#loading").fadeOut();
alert(response);
$("#name").val('');
$("#number").val('');
$("#start").val('');
$("#end").val('');
$("#email").val('');
$("#registration_id").val('');

 }
});

  
  
 }
 
 
 
}
function autoformnumber()
{
	var al=parseInt(Math.random()*10000000);
	$('#registration_id').val('WTINC-'+al);
}