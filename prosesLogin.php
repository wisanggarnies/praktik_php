<?php
    include "myconnection.php";

    $username=$_POST["username"];
    $pasword=md5($_POST["password"]);

    $query = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);

    if($check>0){
        header("Location:homeCRUD.php");
    }
    else{
        header("Location:loginForm.php?error=gagal");
    }
?>