     
<?php
	//Start session
		
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_FIRST_NAME'] ) || (trim($_SESSION['SESS_FIRST_NAME'] ) == '') && !isset($_SESSION['SESS_LAST_NAME'] ) || (trim($_SESSION['SESS_LAST_NAME'] ) == '')) {
		header("location: newlogin.php");
		exit();

	}
?>

<html>
<head>
<title>Wt It Solution Pvt Ltd</title>
<link rel="shortcut icon" href="wt.png"/>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="dater.js"></script>
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
<script>
    $(document).ready(function(){
      var date_input=$('input[id="date1"]'); 
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
<body onload="$('#loading').fadeOut(); dater();autoformnumber();">
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section" >
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"></div>
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
									
											<div align="right" style=" position:relative; margin-right:14px;padding-top:10%;" >
<img src="wt.png" style=" height: 100px; width: 100px" class="img-fluid"  ondragstart="return false" >
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
													<div class="candile">


<div id="loading" style="color:white;position:fixed;display:block;width:100%;height:100%;padding-right:24%;padding-top:-200%;background:rgba(0,0,0,0.6);z-index:1366;">


<br><br><br><br><br>
<center>
<img src="images/loading.gif" style="height:100px; width:100px;">
<br>
<h5>Loading...</h5>
</center>
</div>
<center>													
<form action="/action_page.php"   id="form-element"  >
<div style= "background:rgba(225,225,225,0.1); padding: 15px;"   class="container " >


     <h3 style="color:#ffffff" align="left">Edit Information</h3>
     <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
     <div >

       
     </div>
		 <div class="form-group "> 
		 <div class="row txt">
     	 <div class="col-sm-6 bg col-xs-12">
       <label for="name" style="color:#ffffff"  >Enter Full Name</label>
       <input type="name" class="form-control input" id="name"  name="name"onkeydown="return ((event.keyCode > 64 && event.keyCode < 91) ||  event.keyCode == 8 || event.keyCode == 32)" maxlength=30>
	   </div>
<br>
<div class="col-sm-6 bg txt col-xs-12">
      <label for="name" style="color:#ffffff"  >Enter address</label>
      <input type="address" class="form-control input" id="address"  name="address">
	  </div>
	  </div>
	</div>
	<div class="form-group "> 
	  <div class="row  txt">
	  	<div class="col-sm-6 col-xs-12">

	  		 <label for="email" style="color:#ffffff" > Enter Email</label>
       <input type="email" class="form-control input" id="email"  name="email">
	  	</div>
	  	<div class="col-sm-6 col-xs-12">

	  		 <label for="phone"style="color:#ffffff" >Enter Phone No.</label>
       <input type="number" class="form-control input" id="phone"  name="phone"  maxlength = "10"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="phone();" >
	  	</div>
	  </div>
</div>
<div class="dropdown-zone row txt">
	<div class="col-sm-6 col-xs-12">
      <label for="job-title" style="color:#ffffff">Job Title</label>
      <select class="form-control form-control-lg input " id="job-title" name="job-title" style="height: 26px; padding-top: 1px">
	     <option selected='selected' hidden value="0" disabled>none</option>
         <option value='1'>first</option>
         <option value='2'>second</option>
         <option value='3'>third</option>
      </select>
      </div>
       <div class="col-sm-6 bg col-xs-12">
        <label for="Appointing-officer" style="color:#ffffff">Appointing officer</label>
        <select class="form-control form-control-lg input select" id="appointing-officer" style="height: 26px; padding-top: 1px" name="appointing-officer">
		  <option selected='selected' hidden value="0">none</option>
          <option value='1'>first</option>
          <option value='2'>second</option>
          <option value='3'>third</option>
        </select>
		</div>
</div>

<div class="form-group">
<div class="row txt">
    
	<div class="col-sm-6 bg col-xs-12">
        <label for="officer-designation"style="color:#ffffff" >Officer Designation</label>
        <select class="form-control form-control-lg  select txt" id="officer-designation" style="height: 26px; padding-top: 1px;" name="officer-designation">
		  <option selected='selected' hidden value="0">none</option>
          <option value='1'>first</option>
          <option value='2'>second</option>
          <option value='3'>third</option>
       </select>
	 </div>
	 <div class="col-sm-6 bg col-xs-12">
      <label for="place-of-posting" style="color:#ffffff">Place of joining</label>
      <select class="form-control form-control-lg  select" id="place-of-posting" style="height: 26px; padding-top: 1px" name="place-of-posting">
	     <option selected='selected' hidden value="0">none</option>
         <option value='1'>Jakhan Branch </option>
         <option value='2'>Majeeri Branch</option>
      </select>
	  </div>
</div>
</div>
<div class="row form-group txt">

<div class="col-md-6 col-xs-12">
<label for="working-hours" class="col-sm-6 col-form-label form-group " style="position:relative; color: #ffffff; padding-right: :1px;">Working Hours</label>
	<div class="row ">

<div class="col-6 col-md-6 bg col-xs-12">

        <br>
        	<label style="position:relative;  color: #ffffff ;height:18px"  > From:</label>
        
        <input class="form-control input" type="time" value="" id="timefrom" name="timefrom" onpaste="return false">
	        
</div>
<div  class="col-6 bg col-xs-12" >
	<br>
       
        	<label style="position:relative;  color: #ffffff ;height:18px" > To:</label>
        
        <input class="form-control input" type="time" value="" id="timeto" name="timeto" onpaste="return false">
</div>
</div>
</div>
 <div class="col-md-6 col-xs-12 ">
 <div class="row">
 <div class="col-md-12 ">
  <label for="date-of-joining" class="col-form-label " style="position:relative; color: #ffffff"  >Date of joining</label>
  
    <input type="text" class="form-control input" value="" id="date1" name="date" onload="date();" readonly style="margin-bottom: 7px;"></div>

<div class="col-md-12 col-xs-10 bg txt">
      <label for="registration_id" style="margin-top: 8px; color: #fff" >Registration ID</label>
      <input type="text" class="form-control input" id="registration_id"  name="registration_id" readonly>
    </div>
</div>
</div>
</div>

<div class="dropdown-zone">
<div class="row txt">
     
<br>
       <div class="col-sm-6 bg col-xs-12">
     <label for="salary"style="color:#ffffff" >Salary</label>
     <input type="salary" class="form-control input" id="salary"  name="salary">
	 </div>
	 <div class="col-sm-6 col-xs-12">
	 <label for="date-of-printing" class="col-sm-6 " style="position:relative; left:-12px;color:#ffffff">Date of Printing</label>
        <input class="form-control input" type="text"  id="date-of-printing" name="date-of-joining">
        </div>
	   </div>
</div>
       
        <div class="row txt" >
        <span class="col-6  ">
        <button type="button" class="btn btn-default input" style="background-color:#88C9C9; " onclick="valid();"> &nbsp Submit &nbsp </button>
		</span>
		<span class="col-6  ">
		<button type="button" class="btn btn-default input"  style="padding-right:18px; padding-left:18px; background-color:#88C9C9 " onclick="a= confirm('Are you sure you want to reset ? After clicking \'OK\', all your information will be cleared !!'); if(a){reset();} else{};">Reset
		</button>
		</span>
		<hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
		</div>
</div>


</form>
</center>
<footer>
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
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"><img src="images/admin.jpg"></a>
									  <a href="index.html"><span class=" name-caret"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></span></a>
									 
									 <br>
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="newlogin.php"><span>Log Out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
										<br>
										<br>
										<br>
									</div>
							   <!--//down-->
                           <div class="menu"  >
									<ul id="menu" >
											<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										
										 <li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Employee Certificate</span> <span class="fa fa-angle-right" style="float: right; "></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="relieving1.html">Relieving Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="salary1.html">Salary Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="update_experience1.php">Experience Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="index.html">Appointment Certificate</a></li>
								</ul> </li>
								
							<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Intern Certificate</span> <span class="fa fa-angle-right" style="float: right; "></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="index.html">Internship aggrement</a></li>
												<li id="menu-academico-boletim" ><a href="internship.html">Internship Certificate</a></li>
											
								</ul> </li>
									
									<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Get Certificate</span> <span class="fa fa-angle-right" style="float: right; "></span></a>
									<ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="index.html">Generate Certificate</a></li>
												</ul>
												</li>

									
									 <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> <span>Help</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="inbox.html"><i class="glyphicon glyphicon-earphone"></i> Call Us</a></li>
										<li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
									
									  </ul>
									</li>
							       
									
									
								  </ul>
									
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
</body>
</html>