<?php
//session_start();
$server="localhost";
$username="root";
$password="";
$db="project";
//connecting the database
$con = mysqli_connect("localhost","root","","project");
if(!$con)
{
    echo"failed";
}
else{
    echo"success";  
}


//Sign-up

/*$stmt = $con->prepare("select  * from registration where userid = ?");
$stmt->bind_param("?",$username);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows ){
    $data = $stmt_result->fetch_assoc();
    if($data['password']==$password){
        echo'<script> alert("Login successful")</script>';
    }
    else{
            echo'<script> alert("error")</script>';
        }
    
}
else{
    echo"<h2>Invalid username</h2>";
}
/*if (isset($_POST['reg_user'])) {   
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    //$email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);*/

