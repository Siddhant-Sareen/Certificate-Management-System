 function pass_change()
{
	if($("#old1").val()=="")
{

alert('old password is mandatory ');
$("#old").focus();
return false;
} 

else if($("#new1").val()=="")
{

alert('new password is mandatory ');
$("#old").focus();
return false;
} 


else if($("#confirm1").val()=="")
{

alert('confirming field is mandatory ');
$("#old").focus();
return false;
} 

else
{
 $.ajax({
type: "POST",
url: "php/update_pass.php", 
//data: {name1:$("#name").val()},
data: {old1:$("#old1").val(), new1:$("#new1").val() ,confirm1:$("#confirm1").val(),username:$("#username").val(),},

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

$("#old1").val('');
$("#new1").val('');
$("#confirm1").val('');

 }
});

  
  
 }

}
