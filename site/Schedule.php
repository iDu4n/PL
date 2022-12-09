
<?php

include "databases.php";

$result = mysqli_query($induction, "SELECT * FROM `schedule`");

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Профиль</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg">

<link rel="stylesheet" href="css/schedule.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/themify-icons.css">
<!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_top_wrap d-flex justify-content-between align-items-center">
                            <div class="text_wrap">
                                <p><span>+375 17 293-88-15</span> <span>info@bsuir.by</span></p>
                            </div>
                            <div class="text_wrap">
                                <p><a href="index.php"> <i class="ti-user"></i>  Войти</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_wrap d-flex justify-content-between align-items-center">
                            <div class="header_left">
                                <div class="logo">
                                    <a href="https://bsuir.by" target="_blank">
                                        <img src="img/logo.jpg" style = "width: 70px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="header_right d-flex align-items-center">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="profile.php">Профиль</a></li>
                                            <li><a href="group.php">Группа</a></li>
                                            <li><a href="rating.php">Рейтинг</a></li>
                                            <li><a href="record_book.php">Зачётка</a></li>
                                            <li><a href="Schedule.php">Расписание</a></li>
                                            <li><a href="teachers.php">Преподаватели</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div style = "padding-top: 30px; padding-left: 60px; padding-right: 60px;">
        <div class = "group_block" style = "border-radius: 10px;">
        <p class = "group_text">Расписание</p>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Понедельник</br>2022-12-12</th>
                        <th>Вторник</br>2022-12-13</th>
                        <th>Среда</br>2022-12-14</th>
                        <th>Четверг</br>2022-12-15</th>
                        <th>Пятница</br>2022-12-16</th>
                        <th>Суббота</br>2022-12-17</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>9:00 - 10:20</td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == "2022-12-12 09:00:00") {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == "2022-12-13 09:00:00") {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == "2022-12-14 09:00:00") {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-15 09:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-16 09:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-17 09:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                    </tr>
                    <tr>
                        <td>10:35 - 11:55</td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-12 10:35:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } }  ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-13 10:35:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-14 10:35:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-15 10:35:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-16 10:35:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-17 10:35:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                    </tr>
                    <tr>
                        <td>12:25 - 13:45</td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-12 12:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } }?> </p></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-13 12:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-14 12:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-15 12:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-16 12:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-17 12:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                    </tr>
                    <tr>
                        <td>14:00 - 15:20</td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-12 14:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-13 14:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-14 14:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-15 14:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-16 14:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-17 14:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                    </tr>
                    <tr>
                        <td>15:50 - 17:10</td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-12 15:50:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-13 15:50:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-14 15:50:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-15 15:50:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-16 15:50:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-17 15:50:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                    </tr>
                    <tr>
                        <td>17:25 - 18:45</td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-12 17:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-13 17:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-14 17:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-15 17:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-16 17:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-17 17:25:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                    </tr>
                    <tr>
                        <td>19:00 - 20:20</td>
                        <td><?php  $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-12 19:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } }  ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-13 19:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-14 19:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-15 19:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-16 19:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                        <td><?php $result = mysqli_query($induction, "SELECT * FROM `schedule`"); while ($schedule = mysqli_fetch_assoc($result)) { 
                            if($schedule['Date_Time'] == '2022-12-17 19:00:00') {echo $schedule['Subject']; echo "<br>"; ?> <p class = Name_teach> <?php echo $schedule['Full_name_teacher']; } } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

</body>

</html>
