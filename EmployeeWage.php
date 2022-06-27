<?php
// UC3 : Check Employee fulltime Present, part time present or absent
//calculate employee daily wage according to emp attendance
       echo "**********Welcome to Employee Wage Computation Problem************\n";

       $IS_FULLTIME_PRESENT = 1;
       $IS_PARTTIME_PRESENT = 2;
       $EMPWAGE_PER_HOUR = 20;
       $EMP_HOURS;
        
       $Num = rand(0, 2);//function to generate random number 0 or 2 for Attendance
       if ($Num == $IS_FULLTIME_PRESENT ) {
          // echo "Employee is full time present\n";
           $EMP_HOURS = 8;
       }
       elseif($Num == $IS_PARTTIME_PRESENT){
              //echo "Employee is part time present\n";
              $EMP_HOURS = 4;
       }
        else {
           //echo "Employee is absent\n";
           $EMP_HOUR = 0;
        }
       $EmpDailyWage = $EMP_HOURS * $EMPWAGE_PER_HOUR;
       echo "Employee Daily Wage is : $EmpDailyWage \n";

?>