
<?php

include "databases.php";
include "server.php";

$result = mysqli_query($induction, "SELECT * FROM `my_group` ORDER BY `Full_name_student`");

$Full_name_student = $_GET['full_name_student'];
if($Full_name_student == '1') {
$result = mysqli_query($induction, "SELECT * FROM `my_group` ORDER BY `Full_name_student`");
}
if($Full_name_student == '2') {
$result = mysqli_query($induction, "SELECT * FROM `my_group` ORDER BY `Full_name_student` DESC");
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Группа</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg">

<link rel="stylesheet" href="css/group.css">
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
                                <p><a href="index.php"> <i class="ti-user"></i>  Выйти</a></p>
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
                                            <?php if($_SESSION['user']['role'] == 'student' || $_SESSION['user']['role'] == 'admin') { ?> <li><a  href="profile.php">Профиль</a></li> <?php } ?>
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
        <p class = group_text>Группа </p>
            <table>
                <thead>
                    <tr>
                        <th>ФИО студента</th>
                        <th>Электронная почта</th>
                    </tr>
                </thead>
                <tbody>
                <?php    while ($group = mysqli_fetch_assoc($result))
                        {
                ?>
                    <tr>
                        <td><?php  echo $group['Full_name_student']; ?></td>
                        <td><?php  echo $group['Address']; ?></td>
                <?php  
                        } 
                ?>
                    </tr>
                </tbody>
            </table>
            <form class="form" style="padding-left: 32%; padding-bottom: 50px;" method="get">
                <h3 class="order-call-title">Отсортировать группу студентов по ФИО</h3>
                <h3 class="order-call-title" style="margin-top: 0px;">(1 – по возрастанию, 2 – по убыванию)</h3>
                <input type="text" class="text-input small-text" style="width: 60%;" name="full_name_student" placeholder="Введите 1 или 2" required>
                
                <p><input class="submit-btn small-text" type="submit" name="FindStudent" value="Отсортировать группу студентов"></p>
            </form>
        </div>
    </div>
</main>

</body>

</html>
