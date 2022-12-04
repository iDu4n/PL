
<?php

    include "databases.php";

    $result = mysqli_query($induction, "SELECT * FROM `profile`");

    $Full_name_student = mysqli_fetch_assoc($result);
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

    <link rel="stylesheet" href="css/profile.css">
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
                                        <a href="index.html">
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
        <div style = "padding-top: 30px;">
            <div class = "profile_block" style = "border-radius: 10px;">
                <img src = "img/photo.png" style = "width: 190px; border-radius: 50%; margin-left: 20px;">
                <div class = "profile_bg"></div>

                <p class = "profile_full_name_student"> <b><?php  echo $Full_name_student['Full_name_student']; ?></b> </p>
                <p class = "profile_text"> <?php  echo $Full_name_student['Faculty']; ?> </p>
                <p class = "profile_text"> Специальность: <?php  echo $Full_name_student['Speciality']; ?> </p>
                <p class = "profile_text"> Курс: <?php  echo $Full_name_student['Course']; ?> </p>
                <p class = "profile_text"> Дата рождения: <?php  echo $Full_name_student['Date_of_birth']; ?></p>
                <p class = "profile_address"> <u><?php  echo $Full_name_student['Address']; ?></u></p>
                <p class = "profile_info"> </br>Информация о студенте: </br><?php  echo $Full_name_student['Student_info']; ?> </p>

            </div>
        </div>
    </main>

</body>

</html>
