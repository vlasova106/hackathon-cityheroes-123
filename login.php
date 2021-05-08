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
                            <h4 style="margin-top:40px">Вход</h4>
                        </div>
                    </div>
                </div>
                        </div>
                        <h5 style="float:right"><a href="reg.php">Регистрация</a></h5>
                     
                    </div>
                </nav>
            </div>
        </div>
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span style="color:gray">Меню</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a style="color:gray">Отправка лекции</a></li>
							<li><a style="color:gray">Получение лекций</a></li>
							<li><a style="color:gray">Ваши лекции</a></li>
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
                                <h4 class="card-title">Введите данные</h4>
                            </div>
							<form method="post" action="form-element" style="margin-top:30px;">
                            <div class="col-xl-2 col-lg-2"></div>
                            <div class=" col-xl-8 col-lg-8" style="float:left;">
                                <div class="basic-form">
									<div class="form-group">
								
    <input type="text" class="form-control nin" id="yjeb" placeholder="Логин">
    <input type="password" class="form-control nin" id="yjeb" placeholder="Пароль">
  <button type="submit" class="btn btn-primary">Submit</button>
									
										                                        </div>
 
                                </div>
                            </div>
</form>
				
</form>
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
