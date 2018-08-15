
	
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
else if($("#start").val()=="")
{
	alert('Invalid days');
	$("#start").focus();
return false;
}
else if($("#end").val()=="")
{
alert('Invalid working days');
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

else if($("#phone").val().length<10||$("#phone").val().length>10)
{
	alert('Enter valid Phone No.');
	$('#phone').focus();
	return false;
}




else
{
  
  
  $.ajax({
type: "POST",
url: "insert.php", 

data: {name:$("#name").val(), phone:$("#phone").val(),day1:$("#start").val(), day2:$("#end").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val(),reg_id:$("#registration_id").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
//alert('');
$("#loading").fadeOut();
alert(response);
$("#name").val('');
$("#phone").val('');
$("#start").val('');
$("#end").val('');
$("#email").val('');
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
url: "php/select_agreement.php", 

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
$("#phone").val('');
$("#email").val('');
$("#start").val('');
$("#end").val('');
$("#registeration_id").val('');

}

else
{
$('#result').html(response);
$('#name').val($('#new_name').val());
$('#phone').val($('#new_phone').val());
$('#email').val($('#new_email').val());
$('#start').val($('#new_start').val());
$('#end').val($('#new_end').val());
$('#registeration_id').val($('#new_registeration_id').val());

}
}
});
}

function updating()
{
	$.ajax({
type: "POST",
url: "php/up_agreement.php",

data: {search:$("#search_by").val(), name: $("#name").val(),phone:$("#phone").val(),email: $("#email").val(),start:$("#start").val(),certificate_category:$("#certificate_category").val(), end:$("#end").val(),registeration_id:$("#registeration_id").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
$("#loading").fadeOut();

alert(response);
$("#name").val('');
$("#phone").val('');
$("#email").val('');
$("#start").val('');
$("#end").val('');
$("#registeration_id").val('');

 }
});
}