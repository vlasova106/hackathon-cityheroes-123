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

$sql = 'INSERT INTO conspect (university, faculty, course, subj, theme, content) VALUES ($university, $faculty, $course, $subj, $theme, $content)';
$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}

// Переадресация на главную 



?>  