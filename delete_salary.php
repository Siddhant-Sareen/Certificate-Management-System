     
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
<title>Wt It Solution Pvt Ltd: Agreement Delete</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href='wt.png'>
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
  label{
	  color:#fff;
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
  
.form-control{
height:27px;
padding:1px;
font-size:13px;
}  
 .a{
    font-size: 18px;
  }
  .button:active {
  background-color:#88F9F9;
  box-shadow: 0px 1px 10px #000;
  transform: translateY(4px);
}
  
  </style>
  <script src='js/delete_salary.js'></script>

  
 
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
	
	

<!--//skycons-icons-->
</head> 
<body onload="$('#loading').fadeOut(); dater(); auto();">
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
<img src="wt.png" style=" height: 100px; margin-top:7%; width: 100px" class="img-fluid"  ondragstart="return false" >
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
												<div class="candile"  id="candile"> 


<div id="loading" style="color:white;position:fixed;display:block;width:100%;height:100%;background:rgba(0,0,0,0.6);z-index:1366;">
<br><br><br>


<center>
<img src="images/loading.gif" style="height:100px; width:100px;">
<br>
<h5>Loading...</h5>
</center>
</div>
													

 <div id="result"></div>
  <center>
<form action="/action_page.php" style="position:center; "   id="form-element" autocomplete="off" >
<div style= "background:rgba(0,0,0,0.3)"   class="container " >
    <h3 style="color:#ffffff" align="left">Delete Record</h3>
     <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
     <div>
      <div  class="card" id="bc" >
     <div  class="row" style="padding-top: 3%; margin:2%;">
      <div>
        <label for="search_by" style="color: #ffffff;">
          Search By :
        </label>
      </div>
       <div class="col-md-3  col-xs-12" align="left">
          <select onchange="is_selected();" class="form-control form-control-lg input " id="search" name="search" style="height: 26px;margin-bottom: 10px; font-size: 15px;" >
         <option selected="selected" disabled="disabled" hidden value="0" >Search By</option>
         <option value="1" >Email</option>
         <option value="2">Phone Number</option>
         <option value="3">Registration ID</option>
      </select>
       </div> 
        <div class="col-md-2 col-xs-4" align="left"  style="padding-bottom: 5%;">
       <button type="button" class="btn btn-default input"  style="padding-right:18px; margin-top:0px;padding-left:18px; background-color:#88F9F9; " id="button1" onclick="valid_delete();">
        
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
       <label for="name"> Full Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp</label>
       <label id="name" style="text-transform:uppercase; color: #FFFE65" ></label>
      
     </div>
<br>

    
  
  
      <div class="col-sm-6">

         <label for="email"  > Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp&nbsp&nbsp&nbsp</label>
          <label for="email" id="email" style="color: #FFFE65; font-size: 14px;"> </label>
       
      </div>
	  </div></div>
	  <div class="form-group "> 
    <div class="row  txt">
      <div class="col-sm-6">

         <label for="phone"  >Phone Number&nbsp:&nbsp&nbsp&nbsp&nbsp</label>
      <label id="phone" style="color: #FFFE65"></label>
      </div>
    



   
    <div class="col-md-6 col-xs-10 bg txt">
      <label for="registration_id"  style="color: #ffffff">Job Title&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp</label>
     <label id="job-title"  style="text-transform:uppercase; color: #FFFE65; "></label>
    </div></div>
</div>
 <div class="form-group "> 
    <div class="row  txt">
      <div class="col-sm-6">

         <label for="phone"  >Gross Salary&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp</label>
      <label id="gross_salary" style="color: #FFFE65"></label>
      </div>
    



   
    <div class="col-md-6 col-xs-10 bg txt">
      <label for="registration_id"  style="color: #ffffff">Registration ID&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp</label>
     <label id="registration_id"  style="text-transform:uppercase; color: #FFFE65; "></label>
    </div></div>
</div>


 <div class="form-group">      
<div class="row txt" >
      <span class="col-6">
      <button type="button" class="btn btn-default input button" style="background-color:#88F9F9; box-shadow:1px 2px 12px black;" onclick="a= confirm('Are you sure you want to reset ? After clicking \'OK\', all your information will be cleared !!'); if(a){reset();} else{};"> &nbsp Cancel &nbsp </button>
    </span>  
    <span class="col-6 ">
      <button type="button" class="btn btn-default input button" style="background-color:#88F9F9;box-shadow:1px 2px 12px black;" onclick="deleting();"> &nbsp Delete &nbsp </button>
    </span>
   
    <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
    
</div>
</div>

</form>
</center>
<footer style="margin-left:-20%; width:160%; ">
  <center><b><b><p style="color:#ffffff; font-size: 15px; margin-bottom:0px">WT IT SOLUTIONS (P) Ltd</b></b></p>
<i><p style="color:#FDA400; font-size: 12px;margin-bottom:0px">Ensure success on web</i></p>
<p style="color: #ffffff; font-size: 12px">(2017 All Rights Reserved)</p></center>
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
						<div class="down" style="text-transform:capitalize;">	
									<a href="admin1.php"><img height='90px;' width='90px;' src="
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
									<li><a class="tooltips" ><span > <a type="button"  data-toggle="modal" data-target="#myModal"  style="background-color:rgba(255,255,255,0.1);text-decoration:none;cursor:pointer;"></span><i class="lnr lnr-user" style="border-style:none;border:0;"></i></a></li>
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
												<li id="menu-academico-avaliacoes" ><a href="delete_relieving.php">Relieving Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="delete_salary.php">Salary Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="delete_experience.php">Experience Certificate</a></li>
												<li id="menu-academico-boletim" ><a href="delete_appointing1.php">Appointment Certificate</a></li>
								</ul> </li>
								
							<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Intern Certificate</span> <span class="fa fa-angle-right" style="float: right; "></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="delete_agreement.php">Internship agreement</a></li>
												<li id="menu-academico-boletim" ><a href="delete_internship.php">Internship Certificate</a></li>
											
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