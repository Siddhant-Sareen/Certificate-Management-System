 function validateEmail($email) 
 {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}



function deleted(){

	 $.ajax({
type: "POST",
url: "php/delete_appointing.php", 

data: { search:$("#search_by").val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){

$("#loading").fadeOut();

alert(response);
$("#name").html("");
$("#address").html('');
$("#phone").html('');
$("#email").html('');
$("#job-title").html('');
//$("#appointing-officer").val('0');
//$("#officer-designation").val('0');
$("#place-of-posting").html('');
//$("#timefrom").val('');
//$("#timeto").val('');
//$("#date1").val('');
$("#registration_id").html('');
//$("#salary").val('');
//$("#date-of-printing").val('');
 }
});
}

function select_delete()
{
	 $.ajax({
type: "POST",
url: "php/search_for_delete.php", 

data: { search:$('#search_by').val()},
beforeSend: function() {
$("#loading").fadeIn();
},
success:function(response){


if(response=="no" )
{
	alert("no result found");
$("#name").html('');
$("#address").html('');
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
$("#loading").fadeOut();
}
else{


$("#result").html(response);
$("#name").html($("#new_name").val());
$("#address").html($("#new_address").val());
$("#email").html($("#new_email").val());
$("#phone").html($("#new_phone").val());
if ($("#new_jt").val()){
	if ($("#new_jt").val()=="1")
	{
	 $("#job-title").html("English Content Writer");
	}
	else if ($("#new_jt").val()=="2"){
		$("#job-title").html("Hindi Content Writer");
	}
	else if ($("#new_jt").val()=="3"){
		$("#job-title").html("Web Developer");
	}
	else if ($("#new_jt").val()=="4"){
		$("#job-title").html("Graphic Designer");
	}
	else if ($("#new_jt").val()=="5"){
		$("#job-title").html("Social Media Executive");
	}
	else if ($("#new_jt").val()=="6"){
		$("#job-title").html("Public Relations Manager");
	}
	else if ($("#new_jt").val()=="7"){
		$("#job-title").html("Public Relations Officer");
	}
	else if ($("#new_jt").val()=="8"){
		$("#job-title").html("Public Relations Manager");
	}
	
	else{
		alert("nope");
	}
	}
if ($("#new_pp").val()){
	if ($("#new_pp").val()=="1")
	{
	 $("#place-of-posting").html("Jakhan Branch");
	}
	else if ($("#new_pp").val()=="2"){
		$("#place-of-posting").html("Majeeri Branch");
	}
	
	else{
		alert("nope");
	}
	}
if($("#new_regid").val()){
		$("#registration_id").html($("#new_regid").val());
	}

	$("#loading").fadeOut();
}
 }
});

}



function valid_search_delete()

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
		alert('Invalid Email !');
	$('#search_by').focus();
	return false;
	}
	else 
		{ 
		select_delete();
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
	select_delete();
}
else if($("#hidden_text").val()=="value_reg")

{

if($("#search_by").val()=="")

{
	alert("Enter the correct registration number");
}
else
	select_delete();

}

else{
	
alert('nothing');

}
}


