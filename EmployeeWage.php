<?php
// UC1 : Program for Employee Attendence 
 //Check Employee Present or not
 
       echo "**********Welcome to Employee Wage Computation Problem************";

class EmployeeWage
{

    function Attendance()//function to check employee is present or not
    {
        $empCheck = rand(0, 1);//function to generate random number 0 or 1 for Attendance
        if ($empCheck == 1) {
            echo "\nEmployee is present";
        } else {
            echo "\nEmployee is absent";
        }
    }
}
//creating object of class
$empWage = new EmployeeWage();
$empWage->Attendance();
?>