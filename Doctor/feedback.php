<?php 

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Center</title>
    <link rel="stylesheet" href="../CSS/feedback.css">
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
                    <span class="icon">Schedule</span>
                </a>
               </li> 


               <!-- <li>
                <a href="user_prof.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title"></span>
                    <span class="icon">User Profile</span>
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


            <!-- Feedback section starts -->
            <section class="Feedback"id="feedback">
                <div class="feedback_form" >
                    <div class="feedback" >
                        
                        <div class="form">
                            <h2>Drop us a Feedback</h2>
            
                            <div class="form-element" id="star">
                                <div class="container_rate">
                                    <div class="star-widget">
                                        <input type="radio" name="rate" id="rate-5">
                                        <label for="rate-5" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-4">
                                        <label for="rate-4" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-3">
                                        <label for="rate-3" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-2">
                                        <label for="rate-2" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-1">
                                        <label for="rate-1" class="fas fa-star"></label>
                            
                                        <h6></h6>
                                    </div>
                                </div>
                           </div>
                            
                            <div class="form-element">
                                <label for="regno" >Email</label>
                                <input type="email" placeholder="Your Email">
                             </div>

                            <div class="form-element">
                                <label for="regno" >Overall Experience </label>
                                <textarea name="" id="" cols="30" rows="3"></textarea>
                               
                            </div>
                            <div class="form-element">
                                <label for="regno" >Staff Interaction and Communication</label>
                                 <textarea name="" id="" cols="30" rows="3"></textarea>
                               
                            </div>
                            <div class="form-element">
                                <label for="regno" >Quality of Medical Treatment</label>
                                <textarea name="" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-element">
                                <label for="regno" >Likelihood to Recommend</label>
                                <textarea name="" id="" cols="30" rows="3"></textarea>
                            </div>
                            
                            
                           
                          


                            <div class="form-element feedback-special">
                                <center><button type="submit" id="feedback-btn">Submit</button></center>
                            </div>
                         
            
                        </div>
                    </div>
                </div>
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