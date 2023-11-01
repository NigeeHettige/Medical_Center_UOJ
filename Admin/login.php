<?php

include('..\connection.php');
session_start();


function setValue($name){
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['userName'];
    $password = $_POST['password'];

    $query = "SELECT admin_name,admin_password from admin";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $verified_password = password_verify($password,$row['admin_password']);

    if($verified_password){
        if($row['admin_name'] == 'admin'){
            $_SESSION['admin_name'] = "admin";
            header("location: index.php");
        } else {
            echo "<script>alert('Username or Password is wrong!')</script>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel ="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <!-- reg number -->
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input type="text" name="userName" id="regno" placeholder="User Name" required value="<?php setValue('userName'); ?>">
            </div>

            <!-- password -->
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" id="pwd" placeholder="Password" required value="<?php setValue('password'); ?>">
            </div>

            <button type="submit" name="submit">Login</button>
        </form>
       
    </div>
</body>
</html>