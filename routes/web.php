<?php

use Illuminate\Support\Facades\Route;
use App\ViewDepartment;
use App\ViewEmployee;
use App\Validators\EmployeeValidator;
use App\Models\Department;
use App\Models\Employee;

Route::get('/', function () {
    echo "<h1>2.1</h1>";

    $empValidator = new EmployeeValidator();
    $Employees = [];
    $Employees[] = new Employee(
        0,
        'Don',
        30000,
        Datetime::createFromFormat('d.m.Y','20.06.2017')
    );

    $Employees[] = new Employee(
        1,
        'Stevenson',
        -200,
        Datetime::createFromFormat('d.m.Y','20.06.2015')
    );

    $Employees[] = new Employee(
        2,
        'General Kenobi',
        14124,
        Datetime::createFromFormat('d.m.Y','05.02.2012')
    );
    $Employees[] = new Employee(
        3,
        'Normal',
        12000,
        Datetime::createFromFormat('d.m.Y','02.03.2014')
    );
    ViewEmployee::printEmps($Employees, $empValidator);

    echo "<h1>2.2</h1>";


    $employees1 = [];

    $employees1[] = new Employee(
        1,
        'James',
        50000,
        Datetime::createFromFormat('d.m.Y','20.06.2019')
    );

    $employees1[] = new Employee(
        2,
        'Peter',
        20000,
        Datetime::createFromFormat('d.m.Y','20.06.2015')
    );

    $employees1[] = new Employee(
        3,
        'Willford',
        40000,
        Datetime::createFromFormat('d.m.Y','20.06.2011')
    );


    $employees2 = [];

    $employees2[] = new Employee(
        1,
        'Jack',
        50000,
        Datetime::createFromFormat('d.m.Y','01.02.2012')
    );

    $employees2[] = new Employee(
        2,
        'Gendal',
        40000,
        Datetime::createFromFormat('d.m.Y','12.08.2015')
    );

    $employees2[] = new Employee(
        3,
        'Limus',
        8000,
        Datetime::createFromFormat('d.m.Y','10.02.2020')
    );

    $departments = [];

    $departments[] = new Department($employees1, 'Dep1');
    $departments[] = new Department($employees2, 'Dep2');

    ViewDepartment::printDeps($departments);
    ViewDepartment::WageDeps($departments);
    
    // return view('welcome');
});
