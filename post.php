<? 
$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

print ("<a href='/'> <- Все записи </a> <br><br>");

// Получение id

$id = $_GET['post_id'];

// Вывод поста 

$get_all = mysqli_query ($link, "SELECT * FROM `conspect` WHERE `id`= '$id'");

while ($item = mysqli_fetch_array ($get_all)){
    print ("Учебное заведение:".$item['university'].", ");
    print ("Специальность:".$item['faculty'].", ");
    print ("Курс:".$item['course'].". <br>");
    print ("Предмет:".$item['subj'].", ");
    print ("Тема:".$item['theme'].". <br><br>");
    print ("Конспект:<br>".$item['content']);

}

mysqli_close($link);
?>