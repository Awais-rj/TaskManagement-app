<?php
// session_start();
// if(!isset($_SESSION['user_id'])){
//     header("Location:/TaskManagement-app/login.html");
//     exit();
// }
// if(isset($_SESSION['user_id'])){
//     header("Location:". $_SERVER['PHP_SELF']);
//     exit();
// }else{
//     header("Location:/login.html");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Task Management web App</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Jquery & Ajax-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS File -->
</head>
<style>
    body {
            margin: 0;
            padding: 0;
            background: url('assets/182428240217.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1,p{
            color: white;

        }
        .btns{
            float: right;
            margin-bottom: 500px; 
        }
        .content{
            margin-top: 200px;
            margin-left: 100px;
        }
</style>
<body>

<div class="container mt-5">
      <!-- Register and Login Buttons -->
      <div class="btns">
                <a href="register.html" id="register-btn" class="btn btn-primary btn-lg mr-2">Register</a>
                <a href="login.html" id="login-btn" class="btn btn-success btn-lg">Login</a>
        </div>
        <div class="content">
            <h1 class="text-center mb-4">Welcome to Task Management App</h1>
            <p class="text-center">Here you can manage your tasks just register and login for use.</p>
            <br><br>
        </div>
</div>

<script>
    // $(document).ready(function () {
    //     $('#login-btn').click(function (e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             url: 'actions/login.php',
    //             success: function (response) {
    //               if(response==='success'){
    //                 window.location.href='login.php';
    //               }
    //             }
    //         });
    //     });
    // });
</script>
</body>
</html>
