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
alert('Invalid place of posting');
$("#place-of-posting").focus();
return false;
}
else if($("#timefrom").val()=="")
{
alert('Invalid time');
$("#timefrom").focus();
return false;
}
else if($("#timeto").val()=="")
{
alert('Invalid time');
$("#timeto").focus();
return false;
}

else if($("#date1").val()=="")
{
	alert('Invalid Date of Joining');
	$("#date1").focus();
return false;
}
else if($("#registration_id").val()=="")
{
	alert('Invalid Registration Id');
	$("#registration_Id").focus();
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
url: "insert.php", 

data: { name: $("#name").val(),address:$("#address").val(),email: $("#email").val(),phone:$("#phone").val(), job_title:$("#job-title").val(),appointing_officer:$("#appointing-officer").val(),officer_designation:$("#officer-designation").val(),place_of_posting:$("#place-of-posting").val(),timeIn:$("#timefrom").val(),timeOut:$("#timeto").val(),date1:$("#date1").val(),registration_id:$("#registration_id").val(),salary:$("#salary").val(),date_of_printing:$("#date-of-printing").val(),certificate_category:$("#certificate_category").val()},
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
$("#registration_id").val('');
$("#salary").val('');
$("#date-of-printing").val('');
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
url: "php/select_appointing.php", 

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
$("#registration_id").val('');
$("#salary").val('');
$("#date-of-printing").val('');
}

else
{
$('#result').html(response);
$('#name').val($('#new_name').val());
$('#address').val($('#new_address').val());
$('#email').val($('#new_email').val());
$('#job-title').val($('#new_job_title').val());
$('#appointing-officer').val($('#new_appointing_officer').val());
$('#place-of-posting').val($('#new_place_posting').val());
$('#officer-designation').val($('#new_officer_designation').val());
$('#timefrom').val($('#new_timeIn').val());
$('#timeto').val($('#new_timeOut').val());
$('#phone').val($('#new_phone').val());
$('#salary').val($('#new_salary').val());
$('#date1').val($('#new_date1').val());
$('#registration_id').val($('#new_registration_id').val());
}
}
});
}

function updating()
{
	$.ajax({
type: "POST",
url: "update.php",

data: {search:$("#search_by").val(), name: $("#name").val(),address:$("#address").val(),email: $("#email").val(),phone:$("#phone").val(), job_title:$("#job-title").val(),appointing_officer:$("#appointing-officer").val(),officer_designation:$("#officer-designation").val(),place_of_posting:$("#place-of-posting").val(),timeIn:$("#timefrom").val(),timeOut:$("#timeto").val(),date1:$("#date1").val(),registration_id:$("#registration_id").val(),salary:$("#salary").val(),date_of_printing:$("#date-of-printing").val()},
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
$("#registration_id").val('');
$("#salary").val('');
$("#date-of-printing").val('');
 }
});
}



function deleting()
{
	$.ajax({
type: "POST",
url: "delete.php",

data: {search:$("#search_by").val(), name: $("#name").val(),address:$("#address").val(),email: $("#email").val(),phone:$("#phone").val(), job_title:$("#job_title").val(),place_posting:$("#place_of_posting").val(),Registeration_id:$("#Registeration_id").val(),},
beforeSend: function() {
$("#loading").fadeIn();
confirm("are you sure you want to delete the data?");
},
success:function(response){
$("#loading").fadeOut();

alert(response);
$("#name").val('');
$("#address").val('');
$("#phone").val('');
$("#email").val('');
$("#job_title").val('0');

$("#place_of_posting").val('0');


$("#Registeration_id").val('');

 }
});
}





function autoformnumber()
{
	var a1=parseInt(Math.random()*1000000000);
	{
	$("#Registeration_id").val("WTINC-"+a1);	
	}
}
