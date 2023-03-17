<?php

namespace app\Models;

class Employee
{

    public function __construct(
        public int $emp_id,
        public string $emp_name,
        public int $emp_wage,
        public \DateTime $emp_hireDate
    ) 
    {}

    public function getExp()
    {
        $time_now = new \DateTime();

        return $time_now->diff($this->emp_hireDate)->y;
    } 
}