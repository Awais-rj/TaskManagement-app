<?php
session_start();
require_once "../conn.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    $username=$_POST['username'];
    $password =$_POST['password'];

    $sql ="SELECT * FROM users WHERE username='$username'";
    $result=$conn->query($sql);
    if($result->num_rows==1){
        $row=$result->fetch_assoc();
        // if($row!=""){
        //     echo "Data Found";
        // }
        if($password==$row['password']){
            $_SESSION['user_id']=$row['user_id'];
            header("Location:../dashboard.php");
            exit();
            // echo "Login Successful";
        }else{
            // echo "Entered Password: " . $password . "<br>";
            // echo "Password in Database: " . $row['password'] . "<br>";
            echo "Incorrect Password";
        }
    }else{
        echo "user not found";
    }
}
?>
