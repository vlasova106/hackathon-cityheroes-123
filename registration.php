<p>Регистрация</p><br>
<form  method="POST">
    <input type="text" name="login" placeholder="Логин">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="un" placeholder="Учебное заведение">
    <input type="text" name="sp" placeholder="Специальность">
    <input type="text" name="pass" placeholder="Пароль">
    <input type="submit">
</form>

<? 
$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

// Получение данных из формы 

$login = $_POST['login'];
$email = $_POST['email'];
$un = $_POST['un'];
$sp = $_POST['sp'];
$pass = $_POST['pass'];

// Регистрация нового вользователя

if (!empty($login) && !empty($email) && !empty($un) && !empty($sp) && !empty($pass)) {

    $add = mysqli_query ($link, "INSERT INTO `user` (`name`, `email`, `institution`, `specialty`, `password`) 
    VALUES ('$login', '$email', '$un', '$sp', '$pass')");
    // echo "<script>document.location.href='/';</script>";

}

mysqli_close($link);
?>