
	
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
url: "insert.php", 

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

function valid_delete()

{

	if($("#hidden_text").val()=="")
	{

	alert("Please Select  first");
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
url: "php/deleted_salary.php", 
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
$("#email").html($("#new_email").val());
$("#phone").html($("#new_phone").val());
$("#registration_id").html($("#new_reg_id").val());
$("#gross_salary").html($("#new_gross_salary").val());
if($("#new_job_title").val()=='1')
{
	
$("#job-title").html('English Content Writing');
}
if($("#new_job_title").val()=='2')
{
	
$("#job-title").html('Hindi Content Writing');
}
if($("#new_job_title").val()=='3')
{
	
$("#job-title").html('Web developer');
}
if($("#new_job_title").val()=='4')
{
	
$("#job-title").html('Graphic Designer');
}
if($("#new_job_title").val()=='5')
{
	
$("#job-title").html('Social Media Executive');
}
if($("#new_job_title").val()=='6')
{
	
$("#job-title").html('Public Relations Manager');
}
if($("#new_job_title").val()=='7')
{
	
$("#job-title").html('Public Relations Officer');
}
if($("#new_job_title").val()=='8')
{
	
$("#job-title").html('Public Relations Manager');
}

}
 }
});

  
  
 }
 
 function deleting()
{
	$.ajax({
type: "POST",
url: "php/deleted1_salary.php", 
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
$("#name").html(' ');
$("#email").html(' ');
$("#phone").html(' ');
$("#registration_id").html(' ');

$("#job-title").html(' ');
$("#gross_salary").html(' ');	

}
});
	
}
	

	
 


