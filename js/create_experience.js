

	
	 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function valid()
{

if($("#name").val()=="")
{

alert(' Your name is mandatory ');
$("#name").focus();
return false;
}
else if($("#phone").val().length<10 || $("#phone").val().length>10)
{
	alert('invalid phone number length');
	$("#phone").focus();
	return false;
}

 else if($("#position-of-responsibility").val()=="0")
{
alert(' position of responsibility feild is mandatory ');
$("#position-of-responsibility").focus();
return false;
}
else if($("#start").val()=="")
{
alert(' Please enter time period ');
$("#start").focus();
return false;
}
 else if($("#end").val()=="")
{
alert(' Please enter time period  ');
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
 
 

 else if($("#duration").val()=="")
{
alert(' Please enter duration ');
$("#duration").focus();
return false;
}




 else if($("#salary").val()=="")
{
alert(' Enter salary amount ');
$("#salary").focus();
return false;
}




 else if($("#date-of-printing").val()=="")
{
alert(' Date of printing is missing ');
$("#date-of-printing").focus();
return false;
}
else if($("#reg_id").val()=="")
{
alert(' Registration id is invalid ');
$("#reg_id").focus();
return false;
}


else
{
  
  
  $.ajax({
type: "POST",
url: "php/create1_experience.php", 
//data: {name1:$("#name").val()},
data: {name: $("#name").val(),number: $("#phone").val(),position_of_responsibility: $("#position-of-responsibility").val(),time_period_from :$("#start").val(),time_period_to:$("#end").val(),duration:$("#duration").val(),salary:$("#salary").val(),date_of_printing:$("#date-of-printing").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val(),reg_id:$("#reg_id").val()},

beforeSend: function()
 {
$("#loading").fadeIn();

},
success:function(response)
{

$("#loading").fadeOut();
//alert('sfsfa');
//$("#success").html(response);
alert(response);

$("#name").val('');
$("#phone").val('');
$("#position-of-responsibility").val('');
$("#start").val('');
$("#end").val('');
$("#duration").val('');
$("#salary").val('');
$("#date-of-printing").val('');
$("#certificate_category").val('');
$("#email").val('');
$("#reg_id").val('');

 }
});

  
  
 }
 
 
 
}
function autoformnumber()
{
	var al=parseInt(Math.random()*10000000);
	$('#reg_id').val('WTINC-'+al);
}