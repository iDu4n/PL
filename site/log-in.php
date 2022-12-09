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

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div>

        
        <div id="login">   
          <h1>Авторизация</h1>
          
          <form method="post">
          
            <div class="field-wrap">
            <label>
              E-mail адрес<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Пароль<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" id='password'/>
          </div>

          <button type="submit" class="button button-block" id="login">Войти</button>
          
          </form>

        </div>
        
      </div>
      
</div>
   

    <script src="js/log-in.js"></script>

</body>
</html>
