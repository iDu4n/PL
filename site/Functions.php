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


if (isset($_POST['AddStudent'])) 
{
    $Student = $_POST['full_name_student'];
    $Faculty = $_POST['faculty'];
    $Spec = $_POST['speciality'];
    $Course = $_POST['course'];
    $Address = $_POST['address'];
    $Date = $_POST['date'];
    $Info = $_POST['info'];
    $Course = (int) $Course;

    $query = "INSERT INTO `profile`(`Full_name_student`, `Faculty`, `Speciality`, `Course`, `Address`, `Date_of_birth`, `Student_info`) VALUES 
                    ('$Student','$Faculty','$Spec','$Course','$Address','$Date','$Info')";
    $query1 = "INSERT INTO `my_group`(`Full_name_student`, `Address`) VALUES ('$Student','$Address')";
    $results = mysqli_query($db, $query);
    $results1 = mysqli_query($db, $query1);
    header("Location: profile.php");
}

if (isset($_POST['DeleteStudent'])) 
{
    $Address = $_POST['address'];

    $query = "DELETE FROM `profile` WHERE `Address` = '$Address'";
    $results = mysqli_query($db, $query);
    header("Location: profile.php");
}

if (isset($_POST['UpdateStudent'])) 
{
    $Student = $_POST['full_name_student'];
    $Faculty = $_POST['faculty'];
    $Spec = $_POST['speciality'];
    $Course = $_POST['course'];
    $Address = $_POST['address'];
    $Date = $_POST['date'];
    $Info = $_POST['info'];
    $Course = (int) $Course;

    $query = "UPDATE `profile` SET `Full_name_student`='$Student',`Faculty`='$Faculty',`Speciality`='$Spec',`Course`='$Course',`Address`='$Address',
                                    `Date_of_birth`='$Date',`Student_info`='$Info' WHERE `Address` = '$Address'";
    $query1 = "UPDATE `my_group` SET `Full_name_student`='$Student',`Address`='$Address' WHERE `Address` = '$Address'";
    $results = mysqli_query($db, $query);
    $results1 = mysqli_query($db, $query1);
    header("Location: profile.php");
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

if (isset($_POST['AddSchedule'])) 
{
    $Subject = $_POST['subject'];
    $Datetime = $_POST['datetime'];
    $Teacher = $_POST['full_name_teacher'];

    $query = "INSERT INTO `schedule`(`Subject`, `Date_Time`, `Full_name_teacher`) VALUES ('$Subject','$Datetime','$Teacher')";
    $results = mysqli_query($db, $query);
    header("Location: schedule.php");
}

if (isset($_POST['DeleteSchedule'])) 
{
    $Subject = $_POST['subject'];
    $Datetime = $_POST['datetime'];
    $Teacher = $_POST['full_name_teacher'];

    $query = "DELETE FROM `schedule` WHERE `Subject` = '$Subject' AND `Date_Time` = '$Datetime'";
    $results = mysqli_query($db, $query);
    header("Location: schedule.php");
}

if (isset($_POST['UpdateSchedule'])) 
{
    $Subject = $_POST['subject'];
    $Datetime = $_POST['datetime'];
    $Teacher = $_POST['full_name_teacher'];

    $query = "UPDATE `schedule` SET `Subject`='$Subject',`Date_Time`='$Datetime',`Full_name_teacher`='$Teacher' WHERE `Subject` = '$Subject' AND `Date_Time` = '$Datetime'";
    $results = mysqli_query($db, $query);
    header("Location: schedule.php");
}