
<?php
    session_start();
    include "databases.php";
    include "server.php";
    
    $result = mysqli_query($induction, "SELECT * FROM `profile`");

    $profile = mysqli_fetch_assoc($result);
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
                                    <p><a href="logout.php"> <i class="ti-user"></i>  Выйти</a></p>
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
        <?php
            if ($_SESSION['user']['role'] == 'student')
            {
        ?>
        <div style = "padding-top: 30px;">
            <div class = "profile_block" style = "border-radius: 10px; background: url(./img/mountains.jpg) 0% -220% no-repeat; background-size: 100% 80%;">
                <img src = "img/photo.png" style = "margin-left: 44.5%; auto; width: 190px; border-radius: 50%;">
                <div class = "profile_bg"></div>
                <?php  
                
                       while ($profile = mysqli_fetch_assoc($result))
                        {
                            if($profile['Full_name_student'] == 'Романовский Никита Дмитриевич')
                            {
                ?>
                <p class = "profile_full_name_student"> <b><?php  echo $profile['Full_name_student']; ?></b> </p>
                <p class = "profile_text"> Факультет: <?php  echo $profile['Faculty']; ?> </p>
                <p class = "profile_text"> Специальность: <?php  echo $profile['Speciality']; ?> </p>
                <p class = "profile_text"> Курс: <?php  echo $profile['Course']; ?> </p>
                <p class = "profile_text"> Дата рождения: <?php  echo $profile['Date_of_birth']; ?></p>
                <p class = "profile_address"> <u><?php  echo $profile['Address']; ?></u></p>
                <p class = "profile_info"> </br>Информация о студенте: </br><?php  echo $profile['Student_info']; ?> </p>
                <?php  
                            }
                        } 
                ?>
            </div>
        </div>
        <?php
            }
        ?>

        <?php
            if ($_SESSION['user']['role'] == 'admin')
            {
        ?>         

        <div style = "padding-top: 30px; min-height: 500px;">
            <div class = "profile_block" style = "border-radius: 10px; background: url(./img/mountains.jpg) 0% -260% no-repeat; background-size: 100% 80%;">
                <img src = "img/photo.png" style = "margin-left: 44.5%; auto; width: 190px; border-radius: 50%;">
                <div class = "profile_bg"></div>
                <?php
                    $Full_name_student = $_GET['full_name_student'];
                    $result1 = mysqli_query($db, "SELECT * FROM `profile` WHERE `Full_name_student` LIKE '$Full_name_student'");
                       while ($profile1 = mysqli_fetch_assoc($result1))
                        {
                ?>
                <p class = "profile_full_name_student"> <b><?php  echo $profile1['Full_name_student']; ?></b> </p>
                <p class = "profile_text"> Факультет: <?php  echo $profile1['Faculty']; ?> </p>
                <p class = "profile_text"> Специальность: <?php  echo $profile1['Speciality']; ?> </p>
                <p class = "profile_text"> Курс: <?php  echo $profile1['Course']; ?> </p>
                <p class = "profile_text"> Дата рождения: <?php  echo $profile1['Date_of_birth']; ?></p>
                <p class = "profile_address"> <u><?php  echo $profile1['Address']; ?></u></p>
                <p class = "profile_info"> </br>Информация о студенте: </br><?php  echo $profile1['Student_info']; ?> </p>
                <?php  
        
                        } 
                ?>
            </div>
        </div>
        <div style = "padding-top: 30px; min-height: 500px;">
            <div class = "profile_block" style = "border-radius: 10px;">
                <form class="form" style="padding-left: 44%; padding-bottom: 50px;" method="get">
                    <h3 class="order-call-title">Найти студента</h3>

                    <input type="text" class="text-input small-text" name="full_name_student" placeholder="ФИО студента" required>
                
                    <p><input class="submit-btn small-text" type="submit" name="FindStudent" value="Найти студента"></p>
                </form>
                <form class="form" action="Functions.php" method="post">
                    <h3 class="order-call-title">Добавить/удалить/изменить информацию о студенте</h3>

                    <input type="text" class="text-input small-text" name="full_name_student" placeholder="ФИО студента" required>
                    <input type="text" class="text-input small-text" name="faculty" placeholder="Факультет" required>
                    <input type="text" class="text-input small-text" name="speciality" placeholder="Специальность" required>
                    <input type="text" pattern="^[0-4]$" class="text-input small-text" name="course" placeholder="Курс" required> 
                    <input type="email"  class="text-input small-text" name="address" placeholder="E-mail адресс" required>
                    <input type="date" class="text-input small-text" name="date" placeholder="Дата рождения" required>
                    <input type="text" class="text-input small-text" name="info" placeholder="Информация о студенте">
                
                    <p><input class="submit-btn small-text" style="margin-top: 50px;" type="submit" name="AddStudent" value="Ввести нового студента">
                    <input class="submit-btn small-text" type="submit" name="DeleteStudent" value="Удалить запись о студенте">
                    <input class="submit-btn small-text" type="submit" name="UpdateStudent" value="Редактировать информацию о студенте"></p>
                </form>
            </div>
        </div>
        <?php
            }
        ?>

    </main>

</body>

</html>
