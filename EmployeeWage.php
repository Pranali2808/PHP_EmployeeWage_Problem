<?php
/*UC9 : Ability to save the Total Wage for Each Company 
You can Create EmpWageBuilder for each Company
Use Instance Variable instead of function parameters */
echo "**********Welcome to Employee Wage Computation Problem************\n";
class EmployeeWageBuilder{
   
    public $MAX_WORKING_HOURS_PER_MONTH = 100;
    public $MAX_WORKING_DAY_PER_MONTH = 20;
    public $EMPWAGE_PER_HOUR = 20;
    public $EMP_HOURS;
    public $TOTAL_EMP_HOURS = 0;
    public $EmpMonthlyWage = 0;
    public $TOTAL_WORKING_DAY = 0;

    public function __construct($Company_Name,$MAX_WORKING_HOURS_PER_MONTH,$MAX_WORKING_DAY_PER_MONTH,$EMPWAGE_PER_HOUR)
{
    $this->Company_Name = $Company_Name;
    $this->MAX_WORKING_HOURS_PER_MONTH = $MAX_WORKING_HOURS_PER_MONTH;
    $this->MAX_WORKING_DAY_PER_MONTH = $MAX_WORKING_DAY_PER_MONTH;
    $this->EMPWAGE_PER_HOUR = $EMPWAGE_PER_HOUR;

}
function EmpWageMonthly()
{
while($this->TOTAL_WORKING_DAY <= $this->MAX_WORKING_DAY_PER_MONTH && $this->TOTAL_EMP_HOURS <= $this->MAX_WORKING_HOURS_PER_MONTH)
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

$EmpDailyWage = $EMP_HOURS * $this->EMPWAGE_PER_HOUR;

$this->EmpMonthlyWage += $EmpDailyWage;
}
echo "Employee Monthly Wage for $this->Company_Name is : $this->EmpMonthlyWage \n";
}
}


$EmpWage = new EmployeeWageBuilder("BMW",80,23,30);
$EmpWage->EmpWageMonthly();
$EmpWage = new EmployeeWageBuilder("TATA",85,25,25);
$EmpWage->EmpWageMonthly();
$EmpWage = new EmployeeWageBuilder("BIRLA",90,22,35);
$EmpWage->EmpWageMonthly();
?>

