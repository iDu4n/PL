<?php

session_start();

$login = "";
$email = "";
$errors = array(); 

$db = mysqli_connect('127.0.0.1', 'root', '', 'Project_DB');

if ($db == false)
{
    echo "Ошибка подключения";
}

if (isset($_POST['AddMark'])) 
{
    $Number_oper = $_POST['number_oper'];
    $Full_name_student = $_POST['full_name_student'];
    $Subject = $_POST['subject'];
    $Mark = $_POST['mark'];
    $Mark = (int) $Mark;

    $query = "INSERT INTO `rating` (`Number_oper`, `Full_name_student`, `Subject`, `Mark`) VALUES ('$Number_oper','$Full_name_student','$Subject','$Mark')";
    $results = mysqli_query($db, $query);
    header("Location: rating.php");
}

if (isset($_POST['DeleteMark'])) 
{
    $Number_oper = $_POST['number_oper'];
    $Full_name_student = $_POST['full_name_student'];
    $Subject = $_POST['subject'];
    $Mark = $_POST['mark'];
    $Mark = (int) $Mark;

    $query = "DELETE FROM `rating` WHERE `Number_oper` = ' $Number_oper' AND `Full_name_student` = '$Full_name_student'  AND `Subject` = '$Subject'  AND `Mark` = '$Mark'";
    $results = mysqli_query($db, $query);
    header("Location: rating.php");
}

if (isset($_POST['UpdateMark'])) 
{
    $Number_oper = $_POST['number_oper'];
    $Full_name_student = $_POST['full_name_student'];
    $Subject = $_POST['subject'];
    $Mark = $_POST['mark'];
    $Mark = (int) $Mark;

    $query = "UPDATE `rating` SET `Number_oper`='$Number_oper', `Full_name_student`='$Full_name_student',`Subject`='$Subject',`Mark`='$Mark'
       WHERE `Number_oper` = '$Number_oper' AND `Full_name_student` = '$Full_name_student'  AND `Subject` = '$Subject'";
    $results = mysqli_query($db, $query);
    header("Location: rating.php");
}

