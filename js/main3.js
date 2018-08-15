
	
	 function validateEmail($email)
	 {
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

else if($("#f_name").val()=="")
{

alert('Your fathers name is mandatory');
$("#f_name").focus();
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
	alert('Invalid Email !');
	$('#email').focus();
	return false;
}
else if($("#phone").val().length<10||$("#phone").val().length>10)
{
	alert('Enter valid Phone No.');
	$('#phone').focus();
	return false;
}
else if($("#job-title").val()=="0")
{
alert('Invalid job title');
$('#job-title').focus();
return false;
}

else if($("#date1").val()=="")
{
	alert('Invalid date of joining');
	$('#date1').focus();
	return false;
}
else if($("#gross_salary").val()=="")
{
	alert('Invalid gross salary');
	$("#gross_salary").focus();
return false;
}
else if($("#net_pay").val()=="")
{
alert('Invalid NET PAY');
$("#net_pay").focus();
return false;
}
else if($("#registration_id").val()=="")
{
alert('Invalid Registration Id');
$("#registration_id").focus();
return false;
}
else if($("#date-of-printing").val()=="")
{
alert('Invalid date of printing');
$("#date-of-printing").focus();
return false;
}

else
{
  
  
  $.ajax({
type: "POST",
url: "php/salary.php", 

data: {name:$("#name").val(),f_name:$("#f_name").val(),email:$("#email").val(), phone:$("#phone").val(),job_title:$("#job-title").val(), date_of_joining:$("#date1").val(),gross_salary:$("#gross_salary").val(),net_pay:$("#net_pay").val(),reg_id:$("#registration_id").val(),date_of_printing:$("#date-of-printing").val(),certificate_category:$("#certificate_category").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
//alert('');
$("#loading").fadeOut();
alert(response);
$("#name").val('');
$("#f_name").val('');
$("#email").val('');
$("#phone").val('');
$("#job-title").val('0');
$("#date1").val('');
$("#gross_salary").val('');
$("#net_pay").val('');
$("#registration_id").val('');
$("#date-of-printing").val('');
$("#certificate_category").val('');

 }
});

  
  
 }
 
 
 
}
function autoformnumber()
{
	var al=parseInt(Math.random()*10000000);
	$('#registration_id').val('WTINC-'+al);
}