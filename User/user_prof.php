<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Center</title>
    <link rel="stylesheet" href="main.css?=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="user_prof1/user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

</head>
<body>
    <div class="container5" style="position: fixed; left: 0px; top: 0px" id="blur">
        <div class="navigation">
            <ul class="custom-ul">
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
                <a href="user_prof.php">
                    <span class="icon1"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title1"></span>
                    <span class="icon1">User Profile</span>
                </a>
               </li> 


               <li>
                <a href="login/login.php">
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
                    <h1 class="welcome"> Welcome <span class="wel_us">Peshali!</span></h1>
                 <!-- user Image -->
                 <div class="user">
                    <img src="images/user.jpg" alt="">
                 </div>

            </div>
        <!--  manin ends -->

        <!-- User Profile section starts -->
        <section class="UserDetails" style="min-height: 100vh;">
            <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Upload</span></div><br>
                    <span class="font-weight-bold">User name</span><span class="text-black-50">abc@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Registration Number</label><input type="text" class="form-control" placeholder="registration number" value="" readonly></div>
                            <div class="col-md-6"><label class="labels">NIC Number</label><input type="text" class="form-control" placeholder="nic number" value="" readonly></div>
                            <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="phone number" value=""></div>
                            <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="gender" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Residential Adrress</label><input type="text" class="form-control" value="" placeholder="enter residential address"></div>
                            <div class="col-md-12"><label class="labels">Permanant Address</label><input type="text" class="form-control" placeholder="enter permanant address " value=""></div>
                            <div class="col-md-12"><label class="labels">Faculty</label><input type="text" class="form-control" placeholder="enter faculty" value=""></div>
                            <div class="col-md-12"><label class="labels">Department</label><input type="text" class="form-control" placeholder="enter department" value=""></div>
                            <div class="col-md-12"><label class="labels">Date of Birth</label><input type="text" class="form-control" placeholder="enter date of birth" value=""></div>
                            <div class="col-md-12"><label class="labels">Martial State</label><input type="text" class="form-control" placeholder="enter martial state" value=""></div>
                            <div class="col-md-12"><label class="labels">Guardian Name</label><input type="text" class="form-control" placeholder="enter guardian name" value=""></div>
                            <div class="col-md-12"><label class="labels">Realtion</label><input type="text" class="form-control" placeholder="enter relation" value=""></div>
                            <div class="col-md-12"><label class="labels">Contact Number</label><input type="text" class="form-control" placeholder="emergency contact number" value=""></div>

                        
                        
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Height</label><input type="text" class="form-control" placeholder="height" value=""></div>
                            <div class="col-md-6"><label class="labels">Weight</label><input type="text" class="form-control" value="" placeholder="weight"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Update Profile</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>More Information</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Details</span></div><br>
                        <div class="col-md-12"><label class="labels">Blood Group</label><input type="text" class="form-control" placeholder="blood group" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Last School Attend</label><input type="text" class="form-control" placeholder="last school attend" value=""></div>
                    </div>
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Change Password</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Change</span></div><br>
                        <div class="col-md-12"><label class="labels">Current Password</label><input type="password" class="form-control"  value=""></div> <br>
                        <div class="col-md-12"><label class="labels">New Password</label><input type="password" class="form-control"  value=""></div>
                    </div>
                </div>
            </div>
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