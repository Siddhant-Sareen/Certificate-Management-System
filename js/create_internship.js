
	
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

else if($("#branch").val()=="0")
{

alert('Your branch is mandatory');
$("#branch").focus();
return false;
}


else if($("#college").val()=="")
{
alert('Please enter your college name ');
$("#college").focus();
return false;
}

else if($("#city").val()=="")
{
	alert('Enter your city name');
	$('#city').focus();
	return false;
}
else if($("#phone").val().length<10 || $("#phone").val().length>10)
{
	alert('invalid phone number length');
	$("#phone").focus();
	return false;
}
else if($("#working-days-from").val()=="")
{
	alert('Invalid days');
	$("#working-days-from").focus();
return false;
}
else if($("#working-days-to").val()=="")
{
alert('Invalid working days');
$("#working-days-to").focus();
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
else if($("#date-of-printing").val()=="0")
{
alert('Invalid date');
$("#date-of-printing").focus();
return false;
}
else if($("#training-officer").val()=="0")
{
alert('Enter your training officer name');
$("#training-officer").focus();
return false;
}
else if($("#department-of-work").val()=="0")
{
alert('Invalid department');
$("#department").focus();
return false;
}
else
{
  
  
  $.ajax({
type: "POST",
url: "php/create1_internship.php", 

data: {name:$("#name").val(),phone:$("#phone").val(), branch:$("#branch").val(),college:$("#college").val(), city:$("#city").val(),work1:$("#working-days-from").val(), work2:$("#working-days-to").val(),date:$("#date-of-printing").val(),training_officer:$("#training-officer").val(), department_of_work:$("#department-of-work").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val(),reg_id:$("#registration_id").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
//alert('');
$("#loading").fadeOut();
alert(response);
$("#name").val('');
$("#branch").val('0');
$("#college").val('');
$("#city").val('');
$("#phone").val('');
$("#email").val('');
$("#working-days-from").val('');
$("#working-days-to").val('');
$("#date-of-printing").val('');
$("#training-officer").val('0');
$("#department-of-work").val('0');
$("#certificate_category").val('');
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