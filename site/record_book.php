
<?php

include "databases.php";
include "server.php";

$result = mysqli_query($induction, "SELECT * FROM `record_book` ORDER BY `Exam_date`");

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

            <?php if($_SESSION['user']['role'] == 'admin') 
                {
            ?>
                <form class="form" action="Functions.php" method="post">
                    <h3 class="order-call-title">Добавить/удалить/изменить запись в зачётке</h3>

                    <input type="text" class="text-input small-text" name="subject" placeholder="Предмет" required>
                    <input type="text" class="text-input small-text" name="hours" placeholder="Часы" required>
                    <input type="text" class="text-input small-text" name="control_form" placeholder="Форма контроля" required>
                    <input type="text" pattern="^[0-9]$|[1][0]$" class="text-input small-text" name="mark" placeholder="Оценка" required> 
                    <input type="date"  class="text-input small-text" name="date" placeholder="Дата проведения" required>
                    <input type="text" class="text-input small-text" name="full_name_teacher" placeholder="Преподаватель" required>
                    <input type="text" class="text-input small-text" name="retakes" placeholder="Количество пересдач" required>
                
                    <p><input class="submit-btn small-text" style="margin-top: 50px;" type="submit" name="AddExam" value="Ввести экзамен/зачёт">
                    <input class="submit-btn small-text" type="submit" name="DeleteExam" value="Удалить экзамен/зачёт">
                    <input class="submit-btn small-text" type="submit" name="UpdateExam" value="Редактировать экзамен/зачёт"></p>
                </form>
            <?php 
                }
            ?>
        </div>
    </div>
</main>

</body>

</html>
