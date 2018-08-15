
	
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

else if($("#branch").val()=="0")
{

alert('Your branch is mandatory');
$("#branch").focus();
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
else if($("#registration_id").val()=="")
{
alert('Invalid registration id');
$("#registration_id").focus();
return false;
}
else if($("#phone").val()=="")
{
alert('Invalid phone no');
$("#phone").focus();
return false;
}
else
{
  
  
  $.ajax({
type: "POST",
url: "insert.php", 

data: {name:$("#name").val(), branch:$("#branch").val(),college:$("#college").val(), city:$("#city").val(),phone:$("#phone").val(),registration_id:$("#registration_id").val(),work1:$("#working-days-from").val(), work2:$("#working-days-to").val(),date:$("#date-of-printing").val(),training_officer:$("#training-officer").val(), department_of_work:$("#department-of-work").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val()},
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
$("#email").val('');
$("#phone").val('');
$("#registration_id").val('');
$("#working-days-from").val('');
$("#working-days-to").val('');
$("#date-of-printing").val('');
$("#training-officer").val('0');
$("#department-of-work").val('0');
$("#certificate_category").val('');

 }
});

  
  
 }
 
 
 
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
url: "php/select_internship.php", 

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
$("#branch").val('0');
$("#college").val('');
$("#city").val('');
$("#email").val('');
$("#phone").val('');
$("#registration_id").val('');
$("#working-days-from").val('');
$("#working-days-to").val('');
$("#date-of-printing").val('');
$("#training-officer").val('0');
$("#department-of-work").val('0');
$("#certificate_category").val('');	

}

else
{
$('#result').html(response);
$('#name').val($('#new_name').val());
$('#branch').val($('#new_branch').val());
$('#college').val($('#new_college').val());
$('#city').val($('#new_city').val());
$('#email').val($('#new_email').val());
$('#phone').val($('#new_phone').val());
$('#registration_id').val($('#new_registration_id').val());
$('#working-days-from').val($('#new_working_days_from').val());
$('#working-days-to').val($('#new_working_days_to').val());
$('#date-of-printing').val($('#new_date_of_printing').val());
$('#training-officer').val($('#new_training_officer').val());
$('#department-of-work').val($('#new_department_of_work').val());
$('#certificate_category').val($('#new_certificate_category').val());
}
}
});
}

function updating()
{
	$.ajax({
type: "POST",
url: "php/up_internship.php",

data: {search:$("#search_by").val(), name: $("#name").val(),branch:$("#branch").val(),college:$("#college").val(),city:$("#city").val(),email: $("#email").val(),phone:$("#phone").val(), working_days_from:$("#working-days-from").val(),working_days_to:$("#working-days-to").val(),date_of_printing:$("#date-of-printing").val(),training_officer:$("#training-officer").val(),department_of_work:$("#department-of-work").val(),registration_id:$("#registration_id").val(),certificate_category:$("#certificate_category").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
$("#loading").fadeOut();

alert(response);
$("#name").val('');
$("#branch").val('0');
$("#college").val('');
$("#city").val('');
$("#email").val('');
$("#phone").val('');
$("#registration_id").val('');
$("#working-days-from").val('');
$("#working-days-to").val('');
$("#date-of-printing").val('');
$("#training-officer").val('0');
$("#department-of-work").val('0');
$("#certificate_category").val('');	

 }
});
}
function auto()
{
	var al=parseInt(Math.random()*10000000);
	$('#registration_id').val('WTINC-'+al);
}

