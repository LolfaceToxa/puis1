<?php

namespace App;

use App\Models\Employee;
use App\Validators\EmployeeValidator;

class ViewEmployee
{
    public static function printExp(Employee $employee)
    {
        echo "Стаж работника {$employee->emp_name} {$employee->getExp()}<br/>";
    }

    public static function printEmps(array $employees, EmployeeValidator $validator)
    {
        foreach ($employees as $employee) {
            echo "id:{$employee->emp_id} <br/> Имя:{$employee->emp_name} <br/> Зарплата:{$employee->emp_wage} <br/> Дата найма:{$employee->emp_hireDate->format("d.m.y")} <br/> Опыт:{$employee->getExp()} <br/> {$validator::Info($employee)}<br/><br/>";
        }
    }
}