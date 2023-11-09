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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remark</title>
    <link rel="stylesheet" href="appoinment.css?=<?php echo time() ?>">
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
                <a href="remark.php">
                    <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Remark</span>
                </a>
               </li> 


               <li>
               <a href="user_prof1/user.php" target="_blank">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">User Profile</span>
                </a>
               </li> 


               <li>
               <a href="index.php?action=signout">
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
                    <h1 class="welcome"> Welcome <span class="wel_us"><?php echo $_SESSION['username']?></span></h1>
                 <!-- user Image -->
                 <div class="user">
                    <img src="images/user.jpg" alt="">
                 </div>

            </div>
        <!--  manin ends -->


            <!-- Feedback section starts -->
            <section id="appoinment">
                
                <!-- <a href="..\booking calendar\calendar.php" class="status2" target="_blank">New Appoinment <ion-icon name="add-circle-outline"></ion-icon></a> -->
             
                <!-- current active appoinment  -->
                <div class="details3 details">
                    <div class="recentOrders1">
                        
                        <table>
                            <thead>
                                <tr>
                                    <td>Appoinment ID</td>
                                    <td>Date</td>
                                    <td>Doctor</td>
                                    <td>Cause</td>
                                    <td>Remark</td>
                                </tr>
                                
                            </thead>
                            
                            <tbody>
                            <?php
                                $regNo = $_SESSION['reg_num'];
                                
                                // $query = "SELECT * FROM bookings WHERE reg_number = '$regNo'  ORDER BY date,time_slot  DESC";
                                $query = "SELECT bookings.id, bookings.date, bookings.time_slot, bookings.cause,bookings.remark, doctor.dr_name
                                            FROM bookings
                                            INNER JOIN doctor ON bookings.dr_id = doctor.dr_id
                                            WHERE bookings.reg_number = '$regNo'
                                            AND bookings.status = 'done'
                                            ORDER BY bookings.date, bookings.time_slot DESC";
                                $result = mysqli_query($connection,$query);
                                if($result){
                                   
                                    while($row = mysqli_fetch_assoc($result)){
                                
                            
                            ?>
                                <tr>
                                    <td  data-label = "id"><?php if(isset($row)){echo $row['id'];} ?></td>
                                    <td  data-label = "id"><?php if(isset($row)){echo $row['date'];} ?></td>
                                    <td  data-label = "time"><?php if(isset($row)){echo $row['dr_name'];}?></td>
                                    <td  data-label = "docname"><?php if(isset($row)){echo $row['cause'];} ?></td>
                                    <td  data-label = "action"><a href="#" class="remark" onclick="viewPopup('<?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8')?>', '<?php echo htmlspecialchars($row['cause'], ENT_QUOTES, 'UTF-8')?>', '<?php echo htmlspecialchars($row['remark'], ENT_QUOTES, 'UTF-8')?>')"><i class="fa-solid fa-eye"></i></a></td>
                                    
                                </tr>
                               <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
                 <!-- current active appoinment end -->


                 
            </section>
            <!-- Feedback section ends -->


          

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
    function viewPopup(appoinment_id,cause,prescription){
        console.log('called');
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
        document.querySelector('input[name="appoinment_id"]').value = appoinment_id;
        document.querySelector('input[name="cause"]').value = cause;
        document.querySelector('textarea[name="prescription"]').value = prescription;
        console.log('end');
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
                        <input type="text" name="appoinment_id" id="appoinment_id" readonly>
                    </div>
                    <div class="form-element">
                        <label for="cause" >Cause</label>
                        <input type="text" name="cause" id="cause" readonly>
                    </div>
                    <div class="form-element">
                        <label for="regno" >Prescription Details</label>
                        <textarea rows='15' name="prescription" id="prescription" readonly></textarea>
                    </div>
                </form>


            </div>
        </div>
        </div>
        <!-- Make new appoinment end -->
</body>

</html>