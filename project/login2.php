<?php

session_start();

?>
<html>
    <head>
    
       <link rel="stylesheet" href="style.css">
       
    </head>
    
    <body>
        <div class ="hello">
            <div class="formbox">
                <div class="Button-box">
                    <div id="btn"></div>
                  <button type="buttton"  class="toggle-btn" onclick="login()">Log In</button>
                  <button type="buttton"  class="toggle-btn" onclick="signup()">Sign-Up</button>
                  </div>
                  
                  <form  action="connect.php" method="post" id ="login" class ="input-form" >
                  
                    <input type="text" class="input-field" placeholder="Username/Email-Id"  required name="usernames">
                    <input type="password" class="input-field" placeholder="password" required name="passwords">
                    <br><br>
                    <input type= "checkbox" class ="check-box"><span>Remember Me</span>
                    <button type="submit" class="submit-btn" name="login">Log-In</button> 
                </form>
                <form method="POST" action="sign-up.php" id="signup" class ="input-form">
                    <input type="text" class="input-field" placeholder="  Username " required name="su" id="user_names">
                    <input type="text" class="input-field" placeholder="  Email-Id " required name="se" id="emaill">
                    <input type="password" class="input-field" placeholder="  password" required name="sp" id="passwordss">
                    <input type="password" class="input-field" placeholder=" confirm password"required name="confirm_password">
                    <br><br>
                    <input type= "checkbox" class ="check-box" required ><span> I agree to the <a style="color:#fff;" href="termsandcondition.html">Terms and conditions</a> </span>
                    <button type ="submit" class="submit-btn" name="register" id ="submit-btn" >Sign Up</button> 
                </form>
                

            </div>
        
      <script>
            var check=function() {
  if (document.getElementById('passwordss').value == document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color='green';
    
    document.getElementById('message').innerHTML='matching';
  } else {
    document.getElementById('message').style.color='red';
    document.getElementById('message').innerHTML='not matching';
  }
}
            var a=document.getElementById("login");
            var b=document.getElementById("signup");
            var c=document.getElementById("btn");
            

            function signup(){
                a.style.left="-400px";
                b.style.left="50px";
                c.style.left="110px";
            }
            function login(){
                a.style.left="50px";
                b.style.left="450px";
                c.style.left="0px";
            }

            </script>
        
        
    </body>
</html> 
