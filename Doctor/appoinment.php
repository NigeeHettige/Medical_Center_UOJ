<?php 

    include('..\connection.php');   
    session_start();

    if(!$_SESSION['dr_nic']){
        header('location: login.php');
    }

    if(isset($_GET['action'])){
        if($_GET['action']=='logout'){
            session_unset();
            session_destroy();
            echo "<script>alert('You are going to logout!');</script>";
            header('location: login.php');
        }
    }

    if(isset($_GET['appoinment_id']) && isset($_GET['action'])){

        $appoinment_id = $_GET['appoinment_id'];
        $query = "DELETE FROM bookings WHERE id='$appoinment_id'";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<script>alert('appoiment deleted!')</script>";
            header('location: appoinment.php');
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


               <!-- <li>
                <a href="feedback.php">
                    <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Schedule</span>
                </a>
               </li>  -->


               <!-- <li>
                <a href="user_prof.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Remark</span>
                </a>
               </li>  -->


               <li>
                <a href="?action=logout">
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
                <h1 class="welcome"> Welcome <span class="wel_us">Dr. <?php echo $_SESSION['dr_name']?></span></h1>
                 <!-- user Image -->
                 <div class="user">
                    <img src="images/user.jpg" alt="">
                 </div>

            </div>
        <!--  main ends -->

            <!-- All appoinment section start -->
            <section id="appoinment">
                
                <!-- <a href="#" class="status2" onclick="viewPopup()">New Appoinment <ion-icon name="add-circle-outline"></ion-icon></a> -->
             
                <!-- current active appoinment  -->
                <div class="details1 details">
                    <div class="recentOrders1">
                        <div class="cardHeader1">
                            <h2>Current Active Appoinment</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Registration Number</td>
                                    <td>Name</td>
                                    <td>Time</td> 
                                    <td>Action</td>
                                </tr>
                                
                            </thead>

                            <tbody>

                                <?php 
                                    
                                    $id = $_SESSION['dr_id'];
                                    $query = "SELECT * FROM bookings WHERE dr_id = '$id'";
                                    $result = mysqli_query($connection,$query);
                                    if($result){

                                        while($row=mysqli_fetch_assoc($result)){

                                            ?>

                                                <tr>
                                                    <td><?php echo $row['reg_number']?></td>
                                                    <td><?php echo $row['name']?></td>
                                                    <td><?php echo $row['time_slot']?></td>
                                                    <td ><a href="?appoinment_id=<?php echo $row['id']?>&action=delete" class="status" ><i class="fa-solid fa-trash"></i></a></td>
                                                    
                                                </tr>
                                            <?php

                                        }

                                    }        
                                
                                ?>

                                
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                 <!-- current active appoinment end -->


            </section>
            <!-- Appoinment section ends -->         

        </div>

    </div>



    <!-- Make new appoinment -->
    <!-- <div class="popup_form" id="popup_form">
        <div class="popup" id="popup">
            <div class="close-btn" onclick="closeviewPopup()">&times;</div>
            <div class="form">
                <h2>Make new Appoinment</h2>

                <div class="form-element">
                    <label for="regno" >Registration Number</label>
                    <input type="text" placeholder="Registration Number">
                </div>
                <div class="form-element">
                    <label for="regno" >Department</label>
                    <input type="text" placeholder="Your department">
                </div>
                <div class="form-element">
                    <label for="regno" >Batch</label>
                    <input type="text" placeholder="Registration Number">
                </div>
                <div class="form-element">
                    <label for="regno" >Full Name</label>
                    <input type="text" placeholder="Registration Number">
                </div>
                <div class="form-element">
                    <label for="regno" >Telephone Number</label>
                    <input type="tel" placeholder="Registration Number">
                </div>
                <div class="form-element">
                    <label for="regno" >Email</label>
                    <input type="email" placeholder="Registration Number">
                </div>
                <div class="form-element">
                    <label for="regno" >Date</label>
                    <input type="datePicker" class="datePicker">
                </div>
                <div class="form-element">
                    <label for="time">Select Time</label>
                    <select name="time" id="time">
                        <option value="">9.00am</option>
                        <option value="">9.30am </option>
                        <option value="">10.00am</option>
                        <option value="">10.30am</option>
                        <option value="">11.00am</option>
                        <option value="">11.30am</option>
                        <option value="">1.00am</option>
                        <option value="">1.30pm</option>
                    </select>
                </div>
                <div class="form-element">
                    <button type="submit">Submit</button>
                </div>
             


            </div>
        </div>
    </div> -->
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