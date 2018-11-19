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