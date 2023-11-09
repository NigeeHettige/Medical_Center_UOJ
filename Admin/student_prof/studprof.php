<?php

    include('..\..\connection.php');

    function setValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
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
                <?php
                    if(isset($_GET['reg_number'])){
                        $reg_num = $_GET['reg_number'];
                        $query = "SELECT * FROM user_details WHERE reg_number='$reg_num'";
                        $result = mysqli_query($connection,$query);
                        if($result){
                            $row = mysqli_fetch_assoc($result);

                            $file = $row['profile_photo'];
                            $fileNew = explode('..',$file);
                            $fileNewNew = strtolower(end($fileNew));
                            $finalPath = "../../User".$fileNewNew;
                        ?>
                       
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px"src="<?php echo $finalPath?>">
                <div class="d-flex justify-content-between align-items-center experience">
                    <input type="file" name='file' id="file_upload" hidden>
                    
                    
                </div>
                <span id="file-chosen"></span>
                    <br>
                <span class="font-weight-bold"><?php echo $row['full_name']; ?></span><span class="text-black-50"><?php echo $row['email']; ?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Registration Number</label>
                            <input type="text" class="form-control" name="reg_number" value="<?php echo $row['reg_number'];?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">NIC Number</label>
                            <input type="text" class="form-control" name="nic" value="<?php echo $row['nic'];?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Mobile Number</label>
                            <input type="tel" class="form-control" name="mobile_number" value="<?php echo $row['mobile_number'];?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Gender</label>
                            <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'];?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Residential Adrress</label>
                            <input type="text" class="form-control" name="residential_address" value="<?php echo $row['residential_address'];?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Permanant Address</label>
                            <input type="text" class="form-control" name="permenent_address" value="<?php echo $row['permenent_address']; ?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Faculty</label>
                            <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty'];?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Department</label>
                            <input type="text" class="form-control" name="department" value="<?php echo $row['department'];?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Date of Birth</label>
                            <input type="text" class="form-control" name="dob" value="<?php echo $row['dob'];?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Martial State</label>
                            <input type="text" class="form-control" name="martial_status" value="<?php echo $row['martial_status'];?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Guardian Name</label>
                            <input type="text" class="form-control" name="gardian_name" value="<?php echo $row['gardian_name'];?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Realtion</label>
                            <input type="text" class="form-control" name="relation" value="<?php echo $row['relation'];?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" value="<?php echo $row['contact_number'];?>" readonly>
                        </div>

                       
                      
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Height</label>
                            <input type="text" class="form-control" name="height" value="<?php echo $row['height']; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Weight</label>
                            <input type="text" class="form-control" name="weight" value="<?php echo $row['weight'];?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="labels">Blood Group</label>
                        <input type="text" class="form-control" placeholder="ex: A+" name="blood_group" value="<?php echo $row['blood_group'];?>" readonly>
                    </div> <br>
                    <div class="col-md-12">
                        <label class="labels">Last School Attend</label>
                        <input type="text" class="form-control" placeholder="ex: Visaka Vidyalaya" name="last_school_attend" value="<?php echo $row['last_school_attend'];?>" readonly>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Past Information</span></div><br>
                     <table >
                        <theah>
                            <th>Date</th>
                            <th>Reason</th>
                        </theah>
                        <tbody>
                        <?php
                            $reg_number = $_GET['reg_number'];
                            $query1 = "SELECT * FROM bookings WHERE reg_number ='$reg_number' AND status='done'";
                            $result1 = mysqli_query($connection,$query1);
                            if($result1){
                                while($rowOfstud = mysqli_fetch_assoc($result1)){ ?>
                                    <tr style="height: 20px;">
                                        <td style="width:250px;"><?php echo $rowOfstud['date'] ?></td>
                                        <td><?php echo $rowOfstud['cause'] ?></td>
                                    </tr>


                        <?php
                                }
                            }
                        ?>
                        </tbody>
                        
                     </table>       
                </div>
                
            </div>

            <?php
                        }
                    }

                   
                
                ?>
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