<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $checkEmail="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Энэ имэйл бүртгэлтэй байна.";  
    }
    else{
        $insertQuery="INSERT INTO users(firstname,email,password)
                        VALUES ('$firstName', '$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: home.html");
            }
            else{
                echo"ERROR:" .$conn->error;
            }
    }
}

?>