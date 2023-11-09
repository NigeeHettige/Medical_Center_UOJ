<?php 

    include('..\..\connection.php'); 
    session_start();
    function setValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }

    if(isset($_POST['submit'])){
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        if($password === $confirmPassword){
            $reg_number = $_SESSION['reg_number'];
            echo $reg_number;
            $passwordHash = password_hash($password,PASSWORD_DEFAULT);
            $query = "UPDATE user_details SET password='$passwordHash' WHERE reg_number='$reg_number' ";
            $result = mysqli_query($connection,$query);
            if($result){
                echo "<script>alert('Password Changed!');</script>";
                header('location: login.php');
            }

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="./login.css?=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="login-container">
        <h2>Find Your Account</h2>
        
        <form action="" method="POST">
            <h4 style="font-weight:400;">New Password</h4>
            <!-- reg number -->
            <div class="input-icon">
                <!-- <label for="otp">OTP </label> -->
                <input type="password" name="password" id="regno" placeholder="New Password"  value="<?php setValue('password')?>" required>
            </div>

            <h4 style="font-weight:400;">Confirm Password</h4>
            <!-- reg number -->
            <div class="input-icon">
                <!-- <label for="otp">OTP </label> -->
                <input type="password" name="confirm_password" id="regno" value="<?php setValue('confirm_password')?>" placeholder="Confirm Password" required>
            </div>            

            <button type="submit" name="submit">Submit</button>
            <br><br>
            <a href="login.php" style=" background-color:#bfc0c0; width: 100%; padding: 10px 180px; border-radius: 5px; color: white;" class="can">Cancel</a>
            
        </form>

        
        
        
    </div>
</body>
</html>