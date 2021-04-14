<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin login</title>
  
  <!-- <script type="text/javascript" src="index.js"></script> -->
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="assets/css/style.css">
      <style type="text/css">
        .error
        {
          background: #435299;
          color: red;
          padding: 10px;
          width: 95%;
          border-radius: 5px;
          margin: 20px auto;
      
        }
      </style>
  
</head>
<body>
  <!-- login form -->
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Admin/Sign In</label>
   
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="post" onsubmit="return validate()">
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="uname" type="text" class="input" autocomplete="off">
          <label id="error-username"></label>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" autocomplete="off">
        </div>
        <label id="error-password"></label>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <a  href="">
          <input type="submit" class="button" value="Sign In" name="">
        </a>
        </div>
        <div class="hr"></div>  
        
      </form>
     
    </div>
  </div>
</div>
  
  
</body>
</html>