<html><?php
include 'file_links.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
    <?php
    echo 'got $name';
function abc($name){
echo 'got '.$name;
}?>
<body>
  <button class='button'>click</button>
  <script type="text/javascript">
    document.write('hekko');
  $('.button').click(function() {
 $.ajax({
  <?php echo 'in ajax' ?>
  type: "POST",
  url: "some.php",
  data: { name: "John" }
}).done(function( msg ) {
  document.write( "Data Saved: " + msg );
});    
<? echo 'out ajax';?>
    });</script>
  </body>
</html>