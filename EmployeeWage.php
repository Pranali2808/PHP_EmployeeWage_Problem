<?php
// UC2 : Check Employee Present or not
//calculate employee daily wage according to emp attendance
       echo "**********Welcome to Employee Wage Computation Problem************\n";

       $IS_PRESENT = 1;
       $EMPWAGE_PER_HOUR = 20;
       $EMP_HOURS;
        
       $Num = rand(0, 1);//function to generate random number 0 or 1 for Attendance
       if ($Num == $IS_PRESENT ) {
           echo "Employee is present\n";
           $EMP_HOURS = 8;
           
       } else {
           echo "Employee is absent\n";
           $EMP_HOUR = 0;
           
       }
       $EmpDailyWage = $EMP_HOURS * $EMPWAGE_PER_HOUR;
       echo "Employee Daily Wage is : $EmpDailyWage \n";

?>