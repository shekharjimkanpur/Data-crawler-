<html>
<head>
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include('filelinks.php'); ?>
 <style rel='stylesheet'>
 body{background-color:Grey;}
 #login:hover{
	 cursor:pointer;
	 background-color:#17A2B8;
 }
 #reg:hover{
	 cursor:pointer;
	 background-color:#17A2B8;
 }
 #reg_div{
	 display:none;
 }
 body{
  background-color:black;
 }
 </style>
 <script type='text/javascript'>
 $(document).ready(function() {
    $('#login').click(function(e) {  
      document.getElementById("reg_div").style.display="none";
	  document.getElementById("lg_div").style.display="block";
    });
	
    $('#reg').click(function(e) {  
     document.getElementById("lg_div").style.display="none";
    document.getElementById("reg_div").style.display="block";
});
});
 </script>
<?php include('filelinks.php'); ?>
<style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 2px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-form li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }

</style>

</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-left">
      <li class="active"><a href="home.php">Home</a></li>
     </ul>
     <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <div class="form-group">
        <input type="email" class="form-control" style="height: 19px;font-size: 11px;" placeholder="Username">
        </div>
        <div class="form-group">
        <input type="password" class="form-control" style="height: 19px;font-size:11px;" placeholder="Password">
        </div>
      </div>
      <button type="submit" style="height:19px;width:50px;font-size:11px;border-radius: 4px;padding: 0px; " class="btn btn-default">Login</button>
      <br>
      <a  href="#" style="font-size: 8px;color: white;">Forget Password?</a>
     </form>
    </div>
   </div>
</nav>
<div></div>
 <div class="container-fluid" style='margin-top:-600px;' >
 <div class="row justify-content-center" >
 <div class='col-md-2' style="border-right:2px Grey solid" id='login'><h3 align="center">Login</h3></div>
 <div class='col-md-2' style="border-left:2px Grey solid" id='reg'><h3 align="center">Register</h3></div>
 </div>
 <br/><br/>
  <div id='reg_div'>
 <form>
    <div class="form-group row justify-content-center">
	<div class="col-md-8">
      <label for="usr"><h3>Name:</h3></label>
      <input type="text" class="form-control input-lg" id="usr" Placeholder='Full name'>
    </div>
	</div>	
	 <div class="form-group row justify-content-center">
	<div class="col-md-8">
      <label for="email"><h3>Email:</h3></label>
      <input type="email" class="form-control input-lg" id="email" Placeholder='email'>
    </div>
	</div>
   <div class="form-group row justify-content-center">
	<div class="col-md-8">
      <label for="pwd2"><h3>Password:</h3></label>  
      <input type="password" class="form-control input-lg" id="pwd2" Placeholder='password'>
    </div></div><br/>
	<div class="form-group row justify-content-center">
	<div class="col-md-2">    
      <input type="submit" class="btn btn-info" value="Submit Button">
    </div>
 </div>
 </form>
 </div>
 </div>
 </body>
 </html>