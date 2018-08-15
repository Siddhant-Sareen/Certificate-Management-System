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
url: "insert.php", 
//data: {name1:$("#name").val()},
data: {name: $("#name").val(),phone:$("#phone").val(),start:$("#start").val(),end:$("#end").val(),date_of_printing:$("#date-of-printing").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val(),reg_id:$("#reg_id").val()},

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
url: "php/select_relieving.php", 

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
$("#date-of-printing").val('');
$("#email").val('');
$("#phone").val('');
$("#start").val('');
$("#end").val('');
$("#reg_id").val('');


}

else
{
$('#result').html(response);
$('#name').val($('#new_name').val());
$('#date-of-printing').val($('#new_date_of_printing').val());
$('#email').val($('#new_email').val());
$('#phone').val($('#new_phone').val());
$('#start').val($('#new_start').val());
$('#end').val($('#new_end').val());
$('#reg_id').val($('#new_reg_id').val());


}
}
});
}

function updating()
{
	$.ajax({
type: "POST",
url: "update.php",

data: {search:$("#search_by").val(), name: $("#name").val(),date_of_printing:$("#date-of-printing").val(),email:$("#email").val(),phone:$("#phone").val(),start:$("#start").val(),end:$("#end").val(),certificate_category:$("#certificate_category").val(),reg_id:$("#reg_id").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
$("#loading").fadeOut();

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
url: "deleted.php", 
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
$("#reg_id").html($("#new_reg_id").val());
}
 }
});

  
  
 }
 
 function deleting()
{
	$.ajax({
type: "POST",
url: "deleted1.php", 
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
$("#name").val('');
$("#email").val('');
$("#phone").val('');
$("#reg_id").val('');
}
	});
	
}
	

	