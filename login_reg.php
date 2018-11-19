<!DOCTYPE html>
<html lang='en'>
<head>
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include('file_links.php'); ?>
 <link href='log.css' rel='stylesheet'>
 <script src="log.js"></script>
 <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/uncover.css" />
<script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/uncover.js"></script>
    <script src="js/demo1.js"></script>
   
 </head>
 <body>
  <div class='container-fluid' >
           <?php 
include('sec.php');?>
 <div class="row justify-content-center animated fadeIn" > 
 <div class='col-md-2'>
  <h2 align="center">Register</h2></div>
 </div>
 <br/><br/>
 <form>
    <div class="form-group row justify-content-center">
  <div class="col-md-4">
      <label for="fname"><h3>First Name:</h3></label>
      <input type="text" class="form-control input-lg" id="fname" Placeholder='First name'>
    </div><div class="col-md-4">
      <label for="lname"><h3>Last Name:</h3></label>
      <input type="text" class="form-control input-lg" id="lname" Placeholder='Last name'>
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
 </body>
 </html>