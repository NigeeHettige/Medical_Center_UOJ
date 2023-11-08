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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Center</title>
    <link rel="stylesheet" href="../Doctor/main.css?<?php echo time()?>">
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
                    <h1 class="welcome"> Welcome <span class="wel_us">Admin!</span></h1>
                 <!-- user Image -->
                 <div class="user">
                    <img src="images/user.jpg" alt="">
                 </div>

            </div>
        <!--  main ends -->

            <!-- All appoinment section start -->
            <section id="appoinment" style="margin-top: 20px">
                
                <!-- <a href="#" class="status2" onclick="viewPopup()">New Appoinment <ion-icon name="add-circle-outline"></ion-icon></a> -->
             
                <!-- current active appoinment  -->
                <div class="detailsadmin" style="display: block;">
                    <?php 

                        $query = "SELECT * FROM doctor";
                        $result = mysqli_query($connection,$query);
                        if($result){

                            while($row = mysqli_fetch_assoc($result)){ ?>

                                <div class="recentOrdersadmin"  style="margin-bottom: 40px; width:100%; display: block;">
                                    <div class="cardHeader">
                                        <h2>Dr. <?php echo $row['dr_name']?>'s Appoinments</h2>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <td>Registration number</td>
                                                <td>Name</td>
                                                <td>Date</td>
                                                <td>Time</td> 
                                            
                                            </tr>
                                            
                                        </thead>

                                        <tbody>
                                            <?php 
                                                $dr_id = $row['dr_id'];
                                                $query1 = "SELECT * FROM bookings WHERE doctor='$dr_id'";
                                                $result2 = mysqli_query($connection,$query1);
                                                if($result2){
                                                    while($row1 = mysqli_fetch_assoc($result2)){

                                                        ?>

                                                    <tr style="height: 30px">
                                                        <td><?php echo $row1['reg_number']?></td>
                                                        <td><?php echo $row1['name']?></td>
                                                        <td><?php echo $row1['date']?></td>
                                                        <td><?php echo $row1['time_slot']?></td>                                  
                                                    </tr>

                                                        <?php
                                                    }
                                                }
                                            
                                            ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>


                    <?php  
                        
                            }
                        }
                    ?>
                    
                </div>
                 <!-- current active appoinment end -->


                  <!-- previous appoinment  -->
                <!-- <div class="details2 details">
                    <div class="recentOrders1">
                        <div class="cardHeader1">
                            <h2>Doctor2 Appoinment</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Registration number</td>
                                    <td>Name</td>
                                    <td>Date</td>
                                    <td>Time</td>
                                    
                                </tr>
                                
                            </thead>

                            <tbody>
                                <tr>
                                    <td>2020/CCS/068</td>
                                    <td>Peshali Perera</td>
                                    <td>20/08/2023</td>
                                    <td>10.30am</td>
                                   

                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div> -->
                 <!-- previous appoinment end -->
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