<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./lib/jquery.js"></script>
    <link rel="stylesheet" href="./lib/bootstrap3.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>登录</title>
</head>
<body>
<div class="top">
    <div class="container-mb">
        <div class="navbar navbar-primary">
            <div class="navbar-brand"><a href="./index.php">简约论坛</a></div>
            <div>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="./index.php">个人主页</a></li>
                    <li><a href="./publish.php">发帖</a></li>
                    <li><a href="#">我发表的</a></li>
                    <li><a href="#">回复</a></li>
                    <li><a href="#">通知</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./login.php">登录</a></li>
                    <li><a href="./register.html">注册</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container container-sm">
        <h1>欢迎您注册简约论坛~</h1>
        <?php      
            if(isset($_REQUEST["flag"])){
                if($_REQUEST["flag"]==1){
        ?>
        <div class="alert alert-danger">该账号还未注册
        </div> 
        <?php
                }}
        ?>
        <div class='alert alert-success alert-style submit-right'>注册成功~~</div>
        <form id="form-sign-up" action="./registerControl.php" method="post">
            <div class="form-group">
                <label>账号</label>
                <input name='userid' type="text" class="form-control" data-rule='max_length:10||min_length:4'>
                <div class='alert alert-danger alert-style' id="username-input-error">用户名长度最小四位</div>
            </div>
            <div class="form-group">
                <label>邮箱</label>
                <input id="email" data-rule='pattern:"^[A-Za-z0-9]+\\@[A-Za-z0-9]+\\.(com|cn)$" ||max_length:20' type="text" class="form-control" name="email">
                <div class='alert alert-danger alert-style' id="email-input-error">请输入正确的邮箱地址</div>
            </div>
            <div class="form-group">
                <label>密码</label>
                <input type="password" class="form-control" name="password" data-rule='max_length:20||min_length:6'>
                <div class='alert alert-danger alert-style' id="password-input-error">密码格式错误,密码长度为6-20位</div>
            </div>
            <div class="form-group">
                <input type='submit' class="btn btn-primary btn-block" value="注册"></input>
            </div>
        </form>
    </div>
</div>
<div class="bottom"></div>
</body>
<script src="./js/validator.js"></script>
<script src="./js/input.js"></script>
<script src="./js/main.js"></script>
</html>
