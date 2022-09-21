<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script  src="script.js"></script>
    <link rel="stylesheet" href="script2.css">
    
</head>
    
<body>

<div id="back">
  <div class="backRight"></div>
  <div class="backLeft"></div>
</div>

<div id="slideBox">
  <div class="topLayer">
    <div class="left">
      <div class="content">
        <h2>Sign Up</h2>
        <form action = "connect.php" method="post" onsubmit="return false;">
          <div class="form-group">
            <input type="text" placeholder="Username" name = 'UserName'/>
            <input type="password" placeholder="Password" required name = 'passwordss'/>
            <input type="password" placeholder="Confirm Password" required name = 'confirm_password'/>
          </div>
          <div class="form-group"></div>
          
        </form>
        <button id="goLeft" class="off">Login</button>
        <button>Sign up</button>
      </div>
    </div>
    <div class="right">
      <div class="content">
        <h2>Login</h2>
        <form action = "connect.php" method="post" onsubmit="return false;">
          <div class="form-group">
            <input  type="text" placeholder="Username/Email-Id" />
            <input  type="password" placeholder="Password" />
            
          </div>
          <button id="goRight" class="off">Sign Up</button>
          <button id="login" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
   <script>
   var check = function() {
  if (document.getElementById('passwordss').value == document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  }
   else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
  </scrpit> 
    
</body>

</html>

