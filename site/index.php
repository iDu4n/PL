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
      
      <div class="tab-content">

        
        <div id="login">   
          <h1>Авторизация</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              E-mail адрес<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Пароль<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <button class="button button-block"/>Войти</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
   

    <script src="js/log-in.js"></script>

</body>
</html>
