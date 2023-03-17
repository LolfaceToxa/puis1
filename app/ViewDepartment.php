<?php

namespace App;

use App\Models\Department;
use App\Models\Employee;
use App\MaxMin;

class ViewDepartment
{
    public static function printDep(Department $department)
    {
        echo "Сумма зарплат департамента {$department->dep_name} = {$department->getAllWage()}<br/>";

        foreach ($department->dep_all_emps as $employee) {
            echo "id:{$employee->emp_id} <br/>  Имя:{$employee->emp_name}  <br/>  Зарплата:{$employee->emp_wage}  <br/>  Дата найма:{$employee->emp_hireDate->format("d.m.y")}  <br/>  Опыт:{$employee->getExp()}<br/><br/><br/>";
        }
    }

    public static function printDeps(array $departments)
    {
        foreach ($departments as $department) {
            ViewDepartment::printDep($department);
            echo "<br/>";
        }
    }

    public static function WageDeps(array $departments)
    {
        if (empty($departments)) {
            echo "Нет департаментов";
        }

        $minDep = MaxMin::findMinSalary($departments);
        $maxDep = MaxMin::findMaxSalary($departments);

        if (count($minDep) > 1) {
            $minDep = MaxMin::findMinEmp($departments);
        }
        if (count($maxDep) > 1) {
            $maxDep = MaxMin::findMaxEmp($departments);
        }

        echo "Макс по сумме департамент:<br/>";
        ViewDepartment::printDeps($minDep);

        echo "Мин по сумме департамент:<br/>";
        ViewDepartment::printDeps($maxDep);
    }
}
