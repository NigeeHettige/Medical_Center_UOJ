<?php

include('..\..\connection.php');

function setValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

if (isset($_POST['first_next'])) {
    display2();
} else if (isset($_POST['second_next'])) {
    display3();
} else if (isset($_POST['third_next'])) {
    display4();
} else if (isset($_POST['final_submit'])) {

    if(isset($_POST['final_submit'])){
        $reg_no = $_POST['reg_no'];
        $full_name = $_POST['full_name'];
        $ini_name = $_POST['ini_name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile_number'];
        $email = $_POST['email'];
        $r_address = $_POST['r_address'];
        $p_address = $_POST['p_address'];
        $nic = $_POST['nic'];
        $martial_status = $_POST['martial_status'];
        $faculty = $_POST['faculty'];
        $department = $_POST['department'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $g_name = $_POST['g_name'];
        $rel = $_POST['rel'];
        $tel = $_POST['tel'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $confirm_password = $_POST['confirm_password'];

        $query = "INSERT INTO user_details (reg_number,full_name,name_with_initials,gender,dob,mobile_number,email,residential_address,permenent_address,nic,martial_status,faculty,department,height,weight,gardian_name,relation,contact_number,password) VALUES ('$reg_no','$full_name','$ini_name','$gender','$dob','$mobile','$email','$r_address','$p_address','$nic','$martial_status','$faculty','$department','$height','$weight','$g_name','$rel','$tel','$password')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<script>alert('Insertion Success'); window.location.href = '../../home.php';</script> ";
            // header('location: ../../home.php')
            
        } else {
            echo "<script>alert('Insertion unsuccessful')</script>";
        }

    }

} else {
    display1();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newStyle.css?=<?php echo time() ?>">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>

    <!-- <div class="wrapper"> -->
    <!-- <div class="header">
            <ul>
                <li class="active form_1_progessbar">
                    <div>
                        <p>1</p>
                    </div>
                </li>
                <li class="form_2_progessbar">
                    <div>
                        <p>2</p>
                    </div>
                </li>
                <li class="form_3_progessbar">
                    <div>
                        <p>3</p>
                    </div>
                </li>
                <li class="form_4_progessbar">
                    <div>
                        <p>4</p>
                    </div>
                </li>
            </ul>
        </div> -->


    <div class="form_wrap">
    
        <?php function display1()
        { ?>
            <div class="form_1 data_info">

                <h2>Signup Info</h2>

                <form action="" method="POST">
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="regno">Registration Number</label>
                            <input type="text" id="form1_input1" name="reg_no" value="<?php setValue('reg_no') ?>" required>
                        </div>
                        <div class="input_wrap">
                            <label for="name">Full Name</label>
                            <input type="text" id="form1_input2" name="full_name" value="<?php setValue('full_name') ?>"
                                required>
                        </div>
                        <div class="input_wrap">
                            <label for="name_i">Name with initials</label>
                            <input type="text" id="form1_input3" name="ini_name" value="<?php setValue('ini_name') ?>"
                                required>
                        </div>
                        <div class="input_wrap">
                            <label for="gender">Gender</label>
                            <input type="text" id="form1_input4" name="gender" value="<?php setValue('gender') ?>" required>
                        </div>
                        <div class="input_wrap">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="form1_input5" name="dob" value="<?php setValue('dob') ?>" required>
                        </div>
                        <div class="common_btns form_1_btns">
                            <button type="submit" class="btn_next" name="first_next">Next
                                <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        <?php } ?>

        <?php function display2()
        { ?>
            <div class="form_2 data_info">

                <h2>Personal Info</h2>

                <form action="" method="POST">
                    <div class="form_container">

                        <input type="hidden" name="reg_no" value="<?php echo setValue('reg_no') ?>">
                        <input type="hidden" name="full_name" value="<?php echo setValue('full_name') ?>">
                        <input type="hidden" name="ini_name" value="<?php echo setValue('ini_name') ?>">
                        <input type="hidden" name="gender" value="<?php echo setValue('gender') ?>">
                        <input type="hidden" name="dob" value="<?php echo setValue('dob') ?>">

                        <div class="input_wrap">
                            <label for="tel_number">Mobile Number</label>
                            <input type="tel" id="form2_input1" name="mobile_number" value="<?php setValue('mobile_number') ?>" required>
                        </div>
                        <div class="input_wrap">
                            <label for="email">Email</label>
                            <input type="email" id="form2_input2" name="email" value="<?php setValue('email') ?>" required>
                        </div>
                        <div class="input_wrap">
                            <label for="r_address">Residential Address</label>
                            <input type="text" id="form2_input3" name="r_address" value="<?php setValue('r_address') ?>"
                                required>
                        </div>
                        <div class="input_wrap">
                            <label for="p_address">Permanant Address</label>
                            <input type="text" id="form2_input4" name="p_address" value="<?php setValue('p_address') ?>"
                                required>
                        </div>
                        <div class="input_wrap">
                            <label for="nic">NIC Number</label>
                            <input type="text" id="form2_input5" name="nic" value="<?php setValue('nic') ?>" required>
                        </div>
                        <div class="common_btns form_2_btns">
                            <button type="button" class="btn_back" name="first_back">
                                <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                                Back
                            </button>
                            <button type="submit" class="btn_next" name="second_next">Next
                                <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        <?php } ?>

        <?php function display3()
        { ?>
            <div class="form_3 data_info">

                <h2>Personal Info</h2>

                <form action="" method="POST">
                    <div class="form_container">

                        <input type="hidden" name="reg_no" value="<?php echo setValue('reg_no') ?>">
                        <input type="hidden" name="full_name" value="<?php echo setValue('full_name') ?>">
                        <input type="hidden" name="ini_name" value="<?php echo setValue('ini_name') ?>">
                        <input type="hidden" name="gender" value="<?php echo setValue('gender') ?>">
                        <input type="hidden" name="dob" value="<?php echo setValue('dob') ?>">

                        <input type="hidden" name="mobile_number" value="<?php echo setValue('mobile_number') ?>">
                        <input type="hidden" name="email" value="<?php echo setValue('email') ?>">
                        <input type="hidden" name="r_address" value="<?php echo setValue('r_address') ?>">
                        <input type="hidden" name="p_address" value="<?php echo setValue('p_address') ?>">
                        <input type="hidden" name="nic" value="<?php echo setValue('nic') ?>">

                        <div class="input_wrap">
                            <label for="status">Martial Status</label>
                            <input type="text" id="form3_input1" name="martial_status" value="<?php setValue('martial_status') ?>" required>
                        </div>
                        <div class="input_wrap">
                            <label for="faculty">Faculty</label>
                            <input type="text" id="form3_input2" name="faculty" value="<?php setValue('faculty') ?>"
                                required>
                        </div>
                        <div class="input_wrap">
                            <label for="dep">Department</label>
                            <input type="text" id="form3_input3" name="department" value="<?php setValue('department') ?>"
                                required>
                        </div>
                        <div class="input_wrap">
                            <label for="height">Height</label>
                            <input type="text" id="form3_input4" name="height" value="<?php setValue('height') ?>" required>
                        </div>
                        <div class="input_wrap">
                            <label for="weight">Weight</label>
                            <input type="text" id="form3_input5" name="weight" value="<?php setValue('weight') ?>" required>
                        </div>
                        <div class="common_btns form_3_btns">
                            <button type="button" class="btn_back" name="second_back">
                                <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                                Back
                            </button>
                            <button type="submit" class="btn_next" name="third_next">Next
                                <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        <?php } ?>

        <?php function display4()
        { ?>
            <div class="form_4 data_info">

                <h2>Personal Info</h2>

                <form action="" method="POST">
                    <div class="form_container">

                        <input type="hidden" name="reg_no" value="<?php echo setValue('reg_no') ?>">
                        <input type="hidden" name="full_name" value="<?php echo setValue('full_name') ?>">
                        <input type="hidden" name="ini_name" value="<?php echo setValue('ini_name') ?>">
                        <input type="hidden" name="gender" value="<?php echo setValue('gender') ?>">
                        <input type="hidden" name="dob" value="<?php echo setValue('dob') ?>">

                        <input type="hidden" name="mobile_number" value="<?php echo setValue('mobile_number') ?>">
                        <input type="hidden" name="email" value="<?php echo setValue('email') ?>">
                        <input type="hidden" name="r_address" value="<?php echo setValue('r_address') ?>">
                        <input type="hidden" name="p_address" value="<?php echo setValue('p_address') ?>">
                        <input type="hidden" name="nic" value="<?php echo setValue('nic') ?>">

                        <input type="hidden" name="martial_status" value="<?php echo setValue('martial_status') ?>">
                        <input type="hidden" name="faculty" value="<?php echo setValue('faculty') ?>">
                        <input type="hidden" name="department" value="<?php echo setValue('department') ?>">
                        <input type="hidden" name="height" value="<?php echo setValue('height') ?>">
                        <input type="hidden" name="weight" value="<?php echo setValue('weight') ?>">

                        <div class="input_wrap">
                            <label for="g_name">Guardian Name</label>
                            <input type="text" name="g_name" value="<?php setValue('g_name') ?>" required id="form4_input1">
                        </div>
                        <div class="input_wrap">
                            <label for="rel">Relation</label>
                            <input type="text" name="rel" value="<?php setValue('rel') ?>" required id="form4_input2">
                        </div>
                        <div class="input_wrap">
                            <label for="guardian">Contact number</label>
                            <input type="tel" name="tel" value="<?php setValue('tel') ?>" required id="form4_input3">
                        </div>
                        <div class="input_wrap">
                            <label for="relation">Password</label>
                            <input type="password" name="password" value="<?php setValue('password') ?>" required
                                id="form4_input4">
                        </div>
                        <div class="input_wrap">
                            <label for="school">Confirm Password</label>
                            <input type="password" name="confirm_password" value="<?php setValue('confirm_password') ?>"
                                required id="form4_input5">
                        </div>
                        <div class="common_btns form_4_btns">
                            <button type="button" class="btn_back" name="third_back">
                                <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                                Back
                            </button>

                            <button type="submit" class="btn_done" name="final_submit">Done
                                <span class="icon"></span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        <?php } ?>
    
    </div>
    



    <!-- <div class="btns_wrap"> -->
    <!-- <div class="common_btns form_1_btns">
                <button type="submit" class="btn_next">Next
                    <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                </button>
            </div> -->
    <!-- <div class="common_btns form_2_btns" style="display: none;">
                <button type="button" class="btn_back" >
                    <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    Back
                </button>
                <button type="submit" class="btn_next">Next
                    <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                </button>
            </div> -->
    <!-- <div class="common_btns form_3_btns" style="display: none;">
                <button type="button" class="btn_back"> 
                    <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    Back
                </button>
                <button type="submit" class="btn_next">Next
                    <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                </button>
            </div> -->
    <!-- <div class="common_btns form_4_btns" style="display: none;">
                <button type="button" class="btn_back"> 
                    <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    Back
                </button>
                
                <button type="submit" class="btn_done">Done
                    <span class="icon"></span>
                </button>
            </div> -->
    <!-- </div> -->

    <!-- </div> -->


    <!-- <div class="modal_wrapper">
        <div class="shadow"></div>
        <div class="success_wrapper">
            <span class="modal_icon">
                <ion-icon name="checkmark-outline"></ion-icon>
            </span>
            <p>You have successfully completed the registration.</p>
        </div>
    </div> -->

    <!-- <script type="text/javascript" src="scripts.js"></script> -->
</body>

</html>