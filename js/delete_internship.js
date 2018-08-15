
	
	 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
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
	alert('Enter your Phone Number!');
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
url: "php/deleted_internship.php", 
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
$("#college").html($("#new_college").val());
$("#email").html($("#new_email").val());
$("#phone").html($("#new_phone").val());
if($("#new_department_of_work").val()=='1')
{
	
$("#department-of-work").html('English Content Writer');
}
if($("#new_department_of_work").val()=='2')
{
	
$("#department-of-work").html('Hindi Content Writer');
}
if($("#new_department_of_work").val()=='3')
{
	
$("#department-of-work").html('Web Developer');
}
if($("#new_department_of_work").val()=='4')
{
	
$("#department-of-work").html('Graphic Designer');
}if($("#new_department_of_work").val()=='5')
{
	
$("#department-of-work").html('Social Media Executive');
}if($("#new_department_of_work").val()=='6')
{
	
$("#department-of-work").html('Public Relations Manager');
}
if($("#new_department_of_work").val()=='7')
{
	
$("#department-of-work").html('Public Relations Officer');
}if($("#new_department_of_work").val()=='8')
{
	
$("#department-of-work").html('Public Relations Manager');
}


if($("#new_training_officer").val()=='1')
{
	
$("#training-officer").html('first');
}
if($("#new_training_officer").val()=='2')
{
	
$("#training-officer").html('second');
}
if($("#new_training_officer").val()=='3')
{
	
$("#training-officer").html('third');
}

if($("#new_branch").val()=='01')
{
	
$("#branch").html('B.Tech Computer Science');
}
if($("#new_branch").val()=='02')
{
	
$("#branch").html('B.Tech Information Technology');
}
if($("#new_branch").val()=='03')
{
	
$("#branch").html('BCA');
}
if($("#new_branch").val()=='04')
{
$("#branch").html('MCA');
}
if($("#new_branch").val()=='05')
{
	
$("#branch").html('BSc. IT');
}
if($("#new_branch").val()=='06')
{
	
$("#branch").html('MSc. IT');
}
if($("#new_branch").val()=='07')
{
	
$("#branch").html('Specified degree/diploma');
}
if($("#new_branch").val()=='11')
{
	
$("#branch").html('BSc Animation');
}
if($("#new_branch").val()=='12')
{
	
$("#branch").html('Specified degree/diploma');
}
if($("#new_branch").val()=='21')
{
	
$("#branch").html('M.A. Mass Comm');
}
if($("#new_branch").val()=='22')
{
	
$("#branch").html('Mass Comm');
}

if($("#new_branch").val()=='23')
{
	
$("#branch").html('Specified degree/diploma');
}

if($("#new_branch").val()=='31')
{
	
$("#branch").html('M.A. Mass Comm');
}

if($("#new_branch").val()=='32')
{	
$("#branch").html('Mass Comm');
}

if($("#new_branch").val()=='33')
{
$("#branch").html('BBA');
}

if($("#new_branch").val()=='34')
{	
$("#branch").html('Specified degree/diploma');
}
if($("#new_branch").val()=='41')
{	
$("#branch").html('MBA (Marketing)');
}
if($("#new_branch").val()=='42')
{	
$("#branch").html('Specified degree/diploma');
}
if($("#new_branch").val()=='51')
{	
$("#branch").html('MBA (Marketing)');
}
if($("#new_branch").val()=='52')
{
	
$("#branch").html('MBA (Finance)');
}
if($("#new_branch").val()=='53')
{	
$("#branch").html('MBA (Human Resource)');
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
url: "php/deleted1_internship.php", 
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
$("#college").html('');
$("#branch").html('');
$("#email").html('');
$("#phone").html('');
$("#department-of-work").html('0');
$("#training-officer").html('0');
$("#registration_id").html('');
}
	});
	
}
	

	
 


 

