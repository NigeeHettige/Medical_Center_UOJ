<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="../CSS/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    
    <div class="wrapper">
        <div class="header">
            <ul>
                <li class="active form_1_progessbar">
                    <div>
                        <p>1</p>
                    </div>
                </li>
                <li class=" form_2_progessbar">
                    <div>
                        <p>2</p>
                    </div>
                </li>
                <li class=" form_3_progessbar">
                    <div>
                        <p>3</p>
                    </div>
                </li>
                <li class="form_4_progessbar">
                    <div>
                        <p>4</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form_wrap">
            
            <div class="form_1 data_info">
                
                <h2>Signup Info</h2>
                
                <form action="">
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="regno">Registration Number</label>
                            <input type="text" id="form1_input1" value="" required >
                        </div>
                        <div class="input_wrap">
                            <label for="faculty">Faculty</label>
                            <input type="text" id="form1_input2" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="dep">Department</label>
                            <input type="text" id="form1_input3" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="email">Email</label>
                            <input type="email" id="form1_input4" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="password">Password</label>
                            <input type="password" id="form1_input5" value="" required>
                        </div>
                    </div>
                
                </form>
            </div>


            <div class="form_2 data_info" style="display: none;">
                
                <h2>Personal Info</h2>
                
                <form action="">
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="name">Full Name</label>
                            <input type="text" id="form2_input1" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="namei">Name with initials</label>
                            <input type="text" id="form2_input2" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="dep">NIC number</label>
                            <input type="text" id="form2_input3" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="address">Residential Address</label>
                            <input type="text" id="form2_input4" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="paddress">Permanent Address</label>
                            <input type="text" id="form2_input5" value="" required>
                        </div>
                    </div>
                
                </form>
            </div>

            <div class="form_3 data_info" style="display: none;">
                
                <h2>Personal Info</h2>
                
                <form action="">
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="dob">Date of Birth</label>
                            <input type="text" id="form3_input1" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="gender">Gender</label>
                            <input type="text" id="form3_input2" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="mstat">Martial Status</label>
                            <input type="text" id="form3_input3" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="tele">Mobile number</label>
                            <input type="tel" id="form3_input4" value="" required>
                        </div>
                        <div class="input_wrap">
                            <label for="school">Last School Attended</label>
                            <input type="text" id="form3_input5" value="" required>
                        </div>
                    </div>
                
                </form>
            </div>

            <div class="form_4 data_info" style="display: none;">
                
                <h2>Personal Info</h2>
                
                <form action="">
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="height">Height</label>
                            <input type="text" value="" required id="form4_input1">
                        </div>
                        <div class="input_wrap">
                            <label for="weight">Weight</label>
                            <input type="text"  value="" required id="form4_input2">
                        </div>
                        <div class="input_wrap">
                            <label for="guardian">Guardian Name</label>
                            <input type="text"  value="" required id="form4_input3">
                        </div>
                        <div class="input_wrap">
                            <label for="relation">Relation</label>
                            <input type="text"  value="" required id="form4_input4">
                        </div>
                        <div class="input_wrap">
                            <label for="school">Contact number</label>
                            <input type="tel"  value="" required id="form4_input5">
                        </div>
                    </div>
                
                </form>
            </div>

        </div>
        <div class="btns_wrap">
            <div class="common_btns form_1_btns">
                <button type="submit" class="btn_next">Next
                    <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                </button>
            </div>
            <div class="common_btns form_2_btns" style="display: none;">
                <button type="button" class="btn_back" >
                    <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    Back
                </button>
                <button type="submit" class="btn_next">Next
                    <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                </button>
            </div>
            <div class="common_btns form_3_btns" style="display: none;">
                <button type="button" class="btn_back"> 
                    <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    Back
                </button>
                <button type="submit" class="btn_next">Next
                    <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                </button>
            </div>
            <div class="common_btns form_4_btns" style="display: none;">
                <button type="button" class="btn_back"> 
                    <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    Back
                </button>
                
                <button type="submit" class="btn_done">Done
                    <span class="icon"></span>
                </button>
            </div>
        </div>
    </div>


    <div class="modal_wrapper">
        <div class="shadow"></div>
        <div class="success_wrapper">
            <span class="modal_icon">
                <ion-icon name="checkmark-outline"></ion-icon>
            </span>
            <p>You have successfully completed the registration.</p>
        </div>
    </div>
   
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>