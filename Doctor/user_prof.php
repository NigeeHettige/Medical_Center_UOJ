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


               <li>
                <a href="feedback.php">
                    <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">Feedback</span>
                </a>
               </li> 


               <li>
                <a href="user_prof.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">User Profile</span>
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
                    <h1 class="welcome"> Welcome <span class="wel_us">Peshali!</span></h1>
                 <!-- user Image -->
                 <div class="user">
                    <img src="images/user.jpg" alt="">
                 </div>

            </div>
        <!--  manin ends -->

        <!-- User Profile section starts -->
        <section class="UserDetails" style="min-height: 100vh;">
                <div class="feedback_form" id="user_prof" style="min-height: 100vh;">
                    <div class="feedback" >
                        
                        <div class="form">
                            <h2>Profile</h2>
            
                            <div class="form-element">
                                <label for="regno" >Registration Number</label>
                                <input type="text"  value="2020/CSC/034" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >NIC Number</label>
                                <input type="text" value="20031345678" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Faculty</label>
                                <input type="text" value="Faculty of Science" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Department</label>
                                <input type="text" value="Department of Computer Science" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Full Name</label>
                                <input type="text" value="Peshali Perera" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Name with Initials</label>
                                <input type="text" value="K.W.P.Perera" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Residential Address</label>
                                <input type="text" value="100/3,K.K.S.Road,Jaffna" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Permenanant Address</label>
                                <input type="text" value="100/3,K.K.S.Road,Jaffna" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Date of Birth</label>
                                <input type="text" value="09/06/2003" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Gender</label>
                                <input type="text" value="Female" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Martial Status</label>
                                <input type="text" value="Single" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Telephone Number</label>
                                <input type="tel" value="0711234567" disabled>
                            </div>

                            

                            <div class="form-element">
                                <label for="regno" >Email</label>
                                <input type="email" value="abc@gmail.com" disabled>
                            </div>
                            
                            <div class="form-element">
                                <label for="regno" >Last school attended</label>
                                <input type="text" value="Sumana Balika Vidyalaya" disabled>
                            </div>
                            <div class="form-element">
                                <label for="regno" >Height</label>
                                <input type="text" value="5'4" disabled>
                            </div>

                            <div class="form-element">
                                <label for="regno" >Weight</label>
                                <input type="text" value="62kg" disabled>
                            </div>
                            <div class="form-element">
                                <label for="regno" >Weight</label>
                                <input type="text" value="62kg" disabled>
                            </div>
                            <!-- <div class="form-element">
                                <label for="regno" >Change Pasword</label>
                                <input type="password" placeholder="New Password">
                            </div> -->
                            
            
            
                        </div>
                    </div>
                </div>

        </section>
        <!-- User Profile section ends -->


          

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