<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style>
		
	</style>

</head>
<body>
	<div class="jumbotron jumbotron-fluid">
	<?php 
  
	include "sec.php";
	?>
  <div class="font-weight-bold container"><br/>
    <h1 class="display-4">Search for best prices</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.
    <a class="btn btn-primary btc" data-toggle="collapse" href="#multiCollapse" role="button" aria-expanded="false" aria-controls="multiCollapse">Toggle</a></p>
    <div class="row collapse multi-collapse btc"  id="multiCollapse" aria-expanded="false">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
    	<a class="list-group-item list-group-item-action active" id="list-opt-list" data-toggle="list" href="#list-opt" role="tab" aria-controls="home">Select what you want</a>
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Phones</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Laptops</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Hotels</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">services</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
    	  <div class="tab-pane fade show active" id="list-opt" role="tabpanel" aria-labelledby="list-opt-list"></div>
      <div class="tab-pane fade show" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><nav class="navbar navbar-light bg-light">
  <form class="form-inline mx-auto">
  <button class="btn btn-outline-success" id='mi' value='miphones' type="button">mi phones</button>
    <button class="btn btn-outline-success " value='Refrigerator' type="button">Refrigerator</button>
    <button class="btn btn-outline-success" value='Apple iphones' type="button">Apple iphones</button>
    <button class="btn btn-outline-success " value='One plus phones' type="button">One plus phones</button>
  </form>
</nav></div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><nav class="navbar navbar-dark bg-dark">
  <form class="form-inline mx-auto">
    <button class="btn btn-outline-success" value='lenovo laptops' type="button">lenovo laptops</button>
    <button class="btn btn-outline-success" value='Samsung Laptops' type="button">Samsung Laptops</button>
    <button class="btn btn-outline-success" value='Dell Laptops' type="button">Dell laptops</button>
    <button class="btn btn-outline-success" value='Acer laptops' type="button">Acer laptops</button>
  </form>
</nav></div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><nav class="navbar navbar-light bg-light">
  <form class="form-inline mx-auto">
    <button class="btn btn-outline-success" value='Kanpur' type="button">Kanpur</button>
    <button class="btn btn-outline-success" value='Mumbai' type="button">Mumbai</button>
    <button class="btn btn-outline-success" value='Delhi' type="button">Delhi</button>
    <button class="btn btn-outline-success" value="Banglore" type="button">Banglore</button>
  </form>
</nav></div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><nav class="navbar navbar-light bg-light">
  <form class="form-inline mx-auto">
    <button class="btn btn-outline-success" type="button">Plumbing</button>
    <button class="btn btn-outline-success" type="button">Electrician</button>
    <button class="btn btn-outline-success" type="button">Government help</button>
    <button class="btn btn-outline-success" type="button">Other</button>
  </form>
</nav></div>
    </div>
  </div>
</div>
<div class="container" id='items'>
</div>
  </div>
</div>

<script type="text/javascript">
//$("button").click(function() {
   // or alert($(this).attr('id'));  window.location.href="http://localhost/New%20folder/scrappe_result.php?Search="+this.value;
  //});
  $('button').click(function() { 
 $.ajax({
  type: "POST",
  url: "scrappejs.php",
  data: { name: this.value }
}).done(function( result ) {
  $('#items').html(result);
});    
    });</script>
    <a class="btn btn-primary btc1" data-toggle="collapse" href="#multiCollapse" role="button" aria-expanded="false" aria-controls="multiCollapse">Toggle</a>
    <button type="button" class="btn btn-success">Show</button>
  <button type="button" class="btn btn-warning">Hide</button> 
    
  <div class="collapse btc">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>

<script>
$(document).ready(function(){
    $(".btn-primary").click(function(){
        $(".btc1").collapse('toggle');
    });
    $(".btn-success").click(function(){
        $(".btc").collapse('show');
    });
    $(".btn-warning").click(function(){
        $(".btc").collapse('hide');
    });
});
</script>
	</body></html>