<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="../CSS/login.css?=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="login-container">
        <h2>Find Your Account</h2>
        <h4 style="font-weight:400;">Please enter your email to search for your account.</h4>
        <form action="..\phpmailer\myMailer.php" method="POST">
            <!-- email -->
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input type="text" name="email" id="regno" placeholder="Email" required>
            </div>

            <button type="submit" name="doctor_pas_changed">Send</button>
            <br><br>
            <a href="login.php" style=" background-color:#bfc0c0; width: 100%; padding: 10px 180px; border-radius: 5px; color: white;" class="can">Back</a>
            
        </form>

        
        
        
    </div>
</body>
</html>