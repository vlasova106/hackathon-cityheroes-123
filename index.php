<? 

print ("<a href='/add.php'> Add post </a> <br>");

print ("all posts:");

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

mysqli_close($link);

?>