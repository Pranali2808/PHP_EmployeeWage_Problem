<?php
// UC5 : Calculate employee monthly wage
//Use Switch Case statement
//Check Employee fulltime Present, part time present or absent
//calculate employee daily wage according to emp attendance
       echo "**********Welcome to Employee Wage Computation Problem************\n";

       $EMPWAGE_PER_HOUR = 20;
       $EMP_HOURS;
       $MAX_WORKING_DAYS_PER_MONTH = 20;
       $TOTAL_WORKING_DAYS = 0;
       $EMP_MONTHLYWAGE = 0;
        
       while($TOTAL_WORKING_DAYS <= $MAX_WORKING_DAYS_PER_MONTH){
       $Num = rand(0, 2);//function to generate random number 0 or 2 for Attendance
       switch($Num){
        case 0 :
            //echo "Employee full time present";
            $EMP_HOURS = 8;
            break;
        case 1 :
           // echo "Employee Part time present";
            $EMP_HOURS = 4;
            break;
        default :
            //echo "Employee is absent";
            $EMP_HOURS = 0;
            break;
        }
        $TOTAL_WORKING_DAYS++;
       $EmpDailyWage = $EMP_HOURS * $EMPWAGE_PER_HOUR;
       $EMP_MONTHLYWAGE += $EmpDailyWage;
    }
    echo "Employee monthly wage is : $EMP_MONTHLYWAGE";
?>

