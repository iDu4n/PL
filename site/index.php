<?php
session_start();
include ('server.php');
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
 
  <link rel="stylesheet" href="css/log-in.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body style="background: url(./img/mountains.jpg) no-repeat; background-size: 100%;">
  
  <div class="form" style="margin-top: 400px;">
      
      <ul class="tab-group">
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div>

        
        <div id="login">   
          <h1>Авторизация</h1>
          
          <form method="post">
          <?php include('error.php') ?>
            <div class="field-wrap">
            <label>
              E-mail адрес<span class="req">*</span>
            </label>
            <input type="text" name="Address"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Пароль<span class="req">*</span>
            </label>
            <input type="password" name="password"/>
          </div>

          <button type="submit" class="button button-block"  name="log-in">Войти</button>
          
          </form>

        </div>
        
      </div>
      
  </div>
   

  <script src="js/log-in.js"></script>

</body>
</html>
