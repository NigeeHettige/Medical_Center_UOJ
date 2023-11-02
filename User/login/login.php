<?php

include('..\..\connection.php');

if (isset($_POST['user_Login'])) {

    $reg_num = $_POST['reg_num'];
    $password = $_POST['password'];

    $query = "SELECT name_with_initials,password FROM user_details WHERE reg_number='$reg_num'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if(isset($row)){
            $verified_password = password_verify($password, $row['password']);

            if ($verified_password) {
                session_start();
                $_SESSION['reg_num'] = $reg_num;
                $_SESSION['username'] = $row['name_with_initials'];
                header("location: ../index.php");
            }
        }
        
    } else {
        echo "<script>alert('Invalid Username or Password!')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="login-container">
        <h2>User Login</h2>
        <form action="" method="POST">
            <!-- reg number -->
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input type="text" name="reg_num" id="regno" placeholder="Registration Number" required>
            </div>

            <!-- password -->
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" id="pwd" placeholder="Password" required>
            </div>

            <button type="submit" name="user_Login">Login</button>
            <!-- <p><a href ="#"> Forgotten password?</a></p> -->
        </form>

        <p><a href="forgot_pwd.php"> Forgotten password?</a> Don't have an account?<a href="../signup/signup.php"> Sign
                Up</a></p>


    </div>
</body>

</html>