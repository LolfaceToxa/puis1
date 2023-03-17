<?php
namespace App;

use App\Models\Department;
use App\Models\Employee;

class MaxMin{
    public static function findMaxSalary(array $deps)
    {
        $MaxDep = $deps[0]->getAllWage();
        $MaxDeps = [];

        foreach ($deps as $dep) {
            $DepAll = $dep->getAllWage();

            if ($DepAll >= $MaxDep) {
                $prevMax = $MaxDep;
                $MaxDep = $DepAll;

                if ($DepAll != $prevMax) {
                    $MaxDeps = [];
                }
                $MaxDeps[] = $dep;
            }
        }

        return $MaxDeps;
    }

    public static function findMinSalary(array $deps)
    {
        $MinDep = $deps[0]->getAllWage();
        $MinDeps = [];

        foreach ($deps as $dep) {
            $DepAll = $dep->getAllWage();

            if ($DepAll <= $MinDep) {
                $prevMin = $MinDep;
                $MinDep = $DepAll;

                if ($DepAll != $prevMin) {
                    $MinDeps = [];
                }
                $MinDeps[] = $dep;
            }
        }

        return $MinDeps;
    }

    public static function findMaxEmp(array $deps)
    {
        $MaxDep = count($deps[0]->employees);
        $MaxDeps = [];

        foreach ($deps as $dep) {
            $DepAll = count($dep->employees);;

            if ($DepAll >= $MaxDep) {
                $prevMax = $MaxDep;
                $MaxDep = $DepAll;

                if ($DepAll != $prevMax) {
                    $MaxDeps = [];
                }
                $MaxDeps[] = $dep;
            }
        }

        return $MaxDeps;
    }

    public static function findMinEmp(array $deps)
    {
        $MinDep = count($deps[0]->employees);
        $MinDeps = [];

        foreach ($deps as $dep) {
            $DepAll = count($dep->employees);

            if ($DepAll <= $MinDep) {
                $prevMin = $MinDep;
                $MinDep = $DepAll;

                if ($DepAll != $prevMin) {
                    $MinDeps = [];
                }
                $MinDeps[] = $dep;
            }
        }

        return $MinDeps;
    }
}