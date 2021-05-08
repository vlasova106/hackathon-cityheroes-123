<? 
session_start();

if ($_SESSION['is_login']==false){
    echo "<script>document.location.href='/log.php';</script>";
}

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

print ("<a href='/'> <- Все записи </a> <br><br>");

// получение id

$id = $_GET['post_id'];

// вывод поста 

$get = mysqli_query ($link, "SELECT * FROM `conspect` WHERE `id`= '$id'");

while ($item = mysqli_fetch_array ($get)){
    print ("Рейтинг поста:".$item['value']."<br>");
    $user_id = $item['user_id'];
    $user = mysqli_fetch_array(mysqli_query ($link, "SELECT * FROM `user` WHERE `id`= '$user_id'"));
    print ("Автор: ".$user['name']." <br><br>");

    print ("Учебное заведение:".$item['university'].", ");
    print ("Специальность:".$item['faculty'].", ");
    print ("Курс:".$item['course'].". <br>");
    print ("Предмет:".$item['subj'].", ");
    print ("Тема:".$item['theme'].". <br><br>");
    print ("Конспект:<br>".$item['content']);

}

// форма отправки голоса (если пользователь еще не отправлял воуты или это не его пост)

$vote = mysqli_fetch_array(mysqli_query ($link, "SELECT * FROM `vote` WHERE `post_id`= '$id' AND `user_id` = '$user_id'"));
if (empty($vote)){
    if ($user_id != $_SESSION['id']) {
        echo '
        <form method="POST">
            <input name="vote" type="submit" value="Vote" />
        </form>
        <form method="POST">
        Причина:
        <select name="cause"> 
            <option value="Несообветствие тегам">Несообветствие тегам</option>
            <option value="Спам">Спам</option>
            <option value="Неразборчивый подчерк">Неразборчивый подчерк</option>
            <option value="Нарушение условий размещения">Нарушение условий размещения</option>
        </select> 
            <input name="dis" type="submit" value="Disvote" />
        </form>';
    }
}

// отправление голоса

if (isset($_POST['vote'])){
    $add = mysqli_query ($link, "INSERT INTO `vote` (`user_id`, `post_id`, `value`, `cause`) 
        VALUES ('$user_id', '$id', 1, 'useful')");
    
    // обновление рейтинга
    $sq =mysqli_query ($link, "SELECT * FROM `vote` WHERE `post_id`=$id");
    while ($rate = mysqli_fetch_array($sq)) {
        $x = $x + $rate['value'];
    }
    $update = mysqli_query($link, "UPDATE `conspect` SET `value`= $x WHERE `id`= $id"); 
    $sq =mysqli_query ($link, "SELECT * FROM `conspect` WHERE `user_id`=$user_id");
    while ($rate = mysqli_fetch_array($sq)) {
        $x = $x + $rate['value'];
    }
    $update = mysqli_query($link, "UPDATE `user` SET `value`= $x WHERE `id`= $user_id");

    echo '<meta http-equiv="refresh" content="0">';
}

if (isset($_POST['dis'])){
    $cause = $_POST['cause'];
    $v = -1;
    $add = mysqli_query ($link, "INSERT INTO `vote` (`user_id`, `post_id`, `value`, `cause`) 
        VALUES ('$user_id', '$id', $v, '$cause')");

    // обновление рейтинга
    $sq =mysqli_query ($link, "SELECT * FROM `vote` WHERE `post_id`=$id");
    while ($rate = mysqli_fetch_array($sq)) {
        $x = $x + $rate['value'];
    }
    $update = mysqli_query($link, "UPDATE `conspect` SET `value`= $x WHERE `id`= $id");

    $sq =mysqli_query ($link, "SELECT * FROM `conspect` WHERE `user_id`=$user_id");
    while ($rate = mysqli_fetch_array($sq)) {
        $x = $x + $rate['value'];
    }
    $update = mysqli_query($link, "UPDATE `user` SET `value`= $x WHERE `id`= $user_id");
    

    echo '<meta http-equiv="refresh" content="0">';
}

mysqli_close($link);
?>