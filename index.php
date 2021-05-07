<? 
$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

print ("<a href='/add.php'> Add post </a> <br><br>");
print ("all posts:");

// Вывод всех записей

$get_all = mysqli_query ($link, "SELECT * FROM `conspect` WHERE 1");

while ($item = mysqli_fetch_array ($get_all)){
    print ("Учебное заведение:".$item['university'].", ");
    print ("Специальность:".$item['faculty'].", ");
    print ("Курс:".$item['course'].". <br>");
    print ("Предмет:".$item['subj'].", ");
    print ("Тема:".$item['theme'].". <br>");
    print ("Конспект:".$item['content']." <br><br>");
}


mysqli_close($link);
?>