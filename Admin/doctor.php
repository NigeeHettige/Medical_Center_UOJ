<?php 

    include('..\connection.php');
    session_start();

    function setValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }


    if(!isset($_SESSION['admin_name'])){
        header('location: login.php');
    }

    if(isset($_GET['action'])){
        if($_GET['action'] == 'logout'){
            session_unset();
            session_destroy();
            header("location: login.php");
        }
    }

    if(isset($_POST['dr_submit'])){
        $dr_name = $_POST['dr_name'];
        $hospital = $_POST['hospital'];
        $nic = $_POST['nic'];
        $contact_number = $_POST['contact_number'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        print_r($_POST);

        $query = "INSERT INTO doctor (dr_name,hospital,nic,contact_no,address,email,gender,password) VALUES ('$dr_name','$hospital','$nic','$contact_number','$address','$email','$gender','$password')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<script>alert('Insertion Successfull!')</script>";
            header('location: doctor.php');
        } else {
            echo "<script>alert('Insertion Success!')</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Center</title>
    <link rel="stylesheet" href="../CSS/appoinment.css">
    <link rel="stylesheet" href="../CSS/doctor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

</head>
<body>
    <div class="container" style="position: relative;" id="blur">
        <div class="navigation">
            <ul>
               <li>
                <div class="logo">
                    <a href="#">
                       <span class="icon"><img src="images/uoj_logo.png" alt=""></span>
                        <span class="title"></span>
                        <span class="icon"></span>
                    </a>
                </div>
               </li> 


               <li>
                <a href="index.php">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Dashboard</span>
                </a>
               </li> 


               <li>
                <a href="appoinment.php">
                    <span class="icon"><ion-icon name="time-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Appoinments</span>
                </a>
               </li> 


               <li>
                <a href="student.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Student</span>
                </a>
               </li> 


               <li>
                <a href="doctor.php">
                    <span class="icon"><i class="fa-solid fa-stethoscope"></i></span>
                    <span class="title"></span>
                    <span class="icon">Doctor</span>
                </a>
               </li> 


               <li>
                <a href="index.php?action=logout">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Sign Out</span>
                </a>
               </li> 


            </ul>
        </div>

        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- search -->
                    <h1 class="welcome"> Welcome <span class="wel_us">Admin</span></h1>
                 <!-- user Image -->
                 <div class="user">
                    <img src="images/user.jpg" alt="">
                 </div>

            </div>
        <!--  main ends -->
        

            <!-- All appoinment section start -->
           
            <section id="appoinment">

            <?php
            
                $query = "SELECT * from doctor";
                $result = mysqli_query($connection,$query);
                if(!$result){  
                    echo "error fetching";
                }

                while($row = mysqli_fetch_assoc($result)){
                    ?>
                
                    <div class="profile">
                        <center>
                        <div class="prof_pic">
                            <img src="../images/doctor.jpg" alt="Doctor Profile">
                            <div class="prof_name">
                                <h3><?php echo 'Dr.'.$row['dr_name']?></h3>
                            </div>
                        </div>
                        </center>
                        <div class="prof_body">
                            <div class="doc_details">
                                <div>
                                    <label for="hospital">Hospital</label>
                                    <p><?php echo $row['hospital']?></p>
                                   
                                </div>
                            </div>

                            <div class="doc_details">
                                <div>
                                    <label for="nic">NIC</label>
                                    <p><?php echo $row['nic']?></p>
                                </div>
                            </div>

                            <div class="doc_details">
                                <div>
                                    <label for="contact_num">Contact Number</label>
                                    <p><?php echo $row['contact_no']?></p>
                                </div>

                            </div>

                            <div class="doc_details">
                                <div>
                                    <label for="address">Address</label>
                                    <p><?php echo $row['address']?></p>
                                </div>
                            </div>

                            <div class="doc_details">
                                <div>
                                    <label for="email">Email</label>
                                    <p><?php echo $row['email']?></p>
                                </div>
                            </div>  
                            
                            <div class="doc_details">
                                <div>
                                    <label for="gender">Gender</label>
                                    <p><?php echo $row['gender']?></p>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    
                    
                    <?php
                }
                ?>
            
            
                
                <a href="#" class="status2" onclick="viewPopup()"> <ion-icon name="add-circle-outline"></ion-icon></a>
                
            </section>
           
            <!-- Appoinment section ends -->         

        </div>

    </div>



    <!-- Make new appoinment -->
    <div class="popup_form" id="popup_form">
        <div class="popup" id="popup">
            <div class="close-btn" onclick="closeviewPopup()">&times;</div>
            <div class="form">
                <h2>Add new doctor</h2>
                    <form action="" method="POST">
                    <!-- <div class="form-element">
                        <label for="regno" >Registration Number</label>
                        <input type="text" placeholder="Registration Number">
                    </div> -->
                    <div class="form-element">
                        <label for="name" >Doctor Name</label>
                        <input type="text" name="dr_name" placeholder="Name" value='<?php setValue('dr_name') ?>'>
                    </div>
                    <div class="form-element">
                        <label for="hospital" >Hospital</label>
                        <input type="text" name="hospital" placeholder="Hospital" value='<?php setValue('hospital') ?>'>
                    </div>
                    <div class="form-element">
                        <label for="nic" >NIC</label>
                        <input type="text" name="nic" placeholder="NIC" value='<?php setValue('nic') ?>'>
                    </div>
                    <div class="form-element">
                        <label for="contact number" >Contact Number</label>
                        <input type="tel" name="contact_number" placeholder="+94-xxxxxxx" value='<?php setValue('contact_number') ?>'>
                    </div>
                    <div class="form-element">
                        <label for="address" >Address</label>
                        <input type="text" name="address" placeholder="No: 30/A, Jaffna." value='<?php setValue('address') ?>'>
                    </div>
                    <div class="form-element">
                        <label for="email" >Email</label>
                        <input type="email" name="email" placeholder="example@gmail.com" value='<?php setValue('email') ?>'>
                    </div>
                    <div class="form-element">
                        <label for="gender">Gender</label>
                        <select name="gender" name="gender" id="time" value='<?php setValue('gender') ?>'>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <input type="hidden" name="password" value="$2y$10$QCYYeXwXWhOWBr6yuN15AOFlAm18SuCKlUizBhjnuHiylUbaj0KCu">
                    <div class="form-element">
                        <button type="submit" name="dr_submit">Submit</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!-- Make new appoinment end -->


  




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>

console.log("Script executed");

      //add hovered class in selected list item  
      let list = document.querySelectorAll('.navigation li');
      function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
      }
      list.forEach((item) =>
      item.addEventListener('mouseover',activeLink));


    //menu toggle

    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('main');

    toggle.onclick = function(){
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }


    // // for change status color


    document.addEventListener("DOMContentLoaded",function(){
        const card2 = document.querySelector('.card2');
        const statusElement = card2.querySelector('.numbers');
        const status = statusElement.textContent.toLocaleLowerCase();
        

        if(status === 'active'){
            card2.classList.add('active');
            card2.style.backgroundColor = "rgb(95, 255, 164)";
            
        }else{
            card2.classList.add('deactive');
            card2.style.backgroundColor = "rgb(255, 95, 95";
        }

    
    });


    
//    for diabling date




$(function(){
    var arrayOfDates = ["25-08-2023","29-08-2023"];

    $("input.datePicker").datepicker({
        beforeShowDay: function(date){
            var string = $.datepicker.formatDate("dd-mm-yy", date);  
            return [arrayOfDates.indexOf(string) === -1]; 
        }
    });
});


//popup login
    function viewPopup(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
    }

    function closeviewPopup(){
        var blur = document.getElementById('blur');
        blur.classList.remove('active');
        var popup = document.getElementById('popup');
        popup.classList.remove('active');
    }


//blur 



    </script>
</body>
</html>