<html>
<a href="/">Отмена</a>

<form  method="POST">
    <input type="text" name="un" placeholder="Учебное заведение">
    <input type="text" name="faculty" placeholder="Специальность">
    <input type="text" name="course" placeholder="Курс">
    <input type="text" name="subj" placeholder="Предмет">
    <input type="text" name="theme" placeholder="Тема">
    <textarea name="content" cols="30" rows="10" placeholder="Конспект"></textarea>
    <input type="submit">
</form>

</html>

<? 

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

// Получение данных из формы 

$university = $_POST['un'];
$faculty = $_POST['faculty'];
$course = $_POST['course'];
$subj = $_POST['subj'];
$theme = $_POST['theme'];
$content = $_POST['content'];


// Формирование новой записи

if (!empty($university) && !empty($faculty) && !empty($course) && !empty($subj) && !empty($theme) && !empty($content)) {

    $add = mysqli_query ($link, "INSERT INTO `conspect` (`university`, `faculty`, `course`, `subj`, `theme`, `content`) VALUES ('$university', '$faculty', '$course', '$subj', '$theme', '$content')");
    echo "<script>document.location.href='/';</script>";

}

mysqli_close($link);

?>  