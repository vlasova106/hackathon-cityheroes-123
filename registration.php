<?php 
session_start();
?>
<p>Регистрация</p><br>
<a href="/log.php">Авторизация</a>
<form  method="POST">
    <input type="text" name="login" placeholder="Логин">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="un" placeholder="Учебное заведение">
    <input type="text" name="sp" placeholder="Специальность">
    <input type="text" name="pass" placeholder="Пароль">
    <input type="submit">
</form>

<? 
if ($_SESSION['is_login']==true){
    echo "<script>document.location.href='/';</script>";
}

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

// Получение данных из формы 

$login = $_POST['login'];
$email = $_POST['email'];
$un = $_POST['un'];
$sp = $_POST['sp'];
$pass = $_POST['pass'];

// Регистрация нового вользователя

if (!empty($login) && !empty($email) && !empty($un) && !empty($sp) && !empty($pass)) {
    $users = mysqli_query ($link, "SELECT * FROM `user` WHERE 1");
    $loginCheck = true; 
    while ($user = mysqli_fetch_array ($users)) {
        if ($user['name'] == $login) {
            $loginCheck = false;
        }
    }
    if ($loginCheck == true){
        $add = mysqli_query ($link, "INSERT INTO `user` (`name`, `email`, `institution`, `specialty`, `password`) 
        VALUES ('$login', '$email', '$un', '$sp', '$pass')");
        $_SESSION['is_login'] = true;
        $_SESSION['id'] = mysqli_insert_id($link);
        echo "<script>document.location.href='/';</script>";
        
    }else {
        print('Логин занят');
    }

}

mysqli_close($link);
?>