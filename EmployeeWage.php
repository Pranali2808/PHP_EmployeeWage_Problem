<?php
// UC6 : Calculate Wages till a condition of total working hours or days is reached for Calculate employee monthly wage
//Check Employee fulltime Present, part time present or absent
//calculate employee daily wage according to emp attendance
echo "**********Welcome to Employee Wage Computation Problem************\n";
$MAX_WORKING_HOURS_PER_MONTH = 100;
$MAX_WORKING_DAY_PER_MONTH = 20;
$EMPWAGE_PER_HOUR = 20;
$EMP_HOURS;
$TOTAL_EMP_HOURS = 0;
$EmpMonthlyWage = 0;
$TOTAL_WORKING_DAY = 0;

          while($TOTAL_WORKING_DAY <= $MAX_WORKING_DAY_PER_MONTH && $TOTAL_EMP_HOURS <= $MAX_WORKING_HOURS_PER_MONTH)
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
     $TOTAL_EMP_HOURS += $EMP_HOURS;
     $TOTAL_WORKING_DAY ++ ;
 
     $EmpDailyWage = $EMP_HOURS * $EMPWAGE_PER_HOUR;

       $EmpMonthlyWage += $EmpDailyWage;

}

echo "Employee Monthly Wage is : $EmpMonthlyWage \n";


?>

