<?php
// UC1 : Program for Employee Attendence 
 //Check Employee Present or not
 
       echo "**********Welcome to Employee Wage Computation Problem************\n";

         $IS_PRESENT = 1;
        
        $Num = rand(0, 1);//function to generate random number 0 or 1 for Attendance
        if ($Num == $IS_PRESENT ) {
            echo "Employee is present\n";
            
        } else {
            echo "Employee is absent\n";
            
        }
    
?>