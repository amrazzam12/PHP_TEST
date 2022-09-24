<?php
include_once "SchoolSingleton.php";

$school = SchoolSingleton::getInstance("ZayatSchool" , 'Talkha,Dakahlia');
echo $school::getSchoolName();
echo "<br>";
echo $school::getSchoolAdd();

echo "<br>";

$school2 = SchoolSingleton::getInstance("MilteryThanawya" , 'Mansoura,Dakahlia');
echo $school::getSchoolName();
echo "<br>";
echo $school::getSchoolAdd();


// Its Working Both Objects Refers To First Object
echo "<pre>";

echo "</pre>";

// Both Return The Same Object