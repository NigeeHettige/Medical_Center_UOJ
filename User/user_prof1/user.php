<?php

    include('..\..\connection.php');

    function setValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }

    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login/login.php");
    }

    if(isset($_SESSION['username'])){
        $reg_number = $_SESSION['reg_num'];

        $query = "SELECT * FROM user_details WHERE reg_number = '$reg_number'";
        $result = mysqli_query($connection,$query);

        if($result){
            $row = mysqli_fetch_assoc($result);
        }
    }

    if(isset($_POST['update_profile'])){

        $mobile_number = $_POST['mobile_number'];
        $residential_address = $_POST['residential_address'];
        $permenent_address = $_POST['permenent_address'];
        $martial_status = $_POST['martial_status'];
        $gardian_name = $_POST['gardian_name'];
        $relation = $_POST['relation'];
        $contact_number = $_POST['contact_number'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood_group = $_POST['blood_group'];
        $last_school_attend = $_POST['last_school_attend'];

            $file = $_FILES['file'];

            $fileName = $_FILES['file']['name'];
            $fileTempName = $_FILES['file']['tmp_name'];
            $fileError = $_FILES['file']['error'];
            $fileSize = $_FILES['file']['size'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.',$fileName);
            $actualFileExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');

            if(in_array($actualFileExt,$allowed)){

                if($fileError === 0){

                    if($fileSize < 1000000){
                        
                        $reg_num = $_SESSION['reg_num'];

                        $fileNameNew = $_SESSION['reg_num'].'.'.$actualFileExt;
                        $filePath = '../uploads/'.$fileNameNew;
                        $queryInside = "SELECT * FROM user_details WHERE reg_number = '$reg_num'";
                        $resultInside = mysqli_query($connection,$queryInside);
                        if($resultInside){
                            $rowInside = mysqli_fetch_assoc($resultInside);
                            // echo $rowInside['profile_photo'];
                            // echo "<br>";
                            // echo '../uploads/'.$_SESSION['reg_num'].'.jpg';
                            if($rowInside['profile_photo'] == $filePath){
                                unlink($filePath);
                            }
                        }
                        move_uploaded_file($fileTempName,$filePath);

                        $query = "UPDATE user_details set mobile_number='$mobile_number',residential_address='$residential_address',permenent_address='$permenent_address',martial_status='$martial_status',gardian_name='$gardian_name',relation='$relation',contact_number='$contact_number',height='$height',weight='$weight',blood_group='$blood_group',last_school_attend='$last_school_attend',profile_photo='$filePath' WHERE reg_number='$reg_num'";
                        $result = mysqli_query($connection,$query);
                        if($result){
                            echo "<script>alert('Phofile is updated!')</script>";
                            // header("location: user.php");
                        }


                    } else {
                        echo "<script>alert('File Size Exceeded!')</script>";
                    }

                } else {
                    echo "<script>alert('File Error!')</script>";
                }

            } else {
                echo "<script>alert('Unsupported File Format!')</script>";
            }

    }

    if(isset($_POST['password_change'])){
        $currentPassword = $_POST['current_password'];
        $newPassword = $_POST['new_password'];
        $confirmNewPassword = $_POST['confirm_new_password'];
        $reg_number = $_SESSION['reg_num'];
        $queryPassword = "SELECT password FROM user_details WHERE reg_number = '$reg_number'";
        $resultPassword = mysqli_query($connection,$queryPassword);
        if($resultPassword){
            $row1 = mysqli_fetch_assoc($resultPassword);
            // echo $row['password'];
            if(password_verify($currentPassword,$row1['password'])){

                if($newPassword === $confirmNewPassword){
                    $newHashedPassword = password_hash($newPassword,PASSWORD_DEFAULT);
                    $queryFinal = "UPDATE user_details SET password='$newHashedPassword' WHERE reg_number='$reg_number'";
                    $resultFinal = mysqli_query($connection,$queryFinal);
                    if($resultFinal){
                        echo "<script>alert('Password Changed!')</script>";
                    }

 
                } else {    
                    echo "<script>alert('Password mismatch!')</script>";
                }

            } else {
                echo "<script>alert('Invalid Password!')</script>";
            }
        }
    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username']?></title>
    <link rel="stylesheet" href="main.css?=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px"src="<?php if(isset($row)){echo $row['profile_photo'];}?>">
                <div class="d-flex justify-content-between align-items-center experience">
                    <input type="file" name='file' id="file_upload" hidden>
                    <label for="file_upload" class="btn btn-primary profile-button" style="background-color: white; color: black; border-color: black; padding: 2px 10px; margin: 15px 0px;">Upload</label>
                    
                </div>
                <span id="file-chosen"></span>
                    <br>
                <span class="font-weight-bold"><?php if(isset($row)){echo $row['full_name'];} ?></span><span class="text-black-50"><?php if(isset($row)){echo $row['email'];} ?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Registration Number</label>
                            <input type="text" class="form-control" name="reg_number" value="<?php if(isset($row)){echo $row['reg_number'];}?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">NIC Number</label>
                            <input type="text" class="form-control" name="nic" value="<?php if(isset($row)){echo $row['nic'];}?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Mobile Number</label>
                            <input type="tel" class="form-control" name="mobile_number" value="<?php if(isset($row)){echo $row['mobile_number'];} else {setValue('mobile_number');}?>">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Gender</label>
                            <input type="text" class="form-control" name="gender" value="<?php if(isset($row)){echo $row['gender'];} else {setValue('gender');}?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Residential Adrress</label>
                            <input type="text" class="form-control" name="residential_address" value="<?php if(isset($row)){echo $row['residential_address'];} else {setValue('residential_address');}?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Permanant Address</label>
                            <input type="text" class="form-control" name="permenent_address" value="<?php if(isset($row)){echo $row['permenent_address'];} else {setValue('permanant_address');}?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Faculty</label>
                            <input type="text" class="form-control" name="faculty" value="<?php if(isset($row)){echo $row['faculty'];} else {setValue('faculty');}?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Department</label>
                            <input type="text" class="form-control" name="department" value="<?php if(isset($row)){echo $row['department'];} else {setValue('department');}?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Date of Birth</label>
                            <input type="text" class="form-control" name="dob" value="<?php if(isset($row)){echo $row['dob'];} else {setValue('dob');}?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Martial State</label>
                            <input type="text" class="form-control" name="martial_status" value="<?php if(isset($row)){echo $row['martial_status'];} else {setValue('martial_status');}?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Guardian Name</label>
                            <input type="text" class="form-control" name="gardian_name" value="<?php if(isset($row)){echo $row['gardian_name'];} else {setValue('gardian_name');}?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Realtion</label>
                            <input type="text" class="form-control" name="relation" value="<?php if(isset($row)){echo $row['relation'];} else {setValue('relation');}?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" value="<?php if(isset($row)){echo $row['contact_number'];} else {setValue('contact_number');}?>">
                        </div>

                       
                      
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Height</label>
                            <input type="text" class="form-control" name="height" value="<?php if(isset($row)){echo $row['height'];} else {setValue('height');} ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Weight</label>
                            <input type="text" class="form-control" name="weight" value="<?php if(isset($row)){echo $row['weight'];} else {setValue('weight');}?>">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit" name="update_profile">Update Profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>More Information</span></div><br>
                    <div class="col-md-12">
                        <label class="labels">Blood Group</label>
                        <input type="text" class="form-control" placeholder="ex: A+" name="blood_group" value="<?php if(isset($row)){echo $row['blood_group'];} else {setValue('blood_group');}?>">
                    </div> <br>
                    <div class="col-md-12">
                        <label class="labels">Last School Attend</label>
                        <input type="text" class="form-control" placeholder="ex: Visaka Vidyalaya" name="last_school_attend" value="<?php if(isset($row)){echo $row['last_school_attend'];} else {setValue('last_school_attend');}?>">
                    </div>
                </div>
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Change Password</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Change</span></div><br>
                    <form action="" method="POST">
                        <div class="col-md-12">
                            <label class="labels">Current Password</label>
                            <input type="password" name="current_password" class="form-control"  value="<?php setValue('')?>">
                        </div> <br>
                        <div class="col-md-12">
                            <label class="labels">New Password</label>
                            <input type="password" name="new_password" class="form-control"  value="<?php setValue('')?>">
                        </div><br>
                        <div class="col-md-12">
                            <label class="labels">Confirm New Password</label>
                            <input type="password" name="confirm_new_password" class="form-control"  value="<?php setValue('')?>">
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="password_change">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- </div>
    </div> -->
    </form>

    <script>    

            const actualBtn = document.getElementById('file_upload');

            const fileChosen = document.getElementById('file-chosen');

            actualBtn.addEventListener('change', function(){
                // fileChosen.textContent = this.files[0].name
                fileChosen.textContent =  "Selected";
            })

    </script>

</body>
</html>