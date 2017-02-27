<?php
/**
 * Created by PhpStorm.
 * User: wilder11
 * Date: 27/02/17
 * Time: 14:50
 */
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$result = array_sum($students)/count($students);

foreach ($students as $stud => $age) {
    echo "L'étudiant $stud a $age ";
 }
echo "L'âge moyen des étudiants est $result";