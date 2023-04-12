<?php

namespace App\Models;

    class Student_Old {
        public static function all(){

            $students = [
                [
                    'id' => 1,
                    'name' => 'Sayed',
                    'city' => 'Giza',
                    'phone' => '999999',
                    'email' => 'sel33@gmail.com'
                ],
                [
                    'id' => 2,
                    'name' => 'Mohamed',
                    'city' => 'Cairo',
                    'phone' => '994446',
                    'email' => 'mo773@gmail.com'
                ],
                [
                    'id' => 3,
                    'name' => 'Ahmed',
                    'city' => 'Alex',
                    'phone' => '984954',
                    'email' => 'ahm773@gmail.com'
                ]
                ];

        return $students;
    }

    public static function find($id){
        $students = self::all();

        foreach($students as $student){
            if($student['id'] == $id){
                return $student;
            }
        }
    }
    }
