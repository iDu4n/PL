
<?php

include "databases.php";

$result = mysqli_query($induction, "SELECT * FROM `record_book`");

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

<link rel="stylesheet" href="css/record_book.css">
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
        <p class = "group_text">Зачётка</p>
            <table>
                <thead>
                    <tr>
                        <th>Предмет</th>
                        <th>Часы</th>
                        <th>Форма контроля</th>
                        <th class = "rb_mark">Оценка</th>
                        <th>Дата проведения</th>
                        <th class = "rb_teacher">Преподаватель</th>
                        <th>Количество пересдач</th>
                    </tr>
                </thead>
                <tbody>
                <?php    while ($record_book = mysqli_fetch_assoc($result))
                        {
                ?>
                    <tr>
                        <td><?php  echo $record_book ['Subject']; ?></td>
                        <td><?php  echo $record_book ['Hours']; ?></td>
                        <td><?php  echo $record_book ['Control_form']; ?></td>
                        <td><?php  if($record_book['Control_form'] != 'Зачёт') {echo $record_book ['Mark']; } else {echo "--";} ?></td>
                        <td><?php  echo $record_book ['Exam_date']; ?></td>
                        <td><?php  echo $record_book ['Full_name_teacher']; ?></td>
                        <td><?php  echo $record_book ['Retakes']; ?></td>
                <?php  
                        } 
                ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

</body>

</html>
