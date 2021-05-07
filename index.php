<? 

print ("<a href='/add.php'> Add post </a> <br><br>");

print ("all posts:");

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

$get_all = mysqli_query ($link, "SELECT * FROM `conspect` WHERE 1");

while ($item = mysqli_fetch_array ($get_all)){
    print ("Учебное заведение:".$item['university'].", ");
    print ("Специальность:".$item['faculty'].", ");
    print ("Курс:".$item['course'].". <br>");
    print ("Предмет:".$item['subj'].", ");
    print ("Тема:".$item['theme'].". <br>");
    print ("Конспект:".$item['content']." <br><br>");
}
$subj = $_POST['subj'];
$theme = $_POST['theme'];
$content = $_POST['content'];


mysqli_close($link);

?>