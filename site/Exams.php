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

if (isset($_POST['AddExam'])) 
{
    $Subject = $_POST['subject'];
    $Hours = $_POST['hours'];
    $Control_form = $_POST['control_form'];
    $Mark = $_POST['mark'];
    $Date = $_POST['date'];
    $Teacher = $_POST['full_name_teacher'];
    $Retakes = $_POST['retakes'];
    $Mark = (int) $Mark;
    $Retakes = (int) $Retakes;

    $query = "INSERT INTO `record_book`(`Subject`, `Hours`, `Control_form`, `Mark`, `Exam_date`, `Full_name_teacher`, `Retakes`) 
                VALUES ('$Subject','$Hours','$Control_form','$Mark','$Date','$Teacher','$Retakes')";
    $results = mysqli_query($db, $query);
    header("Location: record_book.php");
}

if (isset($_POST['DeleteExam'])) 
{
    $Subject = $_POST['subject'];
    $Hours = $_POST['hours'];
    $Control_form = $_POST['control_form'];
    $Mark = $_POST['mark'];
    $Date = $_POST['date'];
    $Teacher = $_POST['full_name_teacher'];
    $Retakes = $_POST['retakes'];
    $Mark = (int) $Mark;
    $Retakes = (int) $Retakes;

    $query = "DELETE FROM `record_book` WHERE `Exam_date` = '$Date' AND `Subject` = '$Subject'";
    $results = mysqli_query($db, $query);
    header("Location: record_book.php");
}

if (isset($_POST['UpdateExam'])) 
{
    $Subject = $_POST['subject'];
    $Hours = $_POST['hours'];
    $Control_form = $_POST['control_form'];
    $Mark = $_POST['mark'];
    $Date = $_POST['date'];
    $Teacher = $_POST['full_name_teacher'];
    $Retakes = $_POST['retakes'];
    $Mark = (int) $Mark;
    $Retakes = (int) $Retakes;

    $query = "UPDATE `record_book` SET `Subject`='$Subject',`Hours`='$Hours',`Control_form`='$Control_form',`Mark`='$Mark',`Exam_date`='$Date',
    `Full_name_teacher`='$Teacher',`Retakes`='$Retakes' WHERE `Exam_date` = '$Date' AND `Subject` = '$Subject'";
    $results = mysqli_query($db, $query);
    header("Location: record_book.php");
}

