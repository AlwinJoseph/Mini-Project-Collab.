<?php

session_start();

//setting the variables
$_SESSION['username']=$_POST['username'];
$_SESSION['userpassword']=$_POST['userpassword'];
$_SESSION['status']=$_POST['ustatus'];


//validating the session variables
if (isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        
        session_start();

        $uname = $_SESSION['username'];
        $upassword = $_SESSION['userpassword'];
        $ustatus = $_SESSION['status'];

        //conecting to the server
        $conni = mysqli_connect("localhost","root","","punchx");

        //validating it
        $upass = md5($upassword);

        $n = rand(9990000,999999999999999);
        $ck_has = md5($n);

        $sql = mysqli_query($conni,"select * from user where uid='$uname' AND password='$upass'");

        $row = mysqli_fetch_assoc($sql);

        if(!$row){
            echo "<script>alert('Please enter the correct username and password')</script>"; 
        }
        else{
                $sql = mysqli_multi_query($conni,"update user set hash='$ck_has',status='$ustatus' where uid='$uname'");
                setcookie("userid",$uname);
                setcookie("upasswd",$upass);
                setcookie("uhash",$ck_has);
                header("Location:user.php");
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">


<!--Head of the page-->
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Page icon-->
    <link rel="icon" type="image/x-icon" href="punchxlogo.png">
    
    <!--Including bootstrap to the page-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    
    <!--Connecting the css file-->
    <link href="punchx.css" rel="stylesheet">    

    <!--Google API fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@100&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@100&family=Great+Vibes&display=swap" rel="stylesheet"> 

    <!--Title of the page-->
    <title>PunchX</title>


</head>





<!--styling the api stuffs-->
<style>

   .head1{
        font-family : 'Alegreya Sans SC';
        font-size : 300%;
        background-color : #fbfbfb;
        color :black;
    }
    .head2{
        font-family : 'Great Vibes';
        background-color : #fbfbfb;
        color : black
    }
    .inp{
    border-left-width: 3px;
    border-bottom-color: black;
    border-top-style: hidden;
    border-right-style: hidden;
    border-left-style: hidden ;
    border-bottom-style: groove;
    outline:none;
    resize:none;
    }

</style>



<!--Body of the page-->
<body>
    
    <!--The login page's top logo-->
    <div class="container-fluid p-5">
        <h3 class="head1 shadow">PUNCH<span class="head2">X</span>
        </h3>
    </div>
    <br>
    <br>

    <!--The form part-->
    <div>
        <form action="" method="POST" class="frm">
            <fieldset>
                <legend>
                <b>Login as User</b>
                </legend>
            </fieldset>

            <br>
            <input class="inp" type="text" name="username" placeholder="Username" required>
            <br>

            <br>
            <input class="inp" type="password" name="userpassword" placeholder="Password" required>
            <br>
            <br>
            <!--set password visibility option-->


            <label>You are currently punching :</label>
            <br>
            <input type="radio" name="ustatus" value="in" required> In
            <br>
            <input type="radio" name="ustatus" value="out"> Out

            <br>
            <br>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>

    <br>
    <!--copyright footer-->
    <div>
        <a href="https://github.com/Mr1-D3CRYPT" target="_blank">
        <h5 style="margin:10%;margin-top:15%;font-family: Cardo;font-size: small;position: absolute;">?? 2022 PUNCHX</h5>
        </a>
    </div>


    
</body>
</html>