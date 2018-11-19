<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
		.jumbotron {
      background-image: url(img/beautiful-bloom.jpg);
background-size: cover;
 -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
}
</style>

</head>
<body>
<form action="" method="post">
	<div class="jumbotron jumbotron-fluid  animated fadeIn ">
 <?php 
	include "sec.php";
	?> <br/><br/>
  <h1 class="mx-auto w-50" style='color:white;text-align:center;'>Start Scrapping now </h1><br/><br/>
  <div class="mx-auto w-50 input-group mb-3">
  <input type="text" class="gettext form-control" name='search' placeholder="Search here" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Search</button>
  </div>
</div>
</div>
</form>

<div class='contaioner-fluid tab' style='border: 1px solid grey;'><ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">links</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-contact" aria-selected="false">html</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
</div>
  <script type="text/javascript">
  $(document).ready(
        $(".btn").click(function() {
            $(".contaioner-fluid").toggle();
        });
    );
</script>

<script type="text/javascript">
  $('.btn').click(function() {
 $.ajax({
  type: "POST",
  url: "nscrap.php",
  data: { name: $('.gettext').val() }
}).done(function( result ) {
  $('#pills-tabContent').html(result);
});    
    });</script></div></body>
  </html>