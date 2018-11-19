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
  .container{
    padding:80px 120px;
  } 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      height: 60px;
      font-size: 11px !important;
      letter-spacing: 2px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
      cursor: pointer;
      text-decoration: none;
  }
  .navbar-nav li.active a{
    color:#fff;
    background-color: #29292c !important;
  }
  .navbar-nav li a:hover{
      color: #fff !important;
      background-color: #29292c !important;
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
      background-color: red !important;
  }
  
  @media screen and (min-width:768px){
    li.dropdown:hover > .dropdown-menu {
    display: block;
  }
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  
    
  .logo-small {
      color: #2d2d30;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(50%);
      filter: grayscale(40%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .tabtable {
    margin: 10px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}

.nav-tabs {
    margin:0px;

}
.nav-tabs li a{
  color:white;
}

.tab-content {
    height:325px; 
    background-color: white;
    border-left: 1px solid #ccc ; 
    border-right: 1px solid #ccc;
}
.bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
      opacity: 0.7;
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
  .form-control{
    border-radius: 0px;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  #email, #pwd{
    border-radius: 5px;
    height:30px;
    font-size:12px;
  }
</style>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "default") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
});
</script>
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
             <a href="#" style="text-decoration:none;font-size: 9px;background-color: transparent;">&nbsp;&nbsp;Forgot Password?</a>
            </form>
          </li>
          <li style="padding: 12px 12px;"><input type="submit" id="reg" class="btn btn-default" style="height:30px;width:130px;font-size:11px;padding: 0px;border-radius:4px;" name="register" value="Create Account" onclick="location.href='register.php';"></li>
        </ul>
      </li>
    </ul>
	</div>
   </div>
</nav>
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

     Wrapper for slides
  <!--  <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images\10.jpg" alt="New York" width="1200" height="600">
        <div class="carousel-caption">
          <h3>Data Scrape</h3>
          <p>Data scraping refers to retrieving information from any source.</p>
        </div>      
      </div> -->

      <div class="item">
        <img src="images\scrapmail.jpeg" alt="Mail Scraper" width="1200" height="600">
        <div class="carousel-caption">
          <h3>Mail Scraper</h3>
          <p>Mail scraper allows you to crawl niche related websites it generates through Bing based on your search terms for email addresses.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="images\8.jpg" alt="Web Spider" width="1200" height="600">
        <div class="carousel-caption">
          <h3>Web Spider</h3>
          <p>Web spider is an Internet bot that systematically browses the World Wide Web, typically for the purpose of Web indexing.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container text-center" style="padding:80px 120px;" >
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-th-large logo-small"></span>
      <h4>Compare</h4>
      <p>One place for different price.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-search logo-small"></span>
      <h4>Search</h4>
      <p>Data search from different sites.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-credit-card logo-small"></span>
      <h4>No Card</h4>
      <p>NO extra commission to pay.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4>Mobile</h4>
      <p>Interface available for mobile too.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Certified</h4>
      <p>Certified products.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Setting</h4>
      <p>Settings are saved for all things.</p>
    </div>
  </div>
</div>
<!--Container for URLs Post-->
<div id="crawl" class="bg-1">
 <div class="container text-center">
  <form>
    <h2 style="color:white;font-family: Montserrat, sans-serif;">Enter the URL:</h2>
  <div class="col-sm-6 col-sm-offset-3 input-group center">
      <input type="text" class="form-control text-center" placeholder="Enter the URL...." name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit" style="height:34px;"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
  <div class="tabtable">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">HTML</a></li>
    <li><a data-toggle="tab" href="#menu2">Images</a></li>
    
  </ul>

  <div class="tab-content" style="padding-top:10px ;">
    <div id="home" class="tab-pane fade in active" >
      <iframe src="http://localhost/New%20folder/first.php"></iframe>
    </div>
    <div id="menu1" class="tab-pane fade in">
      <?php
  include @'C:xampp\htdocs\New folder\simple_html_dom.php';
$html = file_get_contents(@"http://amazon.in");
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXpath($dom);
  $result1=$xpath->query('(//body//a)');
  $result2=$xpath->query('(//body//a)/@href');
?><table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Text</th>
      <th scope="col">Url</th>
    </tr>
  </thead>
  <tbody>
  <?php  for($i=0;$i<=40;$i++)   
     {
         $node1 = $result1->item($i);
        $node2= $result2->item($i);
     
 echo '<tr>
  <th scope="row">'.$i.'</th>
      <td>'.$node1->nodeValue.'</td>
      <td>'.$node2->nodeValue.'</td>
    </tr>';
    }
    ?>
  </tbody>
</table>;
    </div>
    <div id="menu2" class="tab-pane fade in">
      <?php 

 $result3 = $dom->saveHTML($xpath->item(0));
  echo $result3->nodeValue;?>

    </div>
    <div id="menu3" class="tab-pane fade in">
      <h3>Css</h3>
      <p>css used on html</p>
    </div>
  </div>
</div>
</div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container" style="font-size: 20px;">
  <h3 class="text-center" style="padding-bottom: 45px;"><b>Contact</b></h3>

  <div class="row">
    <div class="col-md-5 slideanim">
      <p>Query? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>KANPUR, U.P.</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 7275XXXXXX</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: rishabh.jimkanpur@gmail.com</p>
    </div>
    <div class="col-md-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" style="resize: none;"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up" style="font-size: 20px;"></span>
  </a><br><br>
  <p>creater <a href="www.facebook.com" data-toggle="tooltip" title="Data Scraper">link</a></p> 
</footer>

</body>
</html>