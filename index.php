<? 

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}

$university = 'Some un.';
$faculty = 'Faculty';
$year = 1;
$subj = 'Maths';
$theme = 'Subject';
$date = '15.09.2021';
$content = 'Content to test this function';



?>  