<?php

    include('..\connection.php');
    session_start();

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

    function setValue($name){
        if(isset($_POST['$name'])){
            echo $_POST[$name];
        }
    }
    if(isset($_POST['search'])){
        $reg_number = $_POST['reg_number'];
        $query2 = "SELECT * FROM user_details WHERE reg_number='$reg_number'";
        $result2 = mysqli_query($connection,$query2);
        if($result2){
            $numOfrows = mysqli_num_rows($result2);
            if($numOfrows ==1){
                ?> 
                <script type="text/javascript">window.open('student_prof/studprof.php?reg_number=<?php echo $reg_number ?>', '_blank')</script>
            <?php
            }else{
            ?>
                <script type="text/javascript">alert('User not found');</script>
            
            <?php
            }
            }
        }
        ?>
     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Center</title>
    <link rel="stylesheet" href="student.css">
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
                
                <!-- Make new appoinment -->
                <div class="popup_form" id="popup_form">
                    <div class="popup" id="popup"   style="margin-top: 150px">
                        
                        <div class="form">
                            <h2>Find Student</h2>
                                
                                <form action="" method="POST">
                                
                                <div class="form-element">
                                    <label for="cause" >Registration Number</label>
                                    <input type="text" name="reg_number" id="appoinment_id" value="<?php setValue('reg_number') ?>">
                                </div>
                             
                                <div class="form-element">
                                    <button type="submit" name='search'>Search</button>
                                </div>
             
                               
                            </form>


                        </div>
                    </div>
                    </div>
                    <!-- Make new appoinment end -->


               
            </section>
            <!-- Appoinment section ends -->         

        </div>

    </div>


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
    // function viewPopup(){
    //     var blur = document.getElementById('blur');
    //     blur.classList.toggle('active');
    //     var popup = document.getElementById('popup');
    //     popup.classList.toggle('active');
    // }

    // function closeviewPopup(){
    //     var blur = document.getElementById('blur');
    //     blur.classList.remove('active');
    //     var popup = document.getElementById('popup');
    //     popup.classList.remove('active');
    // }


//blur 



    </script>
</body>
</html>