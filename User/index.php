<?php 

 include('..\connection.php');

 session_start();
    if(!isset($_SESSION['username'])){
        header("location: login/login.php");
    }

    if(isset($_GET['action'])){
        if($_GET['action'] == 'signout'){
            session_unset();
            session_destroy();
            header("location: login/login.php");
        }
    }

   if(isset($_GET['action'])){
    if($_GET['action'] == 'appoinment_delete'){
        $id = $_GET['id'];
        $query2 = "DELETE FROM bookings WHERE id='$id'";
        $result2 = mysqli_query($connection,$query2);
        if($result2){
            echo "<script>alert('Deletion Successfully!')</script>";
            header("location: index.php");
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
    <link rel="stylesheet" href="main.css?=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

</head>
<body>
    <div class="container5" style="position: relative;" id="blur">
        <div class="navigation">
            <ul>
               <li>
                <div class="logo">
                    <a href="#">
                       <span class="icon1"><img src="images/uoj_logo.png" alt=""></span>
                        <span class="title1"></span>
                        <span class="icon1"></span>
                    </a>
                </div>
               </li> 


               <li>
                <a href="index.php">
                    <span class="icon1"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title1"></span>
                    <span class="icon1">Dashboard</span>
                </a>
               </li> 


               <li>
                <a href="appoinment.php">
                    <span class="icon1"><ion-icon name="time-outline"></ion-icon></span>
                    <span class="title1"></span>
                    <span class="icon1">Appoinments</span>
                </a>
               </li> 


               <li>
                <a href="remark.php">
                    <span class="icon1"><ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class="title1"></span>
                    <span class="icon1">Remark</span>
                </a>
               </li> 


               <li>
                <a href="user_prof1/user.php" target="_blank">
                    <span class="icon1"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title1"></span>
                    <span class="icon1">User Profile</span>
                </a>
               </li> 


               <li>
                <a href="index.php?action=signout">
                    <span class="icon1"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title1"></span>
                    <span class="icon1">Sign Out</span>
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
                    <h1 class="welcome"> Welcome <span class="wel_us"><?php echo $_SESSION['username']?></span></h1>
                 <!-- user Image -->
                 <div class="user">
                    <img src="images/user.jpg" alt="">
                 </div>

            </div>
        <!--  manin ends -->
           <div class="dashboard" id="dashboard"  style="min-height: 100vh;">
                <!-- Dashboard start -->
                <!-- cards -->
                <div class="cardBox">
                    <div class="card1">
                        <div>
                            <?php
                                $regNo = $_SESSION['reg_num'];
                                $query1 = "SELECT * FROM bookings WHERE reg_number = '$regNo' AND date=CURDATE() AND status=''";
                                $result1 = mysqli_query($connection,$query1);
                                if($result1){
                                    $num_rows = mysqli_num_rows($result1);
                                }
                            
                            ?>
                            <div class="numbers"><?php echo $num_rows; ?></div>
                            <div class="cardName">Appoinments</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="happy-outline"></ion-icon>
                        </div>
                    </div>
    
    
                    <div class="card2">
                        <div>
                            <div class="numbers" >Active</div>
                            <div class="cardName">Status</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </div>
                    </div>
    
    
                    <div class="card3" id="date">
                        <div>
                            <!-- <div class="numbers" >14<sup class="sup">th</sup><span > December</span></div> -->
                            <?php
                            $today = date('j<\s\u\p class="sup">S</\s\u\p> F');
                            echo '<div class="numbers">' . $today . '</div>';
                            ?>

                            <div class="cardName">Date</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                    </div>
    
    
                   
                    
                </div>
    
                <!-- Appoinment details --> 
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent Appoinment</h2>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Appoinment ID</td>
                                    <td>Time</td>
                                    <td>Doctor</td>
                                    <td>Action</td>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
                                $regNo = $_SESSION['reg_num'];
                                // $query = "SELECT * FROM bookings WHERE reg_number = '$regNo' AND date = CURDATE()  ORDER BY date,time_slot LIMIT 1";
                                $query = "SELECT bookings.id, bookings.date, bookings.time_slot, doctor.dr_name
                                            FROM bookings
                                            INNER JOIN doctor ON bookings.dr_id = doctor.dr_id
                                            WHERE bookings.reg_number = '$regNo'
                                            AND bookings.date = CURDATE()
                                            ORDER BY bookings.date, bookings.time_slot LIMIT 1";
                                $result = mysqli_query($connection,$query);
                                if($result){
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                            ?>
                                
                                <tr style="height: 50px;">
                                    <td  data-label = "id"><?php if(isset($row)){echo $row['id'];} ?></td>
                                    <td  data-label = "time"><?php if(isset($row)){echo $row['time_slot'];} ?></td>
                                    <td  data-label = "docname"><?php if(isset($row)){echo $row['dr_name'];} ?></td>
                                    <td  data-label = "action"><a href="?action=appoinment_delete&id=<?php echo $row['id'] ?>" class="status"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>  
                
                                <?php
                        }
                        }
                        ?>
                            </tbody>
                        
                        </table>
                    </div>
                </div>
               
                
           </div>
            <!-- Dashboard ends -->         

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