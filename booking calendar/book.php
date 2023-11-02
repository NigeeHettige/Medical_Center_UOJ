<?php 
include('..\connection.php');
session_start();

if(!isset($_SESSION['reg_num'])){
    header("location ..\User\login\login.php");
}

if(isset($_GET['date'])){
    $date = $_GET['date'];

        $bookings = array(); 
        //print_r($bookings);
        $query = "SELECT time_slot FROM bookings WHERE date=?";
        $statement = mysqli_prepare($connection,$query);
    
        mysqli_stmt_bind_param($statement,"s",$date);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $numOfrows = mysqli_num_rows($result);
       
       if($numOfrows> 0){
            while($row = mysqli_fetch_assoc($result)){
                $convertedTime = timeslotConvert($row['time_slot']);
                $bookings[] = $convertedTime;
                //$bookings[] = $row['time_slot'];
            }
       }
       //print_r($bookings);
}

function timeSlotConvert($rowValue){
    $startTimeString = $rowValue;

    // Assume a 10-minute duration
    $duration = new DateInterval('PT10M');

    // Parse the start time string
    $startTime = DateTime::createFromFormat('H:i:s.u', $startTimeString);

    // Calculate the end time
    $endTime = clone $startTime;
    $endTime->add($duration);

    // Format the times to the desired format
    $timeRange = $startTime->format('h:iA') . '-' . $endTime->format('h:iA');

    return $timeRange; 
}

function setValue($name){
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}

if(isset($_POST['submit'])){
    $date = $_GET['date'];
    $timeslot = $_POST['timeslot'];
    $doctor_name = $_POST['doctor'];

    $query = "SELECT * FROM bookings WHERE date= ? AND time_slot= ?";
    $statement = mysqli_prepare($connection,$query);
    
    mysqli_stmt_bind_param($statement,"ss",$date,$timeslot);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    if (!$result) {
        die('Error in prepared statement: ' . mysqli_error($connection));
    }
    $numOfrows = mysqli_num_rows($result);
    
   if($numOfrows > 0){
    $msg = "<div class = 'alert alert-danger'>
               Already Booked
            </div>";
   }else{
        $username = $_SESSION["username"];
        $email = $_SESSION['email'];
        $reg_number = $_SESSION['reg_num'];
   
        $query1 = "INSERT INTO bookings(name,reg_number,email,date,time_slot,doctor) VALUES('$username','$reg_number','$email','$date','$timeslot','$doctor_name')";
        $result1 = mysqli_query($connection,$query1);
        if($result1){
            $msg = "<div class = 'alert alert-success'>
                        Booking Successfull
                    </div>";
            $bookings[] = $timeslot;
        }
   }
}

$duration = 10;
$cleanup = 0;
$start = "09:00";
$end = "15:00";

function timeslots($duration,$cleanup,$start,$end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start; $intStart < $end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone$intStart;
        $endPeriod->add($interval);
        if($endPeriod > $end){
            break;
        }

        $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
    }

    return $slots;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1 class="text-center">Book for Date:<?php echo date('m/d/Y',strtotime($date));?></h1>
        <div class="row">
            <div class="col-md-12">
            <?php
                    if(isset($msg)){
                        echo $msg;
                    }
                
                ?> 
            </div> 
                 
               
            <?php
                $timeslots = timeslots($duration,$cleanup,$start,$end);
                //print_r($timeslots);
                foreach($timeslots as $ts){
                
            ?>
            <div class ="col-md-2">
                <div class="form-group">
                    <?php if(in_array($ts,$bookings)){ ?>
                        <button class="btn btn-danger" >
                            <?php echo $ts;?>
                        </button>
                    <?php }else{ ?>
                        <button class="btn btn-success book" data-timeslot ="<?php echo $ts;?>">
                            <?php echo $ts;?>
                        </button>
                    <?php } ?>
                   
                </div>
            </div>

            <?php } ?>
        </div>

        
        
    </div>


     <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

<!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Booking:<span id ='slot'></span></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action ="" method ="POST">
                            <div class="form-group">
                                <label for="">Timeslot:</label>
                                <input required  type="text" readonly name ="timeslot" id ="timeslot" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Doctor</label>
                                <select name='doctor' class="form-control">
                                    <option value="Dr.Mrs. J. Sriskandarajah">Dr.Mrs. J. Sriskandarajah</option>
                                    <option value="Dr. J. Lawrence">Dr. J. Lawrence</option>
                                </select>
                               
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Name</label>
                                <input required type="text"  name ="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input required type="email"  name ="email" class="form-control">
                            </div> -->
                            <div class="form-group pull-right">
                                
                                <input  type="submit"  name ="submit" class="btn btn-primary" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384Tx51Qib027qvyjSMfHjOMaLkfuWVxZxUPnCJA712mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>

        $(".book").click(function(){
            var timeslot = $(this).attr('data-timeslot');
            $("#slot").html(timeslot);
            $("#timeslot").val(timeslot);
            $("#myModal").modal("show");
        })
    </script>
    
</body>
</html>