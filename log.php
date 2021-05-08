<?
session_start();
?>
<html>
<p>Авторизация</p><br>
<a href="/registration.php">Регистрация</a>
<form  method="POST">
    <input type="text" name="login" placeholder="Логин">
    <input type="text" name="pass" placeholder="Пароль">
    <input type="submit">
</form>

</html>

<?
if ($_SESSION['is_login']==true){
    echo "<script>document.location.href='/';</script>";
}

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");
$users = mysqli_query ($link, "SELECT * FROM `user` WHERE 1");

// Получение данных из формы

$login = $_POST['login'];
$pass = $_POST['pass'];
$isLogin = false;

//Проверка существования никнейма в бд

while ($u = mysqli_fetch_array ($users)){
    if ($u['name'] == $login) {
        $isLogin = true;
        $user = mysqli_query ($link, "SELECT * FROM `user` WHERE `name` = '$login'");
    }
}

// Проверка пароля

if (!empty($login) && !empty($pass)){
    if ($isLogin == true){
        while ($u = mysqli_fetch_array ($user)){
            if ($u['password'] == $pass){
                $_SESSION['id'] = $u['id'];
                $_SESSION['is_login'] = true;
                echo "<script>document.location.href='/';</script>";
            }else {
                print('Пароль введен некорректно');
            }
        }
    }else {
        print('Логин введен некорректно');
    }
}


mysqli_close($link);
?>