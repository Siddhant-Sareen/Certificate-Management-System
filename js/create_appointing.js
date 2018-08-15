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

else if($("#address").val()=="")
{

alert('Your address is mandatory');
$("#address").focus();
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
	alert('Invalid Job Title');
	$("#job-title").focus();
return false;
}
else if($("#appointing-officer").val()=="0")
{
alert('Invalid appointing-officer');
$("#appointing-officer").focus();
return false;
}
else if($("#officer-designation").val()=="0")
{
alert('Invalid officer-designation');
$("#officer-designation").focus();
return false;
}
else if($("#place-of-posting").val()=="0")
{
alert('Invalid place of joining');
$("#place-of-posting").focus();
return false;
}
else if($("#working-hours-from").val()=="")
{
alert('Invalid from time');
$("#working-hours-from").focus();
return false;
}
else if($("#working-hours-to").val()=="")
{
alert('Invalid  to time');
$("#working-hours-to").focus();
return false;
}

else if($("#date-of-joining").val()=="")
{
	alert('Invalid Date of Joining');
	$("#date-of-joining").focus();
return false;
}
else if($("#Registration_id").val()=="")
{
	alert('Invalid Registration Id');
	$("#Registration_Id").focus();
return false;
}

else if($("#salary").val()=="")
{
alert('Invalid salary');
$("#salary").focus();
return false;
}


else if($("#date-of-printing").val()=="")
{
alert(' Invalid date-of-printing');
$("#date-of-printing").focus();
return false;
}

else
{
$.ajax({
type: "POST",
url: "php/create1_appointing.php", 

data: { name: $("#name").val(),address:$("#address").val(),email: $("#email").val(),phone:$("#phone").val(), job_title:$("#job-title").val(),appointing_officer:$("#appointing-officer").val(),officer_designation:$("#officer-designation").val(),place_posting:$("#place-of-posting").val(),work1:$("#timefrom").val(),work2:$("#timeto").val(),date:$("#date1").val(),reg_id:$("#Registeration_id").val(),salary:$("#salary").val(),date_of_printing:$("#date-of-printing").val(),certificate_category:$("#certificate_category").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){

$("#loading").fadeOut();

alert(response);
$("#name").val('');
$("#address").val('');
$("#phone").val('');
$("#email").val('');
$("#job-title").val('0');
$("#appointing-officer").val('0');
$("#officer-designation").val('0');
$("#place-of-posting").val('0');
$("#timefrom").val('');
$("#timeto").val('');
$("#date1").val('');
$("#Registeration_id").val('');
$("#salary").val('');
$("#date-of-printing").val('');
 }
});

 
 }
}
function autoformnumber()
{
	var al=parseInt(Math.random()*10000000);
	$('#Registeration_id').val('WTINC-'+al);
}