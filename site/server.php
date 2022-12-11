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

if (isset($_POST['log-in'])) 
{
    $address = mysqli_real_escape_string($db, $_POST['Address']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($address)) 
    {
        array_push($errors, "Вы не ввели email");
    }
    
    if (empty($password)) 
    {
        array_push($errors, "Вы не ввели пароль");
    }
  
    if (count($errors) == 0) 
    {
        $password = md5($password);
        $query = "SELECT * FROM login WHERE Address='$address' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) 
        {
            $user = mysqli_fetch_assoc($results);
            $_SESSION['user'] = [
                "address" => $user['Address'],
                "role" => $user['role']
            ];
            if($_SESSION['user']['role'] == 'student') {header('location: profile.php');}
            else {header ('location: teachers.php');}
            
        } else {
            array_push($errors, "Не верная почта или пароль");
        }
    }
}

if (isset($_POST['logout_user'])) 
{   
    unset($_SESSION['user']); 
    session_destroy();
    header("Location: login.php");
}
?>