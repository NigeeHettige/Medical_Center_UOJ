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
        
        <form action="">
            <h4 style="font-weight:400;">New Password</h4>
            <!-- reg number -->
            <div class="input-icon">
                <!-- <label for="otp">OTP </label> -->
                <input type="password" name="" id="regno" placeholder="New Password" required>
            </div>

            <h4 style="font-weight:400;">Confirm Password</h4>
            <!-- reg number -->
            <div class="input-icon">
                <!-- <label for="otp">OTP </label> -->
                <input type="password" name="" id="regno" placeholder="Confirm Password" required>
            </div>

           
            

            <button type="submit">Submit</button>
            <br><br>
            <button type="submit" value="cancel" style=" background-color:#bfc0c0;" class="can">Cancel</button>
            
        </form>

        
        
        
    </div>
</body>
</html>