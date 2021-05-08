<? session_start(); 

if ($_SESSION['is_login']==false){
    echo "<script>document.location.href='/log.php';</script>";
}

$link = mysqli_connect("localhost", "mysql", "mysql", "hackathon-cityheroes-123");

$id = $_SESSION['id'];
$user = mysqli_query ($link, "SELECT * FROM `user` WHERE `id` = '$id'"); 
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




.example-2 .btn-tertiary{color:#555;padding:0;line-height:40px;margin:auto;display:block;border:2px solid #555}
.example-2 .btn-tertiary:hover,.example-2 .btn-tertiary:focus{color:#888;border-color:#888}
.example-2 .input-file{width:.1px;height:.1px;opacity:0;overflow:hidden;position:absolute;z-index:-1}
.example-2 .input-file + .js-labelFile{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;padding:0 10px;cursor:pointer}
.example-2 .input-file + .js-labelFile .icon:before{content:"\f093"}
.example-2 .input-file + .js-labelFile.has-file .icon:before{content:"\f00c";color:#5AAC7B}

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
                            <h4 style="margin-top:40px">Загрузите свою лекцию</h4>
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

						</ul>
                    </li>

                        </ul>

            

			</div>
        </div>

        <div class="content-body" style="min-height:300%">
            <div class="container-fluid">
          
                <div class="row">

				<div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="card" >
                            <div class="card-header">
                                <h4 class="card-title">Введите параметры лекции</h4>
                            </div>

							<form method="post" style="margin-top:30px;">
							<div class="row">
                            <div class="col-xl-2 col-lg-2"></div>
                            <div class=" col-xl-8 col-lg-8" style="float:left;">
                                <div class="basic-form">
									<div class="form-group">
										<input type="text" class="form-control nin" id="yjeb" placeholder="Ваш курс" name="course">
										<input type="text" class="form-control nin" id="yjeb" placeholder="Предмет лекции" name="subj">
										<input type="text" class="form-control nin" id="yjeb" placeholder="Тема лекции" name="theme">
										<!-- <input type="text" class="form-control nin" id="yjeb" placeholder="Дата"> -->
										<!-- <input type="file" name="obj" class="nin2" placeholder="Место для лекции"> -->
										<div class="example-2">
  <div class="form-group">
    <!-- <input type="file" name="file" id="file" class="input-file">
    <label for="file" class="btn btn-tertiary js-labelFile">
      <i class="icon fa fa-check"></i>
      <span class="js-fileName">Загрузить файл</span>
    </label> -->
  </div>
 </div>
										<div style="width:width:100%;"><textarea name="content" class="form-control" style="margin-bottom: 10px;width:100%;"></textarea></div>
										<button type="submit" class="btn btn-primary" style="float: right; margin-bottom: 20px;">Отправить</button>

										                                        </div>
 
                                </div>
                            </div>
</div>
</form>

<? 



// Получение данных из формы 

$course = $_POST['course'];
$subj = $_POST['subj'];
$theme = $_POST['theme'];
$content = $_POST['content'];

// Формирование новой записи

$id = $_SESSION['id'];
$user = mysqli_fetch_array(mysqli_query ($link, "SELECT * FROM `user` WHERE `id`= '$id'"));
$university = $user['institution'];
$faculty = $user['specialty'];


    if (!empty($university) && !empty($faculty) && !empty($course) && !empty($subj) && !empty($theme) && !empty($content)) {
        if ($user['value']>-10){
        $add = mysqli_query ($link, "INSERT INTO `conspect` (`user_id`, `university`, `faculty`, `course`, `subj`, `theme`, `content`) VALUES ('$id','$university', '$faculty', '$course', '$subj', '$theme', '$content')");
        echo "<script>document.location.href='/urlex.php';</script>";
        }
        else {
            print ('<p style="text-align:center;">Ваш рейтинг: '.$user['value'].'<br >');
            print ('Вы не можете загрузить лекцию.</p>');
        }
    }


mysqli_close($link);

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