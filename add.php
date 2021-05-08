<? session_start(); ?>
<html>
<a href="/">Отмена</a>

<form  method="POST">
    <input type="text" name="course" placeholder="Курс">
    <input type="text" name="subj" placeholder="Предмет">
    <input type="text" name="theme" placeholder="Тема">
    <textarea name="content" cols="30" rows="10" placeholder="Конспект"></textarea>
    <input type="submit">
</form>

</html>

<? 

if ($_SESSION['is_login']==false){
    echo "<script>document.location.href='/log.php';</script>";
}

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

// Получение данных из формы 

$university = $_POST['un'];
$faculty = $_POST['faculty'];
$course = $_POST['course'];
$subj = $_POST['subj'];
$theme = $_POST['theme'];
$content = $_POST['content'];

// Формирование новой записи

$id = $_SESSION['id'];
$user = mysqli_fetch_array(mysqli_query ($link, "SELECT * FROM `user` WHERE `id`= '$id'"));


    if (!empty($university) && !empty($faculty) && !empty($course) && !empty($subj) && !empty($theme) && !empty($content)) {
        if ($user['value']>-10){
        $un = $user['institution'];
        $sp = $user['specialty'];
        $add = mysqli_query ($link, "INSERT INTO `conspect` (`user_id`, `university`, `faculty`, `course`, `subj`, `theme`, `content`) VALUES ('$id', '$un', '$sp', '$course', '$subj', '$theme', '$content')");
        echo "<script>document.location.href='/';</script>";
        }
        else {
            print ('Ваш рейтинг:'.$user['value'].'<br >');
            print ('Вы не можете публиковать записи.');
        }
    }


mysqli_close($link);

?>  