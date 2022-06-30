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
public $TOTAL_EMP_HOURS = 0;
public $EmpMonthlyWage = 0;
public $TOTAL_WORKING_DAY = 0;
 
          function EmpWageMonthly($Company_Name, $MAX_WORKING_HOURS_PER_MONTH,$MAX_WORKING_DAY_PER_MONTH,$EMPWAGE_PER_HOUR)
          {
          while($this->TOTAL_WORKING_DAY <= $MAX_WORKING_DAY_PER_MONTH && $this->TOTAL_EMP_HOURS <= $MAX_WORKING_HOURS_PER_MONTH)
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
            $this->TOTAL_WORKING_DAY ++ ;
            $this->TOTAL_EMP_HOURS += $EMP_HOURS;
    
         $EmpDailyWage = $EMP_HOURS * $EMPWAGE_PER_HOUR;

          $this->EmpMonthlyWage += $EmpDailyWage;
          }
          echo "Employee Monthly Wage for $Company_Name is : $this->EmpMonthlyWage \n";
       }
}

$EmpWage = new EmployeeWage();
$EmpWage->EmpWageMonthly("BMW",80,23,30);
$EmpWage->EmpWageMonthly("TATA",85,25,25);
$EmpWage->EmpWageMonthly("BIRLA",90,22,35);
?>