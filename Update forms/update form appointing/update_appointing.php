<?php
  //Start session
    
  session_start();
  //Check whether the session variable SESS_MEMBER_ID is present or not
  if(!isset($_SESSION['SESS_FIRST_NAME'] ) || (trim($_SESSION['SESS_FIRST_NAME'] ) == '') && !isset($_SESSION['SESS_LAST_NAME'] ) || (trim($_SESSION['SESS_LAST_NAME'] ) == '')) {
    header("location: newlogin.php");
    exit();

  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Certificate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="wt.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="dater.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <style>
  .form-group{
  margin-bottom:3%;
  margin-top:3%;
  color:#ffffff;
  
  }
  .dropdown-zone{
  margin-bottom:3%;
  margin-top:3%;
   color:#ffffff;
  
  }
  body{
  background-image:url("Blue-Background-HQ-Desktop-Wallpaper-16270.jpg");
  background-repeat:no-repeat;
  background-size:cover;}
  .txt{
    font-size: 14px;
    text-align: left;
  }
  .input{
    size: 16px;
    font-size: 13px;
    padding-left: 2%;
    padding-right: 2%;
    padding-top: 2px;
    padding-bottom: 2px;
  }
  .card{
    background-color: rgba(23,164,182,0.2);
  }
  
  </style>
  <script src='main.js'></script>
  <script type="text/javascript">
window.onresize = resize;
// resize function for internet exlporer
function resize()
{
 if ($(window).width() < 800) {

  
    $('#form-element').css("width","100%");
    $('input').removeClass('input');
    $('select').removeClass('input');
    $('select').css("height","38px");
    $('select').css("padding-top","1px");
    $('button').removeClass('input');
    

      
}
else {

  $('#form-element').css("width","56.5%");
  $('input').addClass('input');
  $('select').addClass('input');
  $('select').css("height","26px");
  $('select').css("padding-top","6px");
  $('button').addClass('input');
 


}

// another resize function for chrome and safari
  $( document ).ready(function() {
    var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
    if (mobile) { 
        
        $('#form-element').css("width","100%");
        $('input').removeClass('input');
        $('select').removeClass('input');
        $('select').css("height","38px");
        $('button').removeClass('input');
        
    } 
  else
  {
  $('#form-element').css("width","56.5%");
  $('input').addClass('input');
  $('select').addClass('input');
  $('select').css("height","26px");
  $('button').addClass('input');
  
  });
  
  }
  
  </script>
  
  <script>
  $( document ).ready(function() {
     function getBrowserSize(){
       var w, h;

         if(typeof window.innerWidth != 'undefined')
         {
          w = window.innerWidth; //other browsers
          h = window.innerHeight;
         } 
         else if(typeof document.documentElement != 'undefined' && typeof      document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0) 
         {
          w =  document.documentElement.clientWidth; //IE
          h = document.documentElement.clientHeight;
         }
         else{
          w = document.body.clientWidth; //IE
          h = document.body.clientHeight;
         }
       return {'width':w, 'height': h};
}

if(parseInt(getBrowserSize().width) < 800)
{
 $('#form-element').css("width","100%");  
 $('input').removeClass('input');
 $('select').removeClass('input');
 $('select').css("height","38px");
 $('button').removeClass('input');
    }
    else
    {
    $('#form-element').css("width","56.5%");
     $('input').addClass('input');
      $('select').addClass('input');
      $('select').css("height","26px");
      $('button').addClass('input');
       

    }
    });
  </script>
   
  <script type="text/javascript">
    function is_selected()
   {
      $("#ab").html('<div  class="col-md-5" style="color: #ffffff;"><label  id="dynamic"  for="serach" style="text-align: left;"></label></div><div class="col-md-1"></div><div class="col-md-6"><input type="text" name="search_option" class="form-control"  id="search_by"></div>')
      $("#ab").css("padding","20px");


      if($("#search").val()=="1")
    {
      $("#dynamic").html("Enter Email");
      $("#search_by").slideUp();
      $("#search_by").slideDown();
      //$("#search_by").attr("id","value_email");
      $("#hidden_text").val("value_email");
      
      
    }

    if($("#search").val()=="2")
    {
      $("#dynamic").html("Enter Phone Number");
      $("#search_by").slideUp();
      $("#search_by").slideDown();
      //$("#search_by").attr("id","value_phone");
        $("#hidden_text").val("value_phone");
        $("#search_by").attr("type","number");
      
    }
    
    if($("#search").val()=="3")
    {
      $("#dynamic").html("Enter Registration ID");
      $("#search_by").slideUp();
      $("#search_by").slideDown();
      //$("#search_by").attr("id","value_reg");
      $("#hidden_text").val("value_reg");
      
    }
    }

  </script>
<script>
    $(document).ready(function(){
      var date_input=$('input[id="date1"]'); 
    //var date_input1=$('input[id="end"]');
    
    //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
   
    })
</script>  
</head>
<body onload="$('#loading').fadeOut();dater(); $('#search_by').slideUp();" oncontextmenu="return false" onselectstart="return false">
<div id="loading" style="color:white;position:fixed;display:block;width:100%;height:100%;background:rgba(0,0,0,0.6);z-index:1366;">
<br><br><br>

<br><br><br><br><br><br><br><br><br><br>
<center>
<img src="images/loading.gif" style="height:100px; width:100px;" ondragstart="return false">
<br>
<h5>Loading...</h5>
</center>
</div>
<div id='result'></div>
  <header><div align="right" style="padding-right: 2%" >
<img src="wt.png" style=" height: 100px; width: 100px" class="img-fluid"  ondragstart="return false" >
</div>.
  </header>
  <center>
<form action="/action_page.php" style="width: 56.5% "   id="form-element" autocomplete="off" >
<div style= "background:rgba(225,225,225,0.1)"   class="container " >
    <h3 style="color:#ffffff" align="left">Edit Information</h3>
     <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
     <div>
      <div  class="card" id="bc" >
     <div  class="row" style="padding-top: 3%; margin:2%;">
      <div>
        <label for="search_by" style="color: #ffffff">
          Search By :
        </label>
      </div>
       <div class="col-md-3  col-xs-4" align="left">
          <select onchange="is_selected();" class="form-control form-control-lg input " id="search" name="search" style="height: 26px; padding-top: 1px" >
         <option selected="selected" disabled="disabled" hidden value="0" >Search By</option>
         <option value="1" >Email</option>
         <option value="2">Phone Number</option>
         <option value="3">Registration ID</option>
      </select>
       </div> 
        <div class="col-md-2 col-xs-4" align="left"  style="padding-bottom: 5%;">
       <button type="button" class="btn btn-default input"  style="padding-right:18px; padding-left:18px; background-color:#88C9C9 ; " onclick="valid_search();">
        Search
       </button>
       </div>
	   </div>
      
       <div class="row"  id="ab">
        </div>
        <input type="hidden" id="hidden_text" value="" />
     </div>
   </div>
     <div class="form-group "> 
     <div class="row txt">
       <div class="col-sm-6 bg ">
       <label for="name"  >Enter Full Name</label>
       <input type="name" class="form-control input" id="name"  name="name"onkeydown="return ((event.keyCode > 64 && event.keyCode < 91) ||  event.keyCode == 8 || event.keyCode == 32)" maxlength=30>
     </div>
<br>
<div class="col-sm-6 bg txt">
      <label for="name"  >Enter address</label>
      <input type="address" class="form-control input" id="address"  name="address">
    </div>
    </div>
  </div>
  <div class="form-group "> 
    <div class="row  txt">
      <div class="col-sm-6">

         <label for="email"  > Enter Email</label>
       <input type="email" class="form-control input" id="email"  name="email">
      </div>
      <div class="col-sm-6">

         <label for="phone" >Enter Phone No.</label>
       <input type="number" class="form-control input" id="phone"  name="phone"  maxlength = "10"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="phone();" >
      </div>
    </div>
</div>
<div class="dropdown-zone row txt">
  <div class="col-sm-6">
      <label for="job-title">Job Title</label>
      <select class="form-control form-control-lg input " id="job_title" name="job-title" style="height: 26px; padding-top: 1px">
       <option selected="selected" value="0">none</option>
         <option value='1'>first</option>
         <option value='2'>second</option>
         <option value='3'>third</option>
      </select>
      </div>
       <div class="col-sm-6 bg">
        <label for="Appointing-officer" c>Appointing officer</label>
        <select class="form-control form-control-lg input select" id="appointing_officer" style="height: 26px; padding-top: 1px" name="appointing-officer">
      <option selected="selected"  hidden value="0">none</option>
          <option value='1'>first</option>
          <option value='2'>second</option>
          <option value='3'>third</option>
        </select>
    </div>
</div>

<div class="form-group">
<div class="row txt">
    
  <div class="col-sm-6 bg">
        <label for="officer-designation" >Officer Designation</label>
        <select class="form-control form-control-lg  select " id="officer_designation" style="height: 26px; padding-top: 1px;" name="officer-designation">
      <option selected="selected"  hidden value="0">none</option>
          <option value='1'>first</option>
          <option value='2'>second</option>
          <option value='3'>third</option>
       </select>
   </div>
   <div class="col-sm-6 bg">
      <label for="place-of-posting" >Place of joining</label>
      <select class="form-control form-control-lg  select" id="place_of_posting" style="height: 26px; padding-top: 1px" name="place-of-posting">
       <option selected="selected"  hidden value="0">none</option>
         <option value='1'>Jakhan Branch </option>
         <option value='2'>Majeeri Branch</option>
      </select>
    </div>
</div>
</div>
<div class="row form-group txt">

<div class="col-sm-6">
<label for="working-hours" class="col-sm-6 col-form-label input form-group " style="position:relative; color: #ffffff">Working Hours</label>
  <div class="row txt">

<div class="col-6 bg">

        <br>
          <label style="position:relative;  color: #ffffff ;height:18px">From:</label>
        
        <input class="form-control input" type="time" value="" id="timefrom" name="timefrom">
          
</div>
<div  class="col-6 bg " >
  <br>
       
          <label style="position:relative;  color: #ffffff ;height:18px" > To:</label>
        
        <input class="form-control input" type="time" value="" id="timeto" name="timeto">
</div>
</div>
</div>
 <div class="col-md-6 col-xs-12 ">
 <div class="row">
 <div class="col-md-12 ">
  <label for="date-of-joining" class="col-form-label " style="position:relative; color: #ffffff">Date of joining</label>
  
    <input type="text" class="form-control input" value="" id="date1" name="date" onload="date();" style="margin-bottom: 5px;"></div>

<div class="col-md-12 col-xs-10 bg txt">
      <label for="name">Registration ID</label>
      <input type="address" class="form-control input" id="Registeration_id"  readonly name="address">
    </div>
</div>
</div>
</div>
<div class="dropdown-zone">
<div class="row txt">
     
<br>
       <div class="col-sm-6 bg">
     <label for="salary" >Salary</label>
     <input type="salary" class="form-control input" id="salary"  name="salary">
   </div>
   <div class="col-sm-6">
   <label for="date-of-printing" class="col-sm-6 " style="position:relative; left:-12px;">Date of Printing</label>
        <input class="form-control input" type="text"  id="date-of-printing" name="date-of-joining">
        </div>
     </div>
</div>
       
        <div class="row txt" >
        <span class="col-6  ">
        <button type="button" class="btn btn-default input" style="background-color:#88C9C9; " onclick="updating();"> &nbsp Update &nbsp </button>
    </span>
   
    <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
    </div>
</div>


</form>
</center>
<footer>
  <center><b><b><p style="color:#ffffff; font-size: 15px; margin-bottom:0px">WT IT SOLUTIONS (P) Ltd</b></b></p>
<i><p style="color:#FDA400; font-size: 12px;margin-bottom:0px">Ensure success on web</i></p>
<p style="color: #ffffff; font-size: 12px">(2017 All Rights Reserved)</p></center>
</footer>

 </body>
</html>
 
  