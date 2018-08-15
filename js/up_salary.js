
	
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
else if($("#reg_id").val()=="")
{
alert('Invalid Registration Id');
$("#reg_id").focus();
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

data: {name:$("#name").val(),f_name:$("#f_name").val(),email:$("#email").val(), phone:$("#phone").val(),job_title:$("#job-title").val(), date1:$("#date1").val(),gross_salary:$("#gross_salary").val(),net_pay:$("#net_pay").val(),reg_id:$("#reg_id").val(),date_of_printing:$("#date-of-printing").val(),certificate_category:$("#certificate_category").val()},
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
$("#reg_id").val('');
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
function valid_search()

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

 else if (!validateEmail($("#search_by").val()))

{
	alert('Invalid Email!');
	$('#search_by').focus();
	return false;
}
else 
{
add();
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
if($("#search_by").val().length<10||$("#search_by").val().length>10)
{
	alert('Enter valid Phone No.');
	$('#search_by').focus();
	return false;	
}
else
{
	add();
}
}
else if($("#hidden_text").val()=="value_reg")

{

if($("#search_by").val()=="")

{
	alert("Enter the correct registration number");
}
else 
{
add();
 }
}
}



function add(){
$.ajax({
type: "POST",
url: "php/select_salary.php", 

data: { search: $("#search_by").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){

$("#loading").fadeOut();

if(response=="no")
{
alert('No record found');	
$("#name").val('');
$("#f_name").val('');
$("#email").val('');
$("#phone").val('');
$("#job-title").val('0');
$("#date1").val('');
$("#gross_salary").val('');
$("#net_pay").val('');
$("#reg_id").val('');
$("#date-of-printing").val('');

}

else
{
$('#result').html(response);
$('#name').val($('#new_name').val());
$('#f_name').val($('#new_f_name').val());
$('#email').val($('#new_email').val());
$('#phone').val($('#new_phone').val());
$('#job-title').val($('#new_job_title').val());
$('#date1').val($('#new_date1').val());
$('#gross_salary').val($('#new_gross_salary').val());
$('#net_pay').val($('#new_net_pay').val());
$('#reg_id').val($('#new_reg_id').val());
$('#date-of-printing').val($('#new_date_of_printing').val());

}
}
});
}

function updating()
{
	$.ajax({
type: "POST",
url: "php/up_salary.php",

data: {search:$("#search_by").val(), name: $("#name").val(),f_name: $("#f_name").val(),phone:$("#phone").val(),job_title:$("#job-title").val(),date1:$("#date1").val(),email: $("#email").val(),net_pay:$("#net_pay").val(),certificate_category:$("#certificate_category").val(),gross_salary:$("#gross_salary").val(),date_of_printing:$("#date-of-printing").val(),reg_id:$("#reg_id").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
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
$("#reg_id").val('');
$("#date-of-printing").val('');

 }
});
}