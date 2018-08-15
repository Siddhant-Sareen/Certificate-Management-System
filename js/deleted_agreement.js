
	
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

else if($("#number").val().length<10||$("#number").val().length>10)
{
	alert('Enter valid Phone No.');
	$('#number').focus();
	return false;
}




else
{
  
  
  $.ajax({
type: "POST",
url: "insert.php", 

data: {name:$("#name").val(), number:$("#number").val(),day1:$("#start").val(), day2:$("#end").val(),certificate_category:$("#certificate_category").val(),email:$("#email").val(),reg_id:$("#registration_id").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){
//alert('');
$("#loading").fadeOut();
alert(response);
$("#name").val('');
$("#number").val('');
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
url: "php/deleted_agreement.php", 
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
}
 }
});

  
  
 }
 
 function deleting()
{
	$.ajax({
type: "POST",
url: "php/deleted1_agreement.php", 
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
$("#registration_id").html('');
}
	});
	
}
	

	
 


