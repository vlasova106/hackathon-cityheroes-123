
<? 
session_start();
$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123"); 

$id = $_SESSION['id'];
$user = mysqli_query ($link, "SELECT * FROM `user` WHERE `id` = '$id'");

$get_all = mysqli_query ($link, "SELECT * FROM `conspect` ORDER BY `value` DESC");

mysqli_close($link);
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
.vvb{margin-top:10px;border-radius: 10px;
    -webkit-box-shadow: 0px 0px 17px -5px rgba(34, 60, 80, 0.2);
-moz-box-shadow: 0px 0px 17px -5px rgba(34, 60, 80, 0.2);
box-shadow: 0px 0px 17px -5px rgba(34, 60, 80, 0.2);
padding-bottom:10px;
}
.content-body{
    padding:5%;
}
.cvc{text-align: center}
.has-arrow{padding-top: 28px!important;}
.vvb{padding:3%!important;}
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
                            <h4 style="margin-top:40px">Ваши лекции</h4>
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
							<li><a href="accept.php">Получение лекций</a></li>
							<li><a href="urlex.php">Ваши лекции</a></li>
                            <form method="POST">
                                <input name="quit" type="submit" class="btn btn-secondary" style="margin-left:20%" value="Выйти из аккаунта" />
                            </form>
                           
						</ul>
                    </li>

                        </ul>

            

			</div>
        </div>

        <div class="content-body" style="min-height:300%;">




        <div class="row" style="margin-top:30px;">



        <?php 

while ($item = mysqli_fetch_array ($get_all)){
    print ('<div class="col-xl-12 col-lg-12">
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
    print ("Учебное заведение:".$item['university'].", ");
    print ("Специальность:".$item['faculty'].", ");
    print ("Курс:".$item['course'].". <br>");
    print ("Предмет:".$item['subj'].", <br><br>");

    print ("<a href='/post.php?post_id=".$item['id']."'>Перейти к лекции</a><br><br>");

    print ('
    </h5>
    </div>
    </div>
</div>
</div>');
}

?>
<!-- <div class="col-xl-1 col-lg-1"></div> -->

    <!-- <div class="col-xl-12 col-lg-12">
        <div class="card" style="padding-bottom:20px;">
            <div class="card-header">
                <h4 class="card-title">Тема лекции:</h4>
            </div>

            <form method="post" action="form-element" style="margin-top:30px;">
            <div class="row">
                <div class="col-xl-1 col-lg-1"></div>
                <div class=" col-xl-10 col-lg-10" style="float:left;">
                    <h5>Дата лекции:</h5>
                    <img src="ozero.jpg" class="img-fluid">   
                </div>
            </div>
        </div>
    </div> -->




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
?>