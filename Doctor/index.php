<?php 
    
    include('..\connection.php'); 
    session_start();

    if(!$_SESSION['dr_nic']){
        header('location: login.php');
    }

    if(isset($_POST['prescription_submit'])){
        $cause = $_POST['cause'];
        $prescription = $_POST['prescription'];
        $appoinment_id = $_POST['appoinment_id'];

        $query3 = "UPDATE bookings SET cause='$cause',remark='$prescription',status='done' WHERE id = '$appoinment_id'";
        $result3 = mysqli_query($connection,$query3);
        if($result3){
            echo "<script>alert('Prescription Submitted!')</script>";
        }
    }

    if(isset($_GET['action'])){
        if($_GET['action']=='logout'){
            session_unset();
            session_destroy();
            echo "<script>alert('You are going to logout!');</script>";
            header('location: login.php');
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
        <!--  manin ends -->
           <div class="dashboard" id="dashboard"  style="min-height: 100vh;">
                <!-- Dashboard start -->
                <!-- cards -->
                <div class="cardBox">
                    <div class="card1">
                                    <?php 
                                    
                                    $id = $_SESSION['dr_id'];
                                    $query = "SELECT * FROM bookings WHERE doctor = '$id'";
                                    $result = mysqli_query($connection,$query);
                                    $numOfRows = mysqli_num_rows($result);     
                                
                                ?>

                        <div>
                            <div class="numbers"><?php echo $numOfRows?></div>
                            <div class="cardName">Total Appoinments</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="happy-outline"></ion-icon>
                        </div>
                    </div>
    
    
                    <div class="card2">
                        <?php
                        $query1 = "SELECT * FROM bookings WHERE doctor ='$id' AND date = CURDATE()";
                        $result1 = mysqli_query($connection,$query1);
                        if($result1){
                            $num_rows = mysqli_num_rows($result1);
                        }
                        ?>
                        <div>
                            <div class="numbers" ><?php echo $num_rows; ?></div>
                            <div class="cardName">Today's Appoinment</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </div>
                    </div>
    
    
                    <div class="card3" id="date">
                        <div>
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
                            <h2>Today's Appoinment</h2>
                        </div>
                        <table class="table">
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
                              $query2 = "SELECT * FROM bookings WHERE doctor ='$id'";
                              $result2 = mysqli_query($connection,$query2);
                              if($result2){
                                while($row = mysqli_fetch_assoc($result2)){
                            ?>    
                              
                            
                              
                                <tr>
                                    <td  data-label = "regNo"><?php echo $row['reg_number'];?></td>
                                    <td  data-label = "name"><?php echo $row['name'];?></td>
                                    <td  data-label = "time"><?php echo $row['time_slot'];?></td>
                                    <div class="act">
                                        <td  data-label = "action"><a href="#" class="status1" onclick="viewPopup(<?php echo $row['id']?>)"><i class="fa-solid fa-check"></i></a></td>
                                        <td  data-label = "action"><a href="#" class="status2"><i class="fa-solid fa-trash"></i></a></td>
                                    </div>
                                </tr>
                                <?php
                              }}
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









//popup login
    function viewPopup(appoinment_id){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
        document.querySelector('input[name="appoinment_id"]').value = appoinment_id;
    }

    function closeviewPopup(){
        var blur = document.getElementById('blur');
        blur.classList.remove('active');
        var popup = document.getElementById('popup');
        popup.classList.remove('active');
    }


//blur 



    </script>

     <!-- Make new appoinment -->
     <div class="popup_form" id="popup_form">
        <div class="popup" id="popup"   style="margin-top: 150px">
            <div class="close-btn" onclick="closeviewPopup()">&times;</div>
            <div class="form">
                <h2>Remark</h2>
                    <form action="" method="POST">
                    <div class="form-element">
                        <input type="hidden" name="appoinment_id" id="appoinment_id" readonly>
                    </div>
                    <div class="form-element">
                        <label for="cause" >Cause</label>
                        <input type="text" name="cause" placeholder="reason">
                    </div>
                    <div class="form-element">
                        <label for="regno" >Prescription Details</label>
                        <textarea rows='15' name='prescription'></textarea>
                    </div>
                    <div class="form-element">
                    <button type="submit" name='prescription_submit'>Submit</button>
                    </div>
                </form>


            </div>
        </div>
        </div>
        <!-- Make new appoinment end -->
</body>
  
</html>