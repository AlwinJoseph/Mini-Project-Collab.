
<?php

require('connect.php');
session_start();
echo "dt";
echo $_POST['register'];
if(isset($_POST['register'])){
    $username = $_POST['su'];
    $email = $_POST['se'];
    $password = $_POST['sp'];
    echo $username;
    //$q="INSERT INTO `registration`( `usernames`, `email`, `passwords`) VALUES ('$username','$email','$password')";
    $sql = "INSERT INTO  registration(usernames,email,passwords) VALUES ('$username','$email','$password');";
    echo $sql;
    //$p = $query = "INSERT INTO customer ('usernames','email','passwords') VALUES('" . $username . "', '" . $email . "','" . $password . "')";
    $query =mysqli_query($con,$sql);
    if($query){
        echo"success 1";
    }
    else{
        echo"failure 1";
    }
}
    
    ?>