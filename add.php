<html>

<form action="">

</form>


</html>


<? 

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

// Получение данных из формы 

$university = 'Some un.';
$faculty = 'Faculty';
$course = 1;
$subj = 'Maths';
$theme = 'Subject';
$content = 'Content to test this function';

// Проверки


// Формирование новой записи

$add = mysqli_query ($link, "INSERT INTO `conspect` (`university`, `faculty`, `course`, `subj`, `theme`, `content`) VALUES ('$university', '$faculty', '$course', '$subj', '$theme', '$content')");

// Переадресация на главную 

echo "<script>document.location.href='/http://hackathon-cityheroes-123';</script>";

mysqli_close($link);

?>  