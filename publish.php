<?php
    session_start();
    header("Content-Type: text/html;charset=utf-8");  
    if(isset($_SESSION['logined'])&&$_SESSION['logined']==1){
    }else{
        header("Location:./login.php?flag=2");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./lib/jquery.js"></script>
    <link rel="stylesheet" href="./lib/bootstrap3.css">
    <link rel="stylesheet" href="./css/main.css">
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
                <?php
                    if(isset($_SESSION["logined"])){
                        if($_SESSION["logined"]==1){
                ?>
                <li class="nav-user-portrait"><img class="img-circle" src="./img/pikachu.jpg" alt=""></li>
                <li class="nav-user-name"><div>pikachu</div></li>
                <li><a href="./exitControl.php">退出登陆</a></li>
                <?php
                    }else{
                ?>
                <li><a href="./login.php">登录</a></li>
                <li><a href="./register.php">注册</a></li>
                <?php
                    }
                }else{
                ?>
                <li><a href="./login.php">登录</a></li>
                <li><a href="./register.php">注册</a></li>
                <?php
                }
                ?>
            </ul>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container container-md">
        <h1 class="main-h1">发表新的文章</h1>
        <form id="form-sign-up" action="./publishControl.php" method="post">
        <div class="form-group">
            <label>标题:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>正文:</label>
            <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="发表文章">
            <input type="button" class="btn btn-default" value="清空内容">
        </div>
    </div>
</div>
<div class="bottom"></div>