<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'header.html'?>
</head>
<body>
  <div class=container>
    <div class="row">
    <div class="col-5 login-img">
      <img src="img/background.jpg" width="100%">
    </div>
    <div class="col-7 form-container">
      <form action="login_query.php" method="POST">	
      <h4 class="text-success">Login here...</h4>
      <!-- <hr style="border-top:1px groovy #000;"> -->
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="account" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" />
      </div>
      <br />
      <div class="form-group">
        <button class="btn btn-primary form-control" name="login">Login</button>
      </div>
      </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
