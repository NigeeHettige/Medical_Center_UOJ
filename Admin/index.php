<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Center</title>
    <link rel="stylesheet" href="../Doctor/main.css?=<?php echo time() ?>">
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
                <a href="login.php">
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
        <!--  manin ends -->
           <div class="dashboard" id="dashboard"  style="min-height: 100vh;">
                <!-- Dashboard start -->
                <!-- cards -->
                <div class="cardBox">
                    <div class="card1">
                        <div>
                            <div class="numbers">1</div>
                            <div class="cardName">Doctors</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                    </div>
    
    
                    <div class="card2">
                        <div>
                            <div class="numbers" >23</div>
                            <div class="cardName">Users</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>
    
    
                    <div class="card3" id="date">
                        <div>
                            <div class="numbers" >12</div>
                            <div class="cardName">Today's Appoinments</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-house"></i>
                        </div>
                    </div>
    
    
                   
                    
                </div>
    
                <!-- Appoinment details --> 
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Today's  Appoinments</h2>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Registration number</td>
                                    <td>Name</td>
                                    <td>Time</td>
                                    <td>Doctor</td>
                                    
                                </tr>
                            </thead>
    
                            <tbody>
                                <tr>
                                    <td  data-label = "regNo">2020/CCS/068</td>
                                    <td  data-label = "name">Peshali Perera</td>
                                    <td  data-label = "time">10.30am</td>
                                    <td  data-label = "name">Doc Name</td>
                                   
                                </tr>
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


    // document.addEventListener("DOMContentLoaded",function(){
    //     const card2 = document.querySelector('.card2');
    //     const statusElement = card2.querySelector('.numbers');
    //     const status = statusElement.textContent.toLocaleLowerCase();
        

    //     if(status === 'active'){
    //         card2.classList.add('active');
    //         card2.style.backgroundColor = "rgb(95, 255, 164)";
            
    //     }else{
    //         card2.classList.add('deactive');
    //         card2.style.backgroundColor = "rgb(255, 95, 95";
    //     }

    
    // });


    
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