

	
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
url: "insert.php", 
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
function auto()
{
	var al=parseInt(Math.random()*10000000);
	$('#reg_id').val('WTINC-'+al);
}
function valid_delete()

{

	if($("#hidden_text").val()=="")
	{

	alert("Please Select your choice first");
	return false;	
	}

	else if($("#hidden_text").val()=="value_email")
{
	if ($("#search_by").val()=="")

{
	alert('Enter your Email !');
	$('#search_by').focus();
	return false;
}

if (!validateEmail($("#search_by").val()))

{
	alert('Invalid Email !');
	$('#search_by').focus();
	return false;
}
else{
	deleted();
}

}


else if($("#hidden_text").val()=="value_phone")
{
	if ($("#search_by").val()=="")

{
	alert('Enter your Phone Number !');
	$('#search_by').focus();
	return false;
}

else if($("#search_by").val().length<10||$("#search_by").val().length>10)
{
	alert('Enter valid Phone No.');
	$('#search_by').focus();
	return false;

	
}
else
{
	deleted();
}


}
else if($("#hidden_text").val()=="value_reg")

{

 if($("#search_by").val()=="")

 {
	alert("Enter the correct registration number");
	
 }
 else{
	 deleted();
 }



}
}

 function deleted()
	{
	$.ajax({
type: "POST",
url: "php/deleted_experience.php", 
//data: {name1:$("#name").val()},
data: {search: $("#search_by").val()},

beforeSend: function()
 {
$("#loading").fadeIn();

},
success:function(response)
{

$("#loading").fadeOut();
//alert('sfsfa');
//$("#success").html(response);
if(response=="No")
{
	alert('No record found');
}
else{
$("#result").html(response);
$("#name").html($("#new_name").val());
$("#position-of-responsibility").html($("#new_position_of_responsibility").val());
$("#email").html($("#new_email").val());
$("#phone").html($("#new_phone").val());
if($("#new_position_of_responsibility").val()=='1')
{
	
$("#position-of-responsibility").html('English Content Writer');
}
if($("#new_position_of_responsibility").val()=='2')
{
	
$("#position-of-responsibility").html('Hindi Content Writer');
}
if($("#new_position_of_responsibility").val()=='3')
{
	
$("#position-of-responsibility").html('Web Developer');
}
if($("#new_position_of_responsibility").val()=='4')
{
	
$("#position-of-responsibility").html('Graphic Designer');
}
if($("#new_position_of_responsibility").val()=='5')
{
	
$("#position-of-responsibility").html('Social Media Executive');
}
if($("#new_position_of_responsibility").val()=='6')
{
	
$("#position-of-responsibility").html('Public Relations Manager');
}
if($("#new_position_of_responsibility").val()=='7')
{
	
$("#position-of-responsibility").html('Public Relations Officer');
}
if($("#new_position_of_responsibility").val()=='8')
{
	
$("#position-of-responsibility").html('Public Relations Manager');
}


$("#registration_id").html($("#new_reg_id").val());
}
 }
});

  
  
 }
 
 function deleting()
{
	$.ajax({
type: "POST",
url: "php/deleted1_experience.php", 
//data: {name1:$("#name").val()},
data: {search: $("#search_by").val()},

beforeSend: function()
 {
$("#loading").fadeIn();

},
success:function(response)
{

$("#loading").fadeOut();
alert(response);
$("#name").html('');
$("#email").html('');
$("#phone").html('');
$("#position-of-responsibility").html('');
$("#registration_id").html('');
}
	});
	
}
	

	
 


 

