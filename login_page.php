<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'header.html'?>
</head>
<body>
  <div class=container>
    <div class="row justify-content-center align-items-center">
      <div class="col-6 form-container">
        <div class="logo">
          <a href="index.php">
            <img src="img/logo.png">
          </a>
        </div>
        <form action="login_query.php" method="POST">	
        <h1 class="login-title">會員登入</h1>
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
</body>
</html>
