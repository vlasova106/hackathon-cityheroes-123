<? 
session_start();
$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123"); ?>

<form method="POST">
     <input name="quit" type="submit" value="Выйти" />
</form>

<?

if (isset($_POST['quit'])){
    $_SESSION['is_login']=false;
}

$id = $_SESSION['id'];
$user = mysqli_query ($link, "SELECT * FROM `user` WHERE `id` = '$id'");
while ($u = mysqli_fetch_array ($user)){
    print ('Логин: '.$u['name'].'<br><br>');
}

if ($_SESSION['is_login']==false){
    echo "<script>document.location.href='/log.php';</script>";
}


print ("<a href='/add.php'> Добавить конспект </a> <br><br>");
print ("Все записи:<br><br>");

// Вывод всех записей

$get_all = mysqli_query ($link, "SELECT * FROM `conspect` ORDER BY `value` DESC");

while ($item = mysqli_fetch_array ($get_all)){
    print ("Рейтинг: ".$item['value']."<br>");
    print ("Учебное заведение:".$item['university'].", ");
    print ("Специальность:".$item['faculty'].", ");
    print ("Курс:".$item['course'].". <br>");
    print ("Предмет:".$item['subj'].", ");
    print ("Тема:".$item['theme'].". <br>");
    print ("<a href='/post.php?post_id=".$item['id']."'>Перейти к посту</a><br><br>");
}

mysqli_close($link);
?>