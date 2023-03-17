<?php

namespace app\Models;

class Department
{

    public function __construct(
        public array $dep_all_emps,
        public string $dep_name
    ) {
    }

    public function getAllWage()
    {
        $wages = 0;

        foreach ($this->dep_all_emps as $person) {
            $wages = $wages + $person->emp_wage;
        }

        return $wages;
    }
}