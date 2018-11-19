<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Signin</title>

  </head>

  <body cz-shortcut-listen="true">
<?php 
    include "sec.php";
    ?>
    <div class="container">
<div class='row'><div class='col-sm-2'></div>
<div class='col-sm-8'>
      <form class="form-signin" action="sendmail.php"><br/><br/>
        <h2 class="form-signin-heading">Please sign in</h2>
        <br/>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Email address" required="" autofocus=""><br/>
        <label for="inputPassword" name='pass' class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""><br/>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      </form>
</div> 
    </div></div><div class='col-sm-2'></div> 

</body></html>