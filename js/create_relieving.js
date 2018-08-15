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
else if($("#phone").val().length<10 || $("#phone").val().length>10)
{
	alert('invalid phone number length');
	$("#phone").focus();
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

 else if($("#date-of-printing").val()=="")
{
alert(' Date of printing is missing ');
$("#date-of-printing").focus();
return false;
}


else
{
  
  
  $.ajax({
type: "POST",
url: "php/create1_relieving.php", 
//data: {name1:$("#name").val()},
data: {name: $("#name").val(),phone:$("#phone").val(),start:$("#start").val(),end:$("#end").val(),date_of_printing:$("#date-of-printing").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val(),reg_id:$("#registration_id").val()},

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
$("#date-of-printing").val('');
$("#email").val('');
$("#phone").val('');
$("#start").val('');
$("#end").val('');
$("#reg_id").val('');

 }
});

  
  
 }
 
 
 
}
function autoformnumber()
{
	var al=parseInt(Math.random()*10000000);
	$('#registration_id').val('WTINC-'+al);
}