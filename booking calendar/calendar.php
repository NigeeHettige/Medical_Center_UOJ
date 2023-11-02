<?php

    include('..\connection.php');
    
    
    function build_calender($month,$year){
        include('..\connection.php');

        

        //  array containing names of all days in week
        $daysOfWeek = array('Monday','Tuesday','Wednesday','Thursday','Friday','Staurday','Sunday');

        // get first day as argument
        $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

        // numbers of days in month
        $numberDays = date("t",$firstDayOfMonth);

        // info about first day of month
        $dateComponents = getdate($firstDayOfMonth);

        // name of the month
        $monthName = $dateComponents['month'];

        // getting index values of this month
        $dayOfWeek = $dateComponents['wday'];
        if($dayOfWeek == 0){
            $dayOfWeek = 6;
        }else{
            $dayOfWeek = $dayOfWeek-1;
        }
        //getting current date
        $dateToday = date('Y-m-d');

        // create html table

        $calender = "<table class = 'table table-bordered'>
                        <center>
                            <h2>$monthName $year</h2>"; 
       
        $calender.= "<a class='btn btn-xs btn-primary month' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    
        $calender.= " <a class='btn btn-xs btn-primary month' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
        
        $calender.= "<a class='btn btn-xs btn-primary month' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
        
        
        $calender.= "<tr>";


        //creating calender headers
        foreach($daysOfWeek as $day){
            $calender.= "<th class = 'header'>$day</th>";
        }

        $calender.= "</tr><tr>";

        //$daysOfWeek ensure only 7 columns in our table
        if($dayOfWeek > 0 ) {
            for($k = 0; $k < $dayOfWeek; $k++ ){
                $calender.= "<td></td>";
            }
        }

        //initialize the day counter
        $currentDay = 1;

        //Getting the month number
        $month = str_pad($month,2,"0",STR_PAD_LEFT);
        
        while($currentDay <= $numberDays){

            //if seventh column sturday reach.start new row
            if($dayOfWeek == 7) {
                $dayOfWeek = 0;
                $calender.= "</tr><tr>";
            }

            $currentDayRel = str_pad($currentDay,2,"0",STR_PAD_LEFT);
            $date = "$year-$month-$currentDayRel";

            $dayName = strtolower(date('l',strtotime($date)));
            $eventNum = 0;
            $today = $date == date('Y-m-d')?"today": "";

            if($date < date('Y-m-d')){
                $calender .= "<td><h4>$currentDay</h4><button class= 'btn btn-danger btn-xs'>N/A</button>";
            }
            else{
            
                $totalbookings = checkSlots($connection,$date);
                if($totalbookings == 36){
                    $calender .= "<td class ='$today'><h4>$currentDay</h4><a class= 'btn btn-danger btn-xs' href= '#'>All Booked</a>";
                }else{
                    $availableslots = 36-$totalbookings;
                    $calender .= "<td class ='$today'><h4>$currentDay</h4><a target='_blank' class= 'btn btn-success btn-xs' href= 'book.php?date=".$date."'>Book</a><small><i >$availableslots slots left</i></small>";
                }
                
            }    
                
                
            



            
            $calender.= "</td>";

            //increment the counters
            $currentDay++;
            $dayOfWeek++;
        }

        //complete the row of the last week of month
        if($dayOfWeek != 7){
            $remainingDays = 7-$dayOfWeek;
            for($i = 0; $i < $remainingDays; $i++){
                $calender.= "<td></td>";
            }
        }
       
        $calender.= "</tr> 
                    </table>";
               
        
        return $calender;
                        
                       
    }

    function checkSlots($mysqli,$date){
        $totalbookings = 0; 
       


        $query = "SELECT * FROM bookings WHERE date=?";
        include('..\connection.php');
        $statement = mysqli_prepare($connection,$query);
    
        mysqli_stmt_bind_param($statement,"s",$date);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $numOfrows = mysqli_num_rows($result);
       
       if($numOfrows> 0){
            while($row = mysqli_fetch_assoc($result)){
                $totalbookings++;
            }


       }

       return $totalbookings;
    }
    
    
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    

    <style>
        .today{
            background: yellow;
        }
    </style>
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    $dateComponents = getdate();
                    if(isset($_GET['month']) && isset($_GET['year'])){
                        $month = $_GET['month'];
                        $year = $_GET['year'];
                    }else{
                        $month = $dateComponents['mon'];
                        $year = $dateComponents['year'];
                    }

                   
                    echo build_calender($month,$year);
                ?>
            </div>
        </div>
     </div>
    
</body>
</html>