<?php 

    session_start();

    if(!isset($_SESSION['randomKey'])){
        header('location: login.php');
    }

    if(isset($_POST['otp_submit'])){

        $otp = $_POST['otp_code'];
        if($otp == $_SESSION['randomKey']){
            header('location: verify.php');
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="../User/login/login.css?=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="login-container">
        <h2>Find Your Account</h2>
        <h4 style="font-weight:400;">Please enter the OTP</h4>
        <form action="" method="POST">
            <!-- reg number -->
            <div class="input-icon">
                <!-- <label for="otp">OTP </label> -->
                <input type="text" name="otp_code" id="regno" placeholder="Verification Number" required>
            </div>

            <button type="submit" name="otp_submit">Submit</button>
            
        </form>

        
        
        
    </div>
</body>
</html>