<?php
// UC8 :Calculate wage for multiple companies
//each company has its own wage ,working hours and days as per month
//solve employeewage problem using parameter instead of class variable
//Check Employee fulltime Present, part time present or absent
//calculate employee daily wage for getting monthlywage

echo "**********Welcome to Employee Wage Computation Problem************\n";
class EmployeeWage
{

public $EMP_HOURS;
public $IS_ABSENT = 0;
public $IS_FULLTIME = 1;
public $IS_PARTTIME = 2;
 
          public function EmpWageMonthly($Company_Name, $MAX_WORKING_HOURS_PER_MONTH,$MAX_WORKING_DAY_PER_MONTH,$EMPWAGE_PER_HOUR)
          {
               $TOTAL_EMP_HOURS = 0;
                $EmpMonthlyWage = 0;
                $TOTAL_WORKING_DAY = 0;  
          while($TOTAL_WORKING_DAY <= $MAX_WORKING_DAY_PER_MONTH && $TOTAL_EMP_HOURS <= $MAX_WORKING_HOURS_PER_MONTH)
          {

            $Num = rand(0, 2);//function to generate random number 0 or 2 for Attendance
             switch($Num){
      case  $this->IS_FULLTIME :
             $EMP_HOURS = 8;
             break;
      case  $this->IS_PARTTIME :
             $EMP_HOURS = 4;
             break;

      default :
             $EMP_HOURS = 0;
        }
            $TOTAL_WORKING_DAY ++ ;
            $TOTAL_EMP_HOURS += $EMP_HOURS;
    
         $EmpDailyWage = $EMP_HOURS * $EMPWAGE_PER_HOUR;

          $EmpMonthlyWage += $EmpDailyWage;
          }
          echo "Employee Monthly Wage for $Company_Name is : $EmpMonthlyWage \n";
       }
}

$EmpWage = new EmployeeWage();
$EmpWage->EmpWageMonthly("BMW",80,23,30);
$EmpWage->EmpWageMonthly("TATA",85,25,25);
$EmpWage->EmpWageMonthly("BIRLA",90,22,35);
?>