<?php
// UC7 :solve employeewage problem using class object method
//Calculate Wages till a condition of total working hours or days is reached for Calculate employee monthly wage
//Check Employee fulltime Present, part time present or absent
//calculate employee daily wage according to emp attendance

echo "**********Welcome to Employee Wage Computation Problem************\n";
class EmployeeWage
{

public $WORKING_HOURS_PER_MONTH = 100;
public $WORKING_DAY_PER_MONTH = 20;
public $EMPWAGE_PER_HOUR = 20;
public $EMP_HOURS;
public $TOTAL_EMP_HOURS = 0;
public $EmpMonthlyWage = 0;
public $TOTAL_WORKING_DAY = 1;
 
         public function MonthlyWage(){
          while($this->TOTAL_WORKING_DAY <= $this->WORKING_DAY_PER_MONTH && $this->TOTAL_EMP_HOURS <= $this->WORKING_HOURS_PER_MONTH)
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
     $this->TOTAL_EMP_HOURS += $EMP_HOURS;
     $this->TOTAL_WORKING_DAY ++ ;
 
     $EmpDailyWage = $EMP_HOURS * $this->EMPWAGE_PER_HOUR;

       $this->EmpMonthlyWage += $EmpDailyWage;
          }
          echo "Employee Monthly Wage is : $this->EmpMonthlyWage \n";
       }
}

$EmpWage = new EmployeeWage();
$EmpWage->MonthlyWage();
?>

