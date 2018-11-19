<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('filelinks.php'); ?>
<style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #777;
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #28A745;
      border: 0;
      min-height: 60px;
      font-size: 12px !important;
      font-weight: bold;
      letter-spacing: 2px;
      opacity: 1;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
      cursor: pointer;
      text-decoration: none;
      padding: 20px 30px;
  }
  .navbar-nav li a:hover{
      color: #fff !important;
      background-color: #563D7C !important;
      opacity: 1;
  } 
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
 
  .dropdown-menu li a {
      color: #000 !important;
      background-color: white;
  }
  .dropdown-menu li.active a{
    background-color:white;

  }
  .dropdown-menu li a:hover {
      background-color: #563D7C !important;
  }
  
  @media screen and (min-width:768px){
    li.dropdown:hover > .dropdown-menu {
    display: block;
  }
  }
   .btn {
      padding: 10px 20px;
      background-color: #563D7C;
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
      <li><a href="#home" class="active">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-trigger="hover">Category
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Scrap Data</a></li>
          <li><a href="#">Product Compare</a></li>
        </ul>
      </li>
      <li><a href="#services">Services</a></li>
      <li><a href="#crawl">Data</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-trigger="hover"><span class="glyphicon glyphicon-log-in"></span>Login</a>
        <ul class="dropdown-menu">
          <li style="padding: 5px 10px;">
            <form action="">
             <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" placeholder="Password">
             </div>
             <div class="checkbox" style="display: inline;white-space: 1px;">
              <label style="font-size: 12px;font-family:calibri;letter-spacing:0px;"><input type="checkbox">Remember me</label>
              <input type="submit" class="btn btn-default" style="height:30px;width:40px;font-size:8px;padding: 0px;border-radius:4px;" name="login" value="Login"> 
             </div>
             <a href="#" style="text-decoration:none;font-size: 9px;background-color: transparent;padding:0px;">&nbsp;&nbsp;Forgot Password?</a>
            </form>
          </li>
          <li style="padding: 12px 12px;"><input type="submit" id="reg" class="btn btn-default" style="height:30px;width:130px;font-size:11px;padding: 0px;border-radius:4px;" name="register" value="Create Account" onclick="location.href='register.php';"></li>
        </ul>
      </li>
    </ul>
  </div>
   </div>
</nav>
</body>
</html>