<?php
// UC5 : Calculate employee monthly wage
//Check Employee fulltime Present, part time present or absent
//calculate employee daily wage according to emp attendance
       echo "**********Welcome to Employee Wage Computation Problem************\n";

       $WORKING_DAY_PER_MONTH = 20;
       $EMPWAGE_PER_HOUR = 20;
       $EMP_HOURS;
       $EmpMonthlyWage = 0;
      
       for($i=1 ; $i <= $WORKING_DAY_PER_MONTH; $i++)
       {
       
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
        $EmpDailyWage = $EMP_HOURS * $EMPWAGE_PER_HOUR;
      
        $EmpMonthlyWage += $EmpDailyWage;
      
    }
    echo "Employee Monthly Wage is : $EmpMonthlyWage \n";

?>