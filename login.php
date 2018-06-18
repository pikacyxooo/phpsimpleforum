<?php
    session_start();
?>
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
                    <li><a href="./register.php">注册</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container container-sm">
        <?php      
            if(isset($_REQUEST["flag"])){
                if($_REQUEST["flag"]==1){
        ?>
        <div class="alert alert-danger">登陆信息有误</div>     
        <?php
            }if($_REQUEST["flag"]==2){
        ?> 
        <div class="alert alert-danger">您还未登陆</div> 
        <?php       
            }
        }
        ?>  
        <form action="loginControl.php" method="POST">
            <h1>欢迎来到简约论坛~</h1>
            <div class="form-group">
                <label>用户名:</label>
                <input type="text" name="userid" class="form-control">
            </div>
            <div class="form-group">
                <label>密码:</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="登陆">
            </div>
        </form>
    </div>
</div>
<div class="bottom"></div>