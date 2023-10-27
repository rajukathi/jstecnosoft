<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Department,Position,Attendance,Salary,Employee,SalaryCalculation};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Human Resource',
        ]);
        Department::create([
            'name' => 'IT',
        ]);
        Department::create([
            'name' => 'Accounting',
        ]);
        Department::create([
            'name' => 'Sales',
        ]);

        Position::create([
            'name' => 'HR Officer',
            'department_id' => 1,
        ]);

        Position::create([
            'name' => 'Senior Developer',
            'department_id' => 2,
        ]);

        Position::create([
            'name' => 'Marketing Officer',
            'department_id' => 3,
        ]);

        Position::create([
            'name' => 'Manager',
            'department_id' => 4,
        ]);

        Salary::create([
            'position_id' => 1,
            'basic_salary' => 10000,
            'hra' => 1000,
            'da' => 1000,
            'other_allowances' => 1000,
            'gross_salary' => 13000
        ]);

        Salary::create([
            'position_id' => 2,
            'basic_salary' => 20000,
            'hra' => 2000,
            'da' => 2000,
            'other_allowances' => 2000,
            'gross_salary' => 26000
        ]);

        Salary::create([
            'position_id' => 3,
            'basic_salary' => 30000,
            'hra' => 3000,
            'da' => 3000,
            'other_allowances' => 3000,
            'gross_salary' => 39000
        ]);

        Salary::create([
            'position_id' => 4,
            'basic_salary' => 40000,
            'hra' => 4000,
            'da' => 4000,
            'other_allowances' => 4000,
            'gross_salary' => 52000
        ]);

        Employee::create([
            'department_id' => 1,
            'position_id' => 1,
            'name' => 'First Emp',
            'email' => "first@test.com",
            'phone_number' => "9999999999",
            'address' => "rajkot",
        ]);

        Employee::create([
            'department_id' => 2,
            'position_id' => 2,
            'name' => 'Second Emp',
            'email' => "second@test.com",
            'phone_number' => "9999999999",
            'address' => "rajkot",
        ]);

        Employee::create([
            'department_id' => 3,
            'position_id' => 3,
            'name' => 'Third Emp',
            'email' => "third@test.com",
            'phone_number' => "9999999999",
            'address' => "rajkot",
        ]);

        Employee::create([
            'department_id' => 4,
            'position_id' => 4,
            'name' => 'Fourth Emp',
            'email' => "fourth@test.com",
            'phone_number' => "9999999999",
            'address' => "rajkot",
        ]);

        foreach ( Employee::get() as $value ) {

            for ( $i = 1 ; $i <= 30; $i++ ) {

                $date = $i."-10-2023";
                
                if ( !in_array(date("l", strtotime($date)), ["Sunday","Saturday"]) ) {

                    Attendance::create([
                        'employee_id' => $value->id,
                        'in_time' => strtotime($date." 9:45 AM"),
                        'out_time' => strtotime($date." 6:45 PM"),
                    ]);
                }
            }
        }
    }
}
