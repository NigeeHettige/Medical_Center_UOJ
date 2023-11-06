<?php

function setValue($name){
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UOJ Medical Center</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css?=<?php echo time() ?>">

</head>
<body>

    
<!-- header section starts -->
    
    <header class="header">
       
        <!-- <a href="#" class ="logo"><i class="fa-solid fa-house-medical"></i>&nbsp;HealthCenter</a> -->
        <a href="#" class ="logo"><img src="images/uoj_logo.png" alt=""></a>
        
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#doctors">Staff</a>
            <!-- <a href="#appoinment">Book</a> -->
            <div class="user">

          <div  class="signup">
              <a href="user\signup\signup.php">Signup</a>
              </div>
                <div class="login">
                    <a href="user\login_check.php" >Login</a>
                </div>
               
            </div>
            

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
       

    </header>

<!-- header section ends -->



<!-- home section start -->

    <section  id="home">
        <div class="home">

            <div class="content">
                <h1>University of Jaffna</h1>
                <h3>Health Center</h3>
                <a href="user\login\login.php" class="btn-book"> Book now<span class="fas fa-chevron-right" id="book"></span></a>
            </div>
        </div>  
    

    </section>





<!-- home section end -->


<!-- icons section starts -->

<section class="icons-container">
    
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>2+</h3>
        <p>doctors at work</p>
    </div>

    
    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>13+</h3>
        <p>staff at work</p>
    </div>

    
   
    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>2+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>6+</h3>
        <p>available hours</p>
    </div>




</section>

<!-- icons section end -->

<!-- services section starts -->

<section class="services" id="services">
    <h1 class="heading">our <span>services</span></h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Medical tratment</h3>
            <p>Conducting of medical examinations & Treatments</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fa-solid fa-syringe"></i>
            <h3>Vaccination</h3>
            <p>Administering of vaccinations on a needs basis</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Counseling</h3>
            <p>Medical counseling</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>free medicine</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fa-solid fa-vial"></i>
            <h3>Laboratory</h3>
            <p>Basic Laboratory Investigation</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fa-solid fa-user"></i>
            <h3>Advice</h3>
            <p>Advice & Counseling</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fa-solid fa-file-lines"></i>
            <h3>Medical Certificate</h3>
            <p>Issue Medical Certificates to staff and students on request</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-hospital"></i>
            <h3>Referral</h3>
            <p>Referral ( Teaching Hospital Jaffna)</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>
    </div>


</section>





<!-- services section ends -->


<!-- about section starts -->

<section class="about" id="about">

    <h1 class="heading"><span>about </span>us</h1>
    <div class="row">
        <div class="image">
            <img src="images/design 2_Artboard 1.png" alt="">
        </div>

        <div class="content">
            <h3>we take care of your <br>healthy life</h3>
            <p>The University Health Service was organized to help the students and Staff of the University to lead an active life free from disease. Initially, all registered University students were entitled to free consultations and laboratory services and the service was set up solely for the benefit of the student body. It was believed that timely treatment and care of even mild ailments could prevent the occurrence of more serious diseases, minimize the rate of absenteeism from classes and control the spread of infection to others.</p>
            
            <!-- <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a> -->
        </div>
    </div>



</section>





<!-- about section ends -->


<!-- staff section starts -->

<section class="doctors" id="doctors">

    <h1 class="heading">our<span> staff</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="images/doctor_fe.jpg" alt="">
            <h3>Dr.Mrs. J. Sriskandarajah</h3>
            <span>University Medical Officer</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="images/doc_ma.jpg" alt="">
            <h3>Dr. J. Lawrence</h3>
            <span>Asst. University Medical Officer</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="images/m_nurse.jpg" alt="">
            <h3>Mr.S.Selvaratnam</h3>
            <span>Technical Officer</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

       

        <div class="box">
            <img src="images/nurse.jpg" alt="">
            <h3>Mrs.R.Navitha</h3>
            <span>Nursing Officer Gr.II</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

            
        <div class="box">
            <img src="images/nurse.jpg" alt="">
            <h3>Mrs.A. Karthiga</h3>
            <span>Nursing Officer Gr.II</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
            
        </div>
        <div class="box">
            <img src="images/nurse.jpg" alt="">
            <h3>Miss. P. Kisiha</h3>
            <span>Nursing Officer Gr.II</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="images/nurse.jpg" alt="">
            <h3>Mrs.S.Vimalenthirnathan</h3>
            <span>Nursing Officer Gr.II</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="images/nurse.jpg" alt="">
            <h3>Mrs.G.Manoranjan</h3>
            <span>Pharmacist Upper Grade</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="images/nurse.jpg" alt="">
            <h3>Mrs.N. Surenthiran</h3>
            <span>Pharmacist Lower Grade</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="images/m_nurse.jpg" alt="">
            <h3>Mr.K.Sasikaran</h3>
            <span>Labourer</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="images/m_nurse.jpg" alt="">
            <h3>Mr.J. Dilakshan</h3>
            <span>Attendant (Male)</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="images/nurse.jpg" alt="">
            <h3>Miss.T. Sharmila</h3>
            <span>Attendant(Female)</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="images/m_nurse.jpg" alt="">
            <h3>Mr. A. Vijenthiran</h3>
            <span>Health Services Labourer Gr.II</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="images/m_nurse.jpg" alt="">
            <h3>Mr. K Thusyanthan</h3>
            <span>Health Services Labourer Gr.III</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="images/m_nurse.jpg" alt="">
            <h3>Mr. S. Savunthararajah</h3>
            <span>Public Health Inspector</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        </div>
    </div>






</section>



<!-- staff section ends -->



<!-- booking section starts -->

<!-- <section class="appoinment" id="appoinment">
    <h1 class="heading"><span>book</span> now</h1>
   
    <div class="row">
        <div class="image">
            <img src="images/design1.png" alt="">
        </div>

        <form action="" method="POST">

            <h3>book appoinment</h3>
            <input type="text" placeholder="registration number" class="box" name ="regno"value ="<?php setValue("regno") ?>">
            <input type="text" placeholder="your department" class="box" name ="dep"value ="<?php setValue("dep") ?>">
            <input type="text" placeholder="your batch" class="box" name ="batch"value ="<?php setValue("batch") ?>">
            <input type="text" placeholder = "your name" class ="box" name ="name"value ="<?php setValue("name") ?>">
            <input type="tel" placeholder = "your phone number" class ="box" name ="phone"value ="<?php setValue("phone") ?>">
            <input type="email" placeholder = "your email" class ="box" name ="email"value ="<?php setValue("email") ?>">
            <input type="date"  class ="box" name ="date"value ="<?php setValue("date") ?>">
            <select name="time" id="time" class="box" name="time" value ="<?php setValue("time") ?>">
                <option value="">9.00am</option>
                <option value="">9.30am </option>
                <option value="">10.00am</option>
                <option value="">10.30am</option>
                <option value="">11.00am</option>
                <option value="">11.30am</option>
                <option value="">1.00am</option>
                <option value="">1.30pm</option>
            </select>
            <input type="submit" value="book now" class ="btn">




        </form>

    </div>

</section> -->

<!-- booking section ends -->


<!-- footer section starts -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>home</a>
            <a href="#"><i class="fas fa-chevron-right"></i>services</a>
            <a href="#"><i class="fas fa-chevron-right"></i>about</a>
            <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#"><i class="fas fa-chevron-right"></i>book</a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>Medical Treatments</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Vaccinations</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Counseling</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Laboratory Investigation</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Advice & Counseling</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Medical Certificates</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Referral</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>011-1234567</a>
            <a href="#"><i class="fas fa-phone"></i>011-1234567</a>
            <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
            <a href="#"><i class="fas fa-envelope"></i>bcd@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>PO Box 57,Thirunelvely,Jaffna.Sri Lanka</a>
            
           
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            

           
        </div>
    </div>

    <div class="credit">created by <span>Group1</span> | all rights reserved</div>
</section>
<!-- footer section ends -->












<script src="https://code.jquery.com/jquery-3.6.0.min.js">

$(document).ready(function() {
    $('#time').change(function() {
        // Remove the 'selected' class from all options
        $('#time option').removeClass('selected');

        // Add the 'selected' class to the chosen option
        $(this).find(':selected').addClass('selected');
    });
});
</script>

    
</body>
</html>