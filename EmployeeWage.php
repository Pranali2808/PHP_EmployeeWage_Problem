<?php
//UC11 : calculate employeewage for multiple companies using interafce approach

echo "**********Welcome to Employee Wage Computation Problem************\n";
include "IEmpWage.php";
class EmployeeWage implements IEmpWage{
        public $EMP_HOURS;
        public $IS_FULLTIME = 1;
        public $IS_PARTTIME = 2;
        public $EMPWAGE_PER_HOUR;
        public $MAX_WORKING_DAY_PER_MONTH;
        public $MAX_WORKING_HOURS_PER_MONTH;
        public $Company_Name;

        public function __construct($Company_Name,$MAX_WORKING_HOURS_PER_MONTH,$MAX_WORKING_DAY_PER_MONTH,$EMPWAGE_PER_HOUR)
        {
            $this->Company_Name = $Company_Name;
            $this->MAX_WORKING_HOURS_PER_MONTH = $MAX_WORKING_HOURS_PER_MONTH;
            $this->MAX_WORKING_DAY_PER_MONTH = $MAX_WORKING_DAY_PER_MONTH;
            $this->EMPWAGE_PER_HOUR = $EMPWAGE_PER_HOUR;
        }
        
        public function EmployeeHours(){
             $Num = rand(0, 2);//function to generate random number 0 or 2 for Attendance
                 switch($Num){
                       case 1 :
                              $this->EMP_HOURS = 8;
                              break;
                       case 2 :
                              $this->EMP_HOURS = 4;
                              break;
                      default :
                              $this->EMP_HOURS = 0;

                           }
                            return $this->EMP_HOURS;
                      }

        public function EmpWageMonthly()
        {
            $TOTAL_EMP_HOURS = 0;
            $EmpMonthlyWage = 0;
            $TOTAL_WORKING_DAY = 0;

while($TOTAL_WORKING_DAY <= $this->MAX_WORKING_DAY_PER_MONTH && $TOTAL_EMP_HOURS <= $this->MAX_WORKING_HOURS_PER_MONTH)
    {

       $EMP_HOURS = $this->EmployeeHours();
       $TOTAL_EMP_HOURS += $this->EMP_HOURS;
       $TOTAL_WORKING_DAY ++ ;
       $EmpDailyWage = $EMP_HOURS * $this->EMPWAGE_PER_HOUR;

         $EmpMonthlyWage += $EmpDailyWage;
    }
echo "Employee Monthly Wage for $this->Company_Name is : $EmpMonthlyWage \n";
}
}

$C1 = new EmployeeWage("BMW",80,23,30);
$C2 = new EmployeeWage("TATA",85,25,25);
$C3 = new EmployeeWage("BIRLA",90,22,35);
$company = [$C1,$C2,$C3];
for($i = 0; $i < count($company); $i++)
{
  echo $company[$i]->EmpWageMonthly();
}

?>


