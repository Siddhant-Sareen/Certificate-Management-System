     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
#frame{
  	position: relative;
width: 65%;
margin-left: 17%;
margin-top: 5%;
margin-bottom: 2%;
margin-right: 10%;
background: rgba(0, 0, 0, 0.6);
  }
  .card{
  width:70%;
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
			<div class="header-section">
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
</div>
	</header>
	<div id="frame" class="container">

	<div class="row" style="padding-top:7.5%; padding-bottom:3%;" >
		<div class="col-md-2 col-xs-12" ></div>
		<div class="col-xs-12 col-md-4" >
		<div class="card text-white bg-info mb-3 hvr-grow" style="max-width: 18rem;">
 
  			<div class="card-body">
    <div >
  					<center>
					<a href="create.php"><img src="images/UI_Icons_Outline-05-512.png" class="card-img img-fluid" style="height:100px;width:100px;"></img></a></center>
  					<h6 style="text-align: center;padding-top:2.5%;"> CREATE</h6>
  					
  				</div>

   
  			</div>
		</div>
	</div>
	<div class="col-md-1 col-xs-12" s></div>
	<div class="col-xs-12 col-md-4">
		<div class="card text-white bg-info mb-3 hvr-grow">
 
  			<div class="card-body ">
  				<div >
  					<center><a href="search.php"><img src="images/search-512.png" class="card-img img-fluid" style="height:100px;width:100px;"></img></a></center>
  					<h6 style="text-align: center;padding-top:2.5%;"> SEARCH</h6>
					
  				</div>
  			</div>
		</div>
	</div>
	</div>
	<div class="row" style="padding-top:5%; padding-bottom:5%;" >
		<div class="col-md-2 col-xs-12" s></div>
		<div class="col-xs-12 col-md-4" >
		<div class="card text-white bg-info mb-3 hvr-grow" style="max-width: 18rem;">
 
  			<div class="card-body">
    <div>
  					<center><a href="edit.php" ><img src="images/Edit.png" class="card-img img-fluid" style="height:100px;width:100px;"></img></a></center>
  					<h6 style="text-align: center;padding-top:2.5%;"> EDIT</h6>
  	
  	</div>

   
  			</div>
		</div>
	</div>
	<div class="col-md-1 col-xs-12" s></div>
	<div class="col-xs-12 col-md-4">
		<div class="card text-white bg-info mb-3 hvr-grow">
 
  			<div class="card-body ">
  				<div >
  					<center><a href="delete.php" ><img src="images/delete.png" class="card-img img-fluid" style="height:100px;width:100px;"></img></a></center>
  					<h6 style="text-align: center;padding-top:2.5%;"> DELETE</h6>
  				</div>
  			</div>
		</div>
	</div>
	</div>
	</div>
</center>
<footer style="margin-left:-20%; width:140%; " >
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
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1><b>VARKIT</b></h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down" style="text-transform:capitalize;">	
									 <a href="admin.php"><img height='90px;' width='90px;' src="
									  <?php
									  echo $_SESSION['image'];
									  ?>
									  "></a>
									  <a href="admin.php"><span class=" name-caret">
									  <?php
									 // echo $_SESSION['SESS_FIRST_NAME'];
									  echo $_SESSION['fname']."  ".$_SESSION['lname'];
									  
									  ?>
									  </span></a>
									 <br>
									<ul>
									<li><a class="tooltips" ><span > <a type="button"  data-toggle="modal" data-target="#myModal"  style="background-color:rgba(255,255,255,0.1);text-decoration:none; cursor:pointer;"></span><i class="lnr lnr-user" style="border:8px solid transparent;"></i></a></li>
										<li><a class="tooltips" href="setting.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Log Out</span><i class="lnr lnr-power-switch"></i></a></li>
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
										
										 

									
									 <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> <span>Help</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="inbox.html"><i class="glyphicon glyphicon-earphone"></i> Call Us</a></li>
										
									
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