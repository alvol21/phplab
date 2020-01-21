<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BOLMA | Лабораторная работа №6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <scridockpt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/main.css"></style>
</head>
<body>
<?php 
session_start();
// Авторизован ли пользователь
if(!isset($_SESSION['authed'])){ ?>
    <center>
        <div class="container login-container" id="loginForm">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <img src="./assets/images/logo.png" height="165" width="256" style="margin-top:10%"/>                    
                </div>
                <div class="col-md-6 login-form-2">
                    <!-- Форма авторизации!-->
                    <form method="POST" style="margin-top:20%" action="api/user/auth.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Логин" value="" name="username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Пароль" name="password" />
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe" id="rememberText">Запомнить меня?</label>
                        </div>
                        <?php if(isset($_GET['error'])){ ?>
                            <div class="alert alert-danger" role="alert">
                                Пользователь в системе не найден!
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary loginBtn" value="Войти" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
<?php } else { include_once "./navbar.php" ?>
    <div class="card-body">
        <center><img src="./assets/images/zavod.jpg" width="512"></center>
        <br>
        <p class="text-justify"><b>ВО́ЛМА</b> — группа компаний, специализирующаяся на производстве отделочных материалов, преимущественно из гипса: сухих строительных смесей, гипсокартонных листов, пазогребневых плит. Создана на основе производственного предприятия Волгоградский гипсовый завод, который, в свою очередь, был основан в 1943 году. Собственники компании считают годом основания 1999, когда они пришли к руководству заводом. Первое юридическое лицо нынешней группы было создано в 2005 году, с этого момента и до переименования в 2007 году компания носила название «Волгоградский гипс».</p>
        <br>
        <hr>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-sm">
            <h5>Приемная</h5>
            <p>
            400019, г. Волгоград, ул. Крепильная, 128<br>
            +7 (8442) 41-44-82<br>
            <a href="mailto:officeuk@volma.ru">officeuk@volma.ru</a></P>
            </div>
            <div class="col-sm">
            <h5>Управление по логистике</h5>
            <p>
            менеджер по управлению автомобильными перевозками<br>
            Михаил Пахомов<br>
            Тел: +7 (8442) 49-39-39 доб. 10-44<br>
            <a href="mailto:pahomov@volma.ru">pahomov@volma.ru</a><br>
            </div>
            </div>
        </div>
</div>
    </div>
<?php }?>
</body>
</html>