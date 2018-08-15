     
<?php
	//Start session
		
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_FIRST_NAME'] ) || (trim($_SESSION['SESS_FIRST_NAME'] ) == '') && !isset($_SESSION['SESS_LAST_NAME'] ) || (trim($_SESSION['SESS_LAST_NAME'] ) == '')) {
		header("location: index.html");
		exit();

	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Wt It Solution Pvt Ltd</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
      var date_input=$('input[id="start"]'); 
	  var date_input1=$('input[id="end"]'); 
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
	  date_input1.datepicker(options);
   
    })
</script>  

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
.form-control{
height:27px;
padding:1px;
font-size:13px;
}  
.card{
    background-color: rgba(23,164,182,0.2);
  }
  </style>
  <script src='js/up_agreement.js'></script>
  <script type="text/javascript">
window.onresize = resize;
// resize function for internet exlporer
function resize()
{
 if ($(window).width() < 800) {

  
		$('#form-element').css("width","100%");	
        $('#img-id').css("height","100px");
        $('#img-id').css("width","100px");		
}
else {

  
		$('#form-element').css("width","60%");	
		$('#img-id').css("height","150px");
        $('#img-id').css("width","150px");
}
}	

// another resize function for chrome and safari
	$( document ).ready(function()
	{
    var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
    if (mobile) { 
        
        
		$('#form-element').css("width","100%");
		 $('#img-id').css("height","100px");
        $('#img-id').css("width","100px");		
}
     
	else
	{
	
		$('#form-element').css("width","60%");
		$('#img-id').css("height","150px");	
        $('#img-id').css("width","150px");
	}
	
	});
	
	</script>
	<script type="text/javascript">
    function is_selected()
   {
      $("#ab").html('<div  class="col-md-5" style="color: #ffffff;"><label  id="dynamic"  for="serach" style="text-align: left; color:#fff; "></label></div><div class="col-md-1"></div><div class="col-md-6"><input type="text" name="search_option" class="form-control"  id="search_by"></div>')
      $("#ab").css("padding","20px");
	    $("#dynamic").css("color","#ffffff");


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
  $('#candile').css('margin-left','0px');
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
    function phone()
    {
      
      var invalidChars = [
  "-",
  "+",
  "e",
];

 if (invalidChars) {
    return false;  
    

    }
  }

	</script>
   <script type="text/javascript">
    function phone()
    {
      
      var invalidChars = [
  "-",
  "+",
  "e",
];

 if (invalidChars) {
    return false;  
    

    }
  }

  </script>

<!--//skycons-icons-->
</head> 
<body onload="$('#loading').fadeOut(); dater();">
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<h3 style="position:absolute;margin-left:4%; margin-top:3.8%;color:#ffffff;">Certificate Management System</h3>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
									
											<div align="right" style=" position:relative; margin-right:14px;" >
<img src="images/Wt.png" style=" height: 100px; width: 100px" class="img-fluid"  ondragstart="return false" >
</div>
																		
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
																

									       <li class="dropdown note">
										   
											
														  <div class="clearfix"></div>	
												
														
										
							
										  <div class="clearfix"></div>	
										 </a></li>
										
											

											
										   
										   <div class="clearfix"></div>	
										 
						<li class="dropdown note">
						</li>
								
										
											
											
										   
									
											<div class="task-info"></div>
												
											
							   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<div class="outter-wp">
								<!--custom-widgets-->
												
												<!--//custom-widgets-->
												<!--/candile-->
													<div class="candile" style="margin-left: 10%;" id="candile">


<div id="loading" style="color:white;position:fixed;display:block;width:100%;height:100%;background:rgba(0,0,0,0.6);z-index:1366;">


<br><br><br><br><br>
<center>
<img src="images/loading.gif" style="height:100px; width:100px;">
<br>
<h5>Loading...</h5>
</center>
</div>
<div id='result'></div>
<form  style="width:50%; margin-right: 20%;" id="form-element" autocomplete="off" >

<div style= "background:rgba(225,225,225,0.1)"   class="container">


     <h1 style="color:#ffffff">Agreement Information</h1>
     <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
	 <div>
     <div  class="card" id="bc" >
     <div  class="row" style="padding-top: 3%; margin:2%;">
      <div>
        <label for="search_by" style="color: #ffffff">
          Search By :
        </label>
      </div>
       <div class="col-md-3  col-xs-10" align="left">
          <select onchange="is_selected();" class="form-control form-control-lg input " id="search" name="search" style="height: 26px; padding-top: 1px" >
         <option selected="selected" disabled="disabled" hidden value="0" >Search By</option>
         <option value="1" >Email</option>
         <option value="2">Phone Number</option>
         <option value="3">Registration ID</option>
      </select>
       </div> 
        <div class="col-md-2 col-xs-4" align="left"  style="padding-bottom: 5%;">
       <button type="button" class="btn btn-default input"  style="padding-right:18px; padding-left:18px; background-color:#88C9C9 ;margin-top: 0px; " onclick="valid_search();">
        Search
       </button>
       </div>
	   </div>
      
       <div class="row"  id="ab">
        </div>
        <input type="hidden" id="hidden_text" value="" />
     </div>
<div class="form-group"> 
 <div class="row">
  <div class="col-sm-6 bg">
       <label for="name"style="color:#ffffff"  >Enter Full Name</label>
       <input type="name" class="form-control a" id="name"  name="name" onkeydown="return ((event.keyCode > 64 && event.keyCode < 91) ||  event.keyCode == 8 || event.keyCode == 32)" >
	   </div>
	   <div class="col-sm-6 ">
	<div class="row">

<div class="col-6 bg">

        
        	<label style="position:relative; color: #ffffff; padding-bottom:-4%;" > From:</label>
        
        <input class="form-control a" type="text" value="" id="start" name="start"  >
	        
</div>
<div  class="col-6 bg">
	
       
        	<label style="position:relative;  color: #ffffff;"> To:</label>
        
        <input class="form-control a" type="text" value="" id="end" name="end"  >
</div>
</div>
</div>
      
		</div>
<br>

<div class="row">
<div class="col-sm-6 ">

 <label for="email" style="color:#ffffff; padding-bottom:-2%;"> Enter Email</label>
      <input type="email" class="form-control a" id="email"   name="email" autocomplete="nope">
</div>
<div class="col-sm-6 ">
<label for="phone"style="color:#ffffff" >Enter Phone No.</label>
       <input type="number" class="form-control input" id="phone"  name="phone"  maxlength = "10"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="phone();" >
</div>
</div>
	   <div class="row">
	   <div class="col-sm-6 bg ">
      <label for="registration_id" style="margin-top: 8px; color: #fff" >Registration ID</label>
      <input type="text" class="form-control input" id="registeration_id"  name="registration_id" >
    </div>


</div>
<div>
		<input type="hidden" value="Agreement_Letter" id="certificate_category" >
		</div>

       <br><br>
       
        <div class="row txt" >
        <span class="col-6  ">
        <button type="button" class="btn btn-default input " style="background-color:#88C9C9; height: 40px; " onclick="updating();"> &nbsp Update &nbsp </button>
    </span>
   
    <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
    </div>
		</div>
</div>
</div>

</form>													



<footer style="margin-left:-20%; width:140%; ">
	<center><b><b><p style="color:#ffffff; font-size: 15px; margin-bottom:0px">WT IT SOLUTIONS (P) Ltd</b></b></p>
<i><p style="color:#ffffff; font-size: 12px;margin-bottom:0px">Ensure success on web</i></p>
<p style="color: #ffffff; font-size: 12px">(2017 All Rights Reserved)</p>
</center>
</footer>
			</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu wrapper" style="position:fixed; ">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1><b>VARKIT<b></h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									   <a href="admin.php"><img height='90px;' width='90px;' src="
									  <?php
									  echo $_SESSION['image'];
									?>
									  "></a>
									  <a href="admin1.php"><span class=" name-caret">
									  <?php
									 // echo $_SESSION['SESS_FIRST_NAME'];
									  echo $_SESSION['fname']."  ".$_SESSION['lname'];
									  
									  ?>
									  </span></a>
								
									 <br>
									<ul>
									<li><a class="tooltips" ><span > <a type="button"  data-toggle="modal" data-target="#myModal"  style="background-color:rgba(255,255,255,0.1);text-decoration:none;"></span><i class="lnr lnr-user" style="border-style:none;border:0;cursor:pointer;"></i></a></li>
										<li><a class="tooltips" href="setting.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Log Out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
										<br>
										<br>
										<br>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										
										<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Employee Certificate</span> <span class="fa fa-angle-right" style="float: right; "></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="update_relieving1.php">Relieving Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="update_salary1.php">Salary Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="update_experience1.php">Experience Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="update_appointing.php">Appointment Certificate</a></li>
								</ul> </li>
								
							<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Intern Certificate</span> <span class="fa fa-angle-right" style="float: right; "></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="update_agreement.php">Internship aggrement</a></li>
												<li id="menu-academico-boletim" ><a href="update_internship.php">Internship Certificate</a></li>
											
								</ul> </li>
									
									<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Get Certificate</span> <span class="fa fa-angle-right" style="float: right; "></span></a>
									<ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="php/name-dropdown.php">Generate Certificate</a></li>
												</ul>
												</li>

									
									
									 <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> <span>Help</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href=""><i class="glyphicon glyphicon-earphone"></i> Call Us</a></li>
										
									
									  </ul>
									</li>
							       
									
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   
   
    <div  style='z-index:200000000'class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a href="admin.php" style="position:relative; left:-178px;"><img height='90px;' width='90px;' src="
									  <?php
									  echo $_SESSION['image'];
									  ?>
									  "></a>
        </div>
        <div class="modal-body">
		 <center><label for="user_name">User Name:</label></center>
          <a href="admin.php"><span class=" name-caret">
									  <?php
									 // echo $_SESSION['SESS_FIRST_NAME'];
									  echo $_SESSION['fname']."  ".$_SESSION['lname'];
									  
									  ?>
									  </span></a>
        </div>
		<div class="modal-body">
		  <center><label for="email">Email:</label> </center>
          <a href="admin.php"><span class=" name-caret">
									  <?php
									 // echo $_SESSION['SESS_FIRST_NAME'];
									  echo $_SESSION['SESS_FIRST_NAME'];
									  
									  ?>
									  </span></a>
        </div>
		<div class="modal-body">
		 <center> <label for="password">Password:</label> </center>
          <a href="admin.php"><span class=" name-caret">
									  <?php
									 // echo $_SESSION['SESS_FIRST_NAME'];
									  echo "*****";
									  
									  ?>
									  </span></a>
        </div>
		<div class="modal-body">
		 <center> <label for="phone">Phone_no:</label> </center>
           <a href="admin.php"><span class=" name-caret">
									  <?php
									 // echo $_SESSION['SESS_FIRST_NAME'];
									  echo $_SESSION['phone'];
									  
									  ?>
									 
									  </span></a>
        </div>
		
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>