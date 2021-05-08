<? session_start(); 

if ($_SESSION['is_login']==false){
    echo "<script>document.location.href='/log.php';</script>";
}

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

$id = $_SESSION['id'];
$user = mysqli_query ($link, "SELECT * FROM `user` WHERE `id` = '$id'"); 
?>

<? 
session_start();
$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123"); 

$id = $_SESSION['id'];
$user = mysqli_query ($link, "SELECT * FROM `user` WHERE `id` = '$id'");

$get_all = mysqli_query ($link, "SELECT * FROM `conspect` ORDER BY `value` DESC");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>urlex</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="asd.png">
    <!-- Custom Stylesheet -->
    	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<style>
	.nin{margin-bottom:10px;}
  .nin2{width:100%;margin-bottom:10px;}
  .has-arrow{padding-top: 28px!important;}
</style>




</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="asd.png" alt="">
                <img class="logo-compact" src="
{% static 'images/logo-text.png' %}" alt="">
                <img class="brand-title" src="
{% static 'images/logo-text.png' %}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">

                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">



                            <div class="row page-titles nav-item">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4 style="margin-top:40px">Поиск</h4>
                        </div>
                    </div>

                </div>



                        </div>
                        <?php
                        
while ($u = mysqli_fetch_array ($user)){
    print ("<h5 style='float:right'>".$u['name']."</h5>");
}
                        ?>

                     
                    </div>
                </nav>
            </div>
        </div>

        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Меню</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="form-element.php">Отправка лекции</a></li>
							<li><a href="accept.php">Найти лекцию</a></li>
							<li><a href="urlex.php">Все лекции</a></li>
                            <form method="POST">
                                <input name="quit" type="submit" class="btn btn-secondary" style="margin-left:20%" value="Выйти из аккаунта" />
                            </form>
						</ul>
                    </li>

                        </ul>

            

			</div>
        </div>

        <div class="content-body" style="min-height:300%">
            <div class="container-fluid">
          
                <div class="row">


                    <div class="col-xl-12 col-lg-12">
                        <div class="card" >
                            <div class="card-header">
                                <h4 class="card-title">Введите параметры</h4>
                            </div>

							<form method="post" style="margin-top:30px;">
                            <div class="col-xl-2 col-lg-2"></div>
                            <div class=" col-xl-8 col-lg-8" style="float:left;">
                                <div class="basic-form">
									<div class="form-group">


									<input type="text" class="form-control nin" id="yjeb" placeholder="Предмет" name="subj">
                                    <input type="text" class="form-control nin" id="yjeb" placeholder="Тема" name="theme">

  <button type="submit" class="btn btn-primary">Поиск</button>


									
										                                        </div>
 
                                </div>
                            </div>


</form>
<?

$subj = $_POST['subj'];
$theme = $_POST['theme'];

// print($subj.'____'.$theme);
$x = 0;
if (!empty($subj) & !empty($theme)){

    $find = mysqli_query($link, "SELECT * FROM `conspect` WHERE `subj` = '$subj' AND `theme` = '$theme'"); 
    $x = 1;
    while ($item = mysqli_fetch_array ($find)){
        print ('
        <div class="card" style="padding-bottom:20px;">');
    
        print ('
        
                <div class="card-header" style="margin-bottom:20px;">
                    <h4 class="card-title">Тема лекции: '.$item["theme"].' </h4>
                </div>
                
                <div class="row">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class=" col-xl-10 col-lg-10" style="float:left;"> 
                    <h5>
        
        ');
    
        print ("Рейтинг: ".$item['value']."<br>");
        print ("Учебное заведение: ".$item['university'].".<br>");
        print ("Специальность: ".$item['faculty'].", ");
        print ("Курс: ".$item['course'].". <br>");
        print ("Предмет: ".$item['subj'].". <br><br>");
    
        print ("<a href='/onelex.php?post_id=".$item['id']."'>Перейти к лекции</a><br><br>");
    
        print ('
        </h5>
        </div>
        </div>
    </div>
    ');
    $x++;
    }

    if ($x<2) {
    print ('
            <div class="card-header" style="margin-bottom:20px;">
                <h4 class="card-title">Не найдено</h4>
            </div>
    ');
    }
}



?>
				

                </div>
            </div>
        </div>
	</div>
		</div>
	</div>
    <script src="
vendor/global/global.min.js"></script>
	<script src="
vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="
vendor/chart.js/Chart.bundle.min.jss"></script>
    <script src="
js/custom.min.js"></script>
	<script src="
js/deznav-init.js"></script>
	<!-- Apex Chart -->
	<script src="
vendor/apexchart/apexchart.js"></script>
    


</body>

</html>



<?
if (isset($_POST['quit'])){
    $_SESSION['is_login']=false;
}

if ($_SESSION['is_login']==false){
    echo "<script>document.location.href='/login.php';</script>";
}

mysqli_close($link);
?>