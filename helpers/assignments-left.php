<?php
require_once('course-codes.php');

$assignments = [
    [
        'id' => '1',
        'subject' => 'Mathematics for Technology I',
        'code' => $mathematicsSemI,
        'topic' => 'Tutorial 2',
        'material_link' => 'https://drive.google.com/file/d/1POjLv1UG6_mUC1_RM3ucMDzq1UwfNe9o/view',
        'due_date' => '2024-05-19',
        'due_time' => '23:59',
        'time_left'=> strtotime('2024-05-19 23:50:00'),
        'extra' =>'test'
    ],
    [
        'id' => '2',
        'subject' => 'Mathematics for Technology I',
        'code' => $mathematicsSemI,
        'topic' => 'Tutorial 1',
        'material_link' => 'https://drive.google.com/file/d/1POjLv1UG6_mUC1_RM3ucMDzq1UwfNe9o/view',
        'due_date' => '2024-05-19',
        'due_time' => '23:59',
        'time_left'=> strtotime('2024-05-13 23:50:00'),
        'extra' =>''
    ],
    [
        'id' => '3',
        'subject' => 'Skill Developement Project I',
        'code' => $skillDevelopmentSemI,
        'topic' => 'Year I Project',
        'material_link' => '',
        'due_date' => 'Before End of Semester I',
        'due_time' => '',
        'time_left'=> '',
        'extra' =>'TEST'
    ],
];
