<?php
include "databases.php";

session_start();
$email = "";
$errors = array(); 

$db = mysqli_connect('127.0.0.1', 'root', '', 'DB');

if ($db == false)
{
    echo "Ошибка подключения";
}

if (isset($_POST['log-in'])) 
{
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($login)) 
    {
        array_push($errors, "Вы не ввели логин");
    }
    if (empty($password)) 
    {
        array_push($errors, "Вы не ввели пароль");
    }
  
    if (count($errors) == 0) 
    {
        $password = md5($password);
        $query = "SELECT * FROM login WHERE Address='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) 
        {
            $user = mysqli_fetch_assoc($results);
            $_SESSION['user'] = [
                "email" => $user['email']
            ];
            header('location: profile.php');
        } else {
            array_push($errors, "Не верный логин или пароль");
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