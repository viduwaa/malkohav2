<?php
require_once('course-codes.php');

$assignments = [
   
    

    [
        'id' => '2',
        'subject' => 'Mathematics for Technology I',
        'code' => $mathematics,
        'topic' => 'Tutorial 6',
        'material_link' => '',
        'due_date' => '2024-07-08',
        'due_time' => '23:59',
        'time_left'=> strtotime('2024-07-08 23:59:59'),
        'extra' =>''
    ],
    [
        'id' => '5',
        'subject' => 'Introduction to Multimedia',
        'code' => $multimedia,
        'topic' => 'Tutorial 2',
        'material_link' => '',
        'due_date' => '2024-07-11',
        'due_time' => '07.59',
        'time_left'=> strtotime('2024-07-11 07:59:59'),
        'extra' =>''
    ],
  	[
        'id' => '4',
        'subject' => 'Human Computer Interaction',
        'code' => $humanComputer,
        'topic' => 'Assignment 1 - Create a Mind Map',
        'material_link' => '',
        'due_date' => '2024-07-12',
        'due_time' => '23:59',
        'time_left'=> strtotime('2024-07-12 23:59:59'),
        'extra' =>''
    ],
    /*
    [
        'id' => '1',
        'subject' => 'Skill Developement Project I',
        'code' => $skillDevelopmentSemI,
        'topic' => 'Project Proposal Document Submission',
        'material_link' => '',
        'due_date' => '2024-07-03',
        'due_time' => '23:59',
        'time_left'=> strtotime('2024-07-03 23:59:59'),
        'extra' =>''
    ],
    */

 
    [
        'id' => '3',
        'subject' => 'Principles of Management',
        'code' => $managementPrinciples,
        'topic' => 'Tutorial 1',
        'material_link' => '',
        'due_date' => "Don't know",
        'due_time' => '',
        'time_left'=> '',
        'extra' =>"Still don't know a time, But keep it completed"
    ]
];
