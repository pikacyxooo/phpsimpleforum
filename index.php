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
    <link rel="stylesheet" href="./css/index.css">
    <title>登录</title>
</head>
<body>
<div class="top ">
    <div class="navbar navbar-primary container-mb">
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
<div class="main clearfix">
    <div class="main-left col-md-7 clearfix">
        <div class="container-bg pull-right">
            <div class="main-nav">
                <ol class="breadcrumb">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">热门<span class="badge badge-success">50</span></a></li>
                </ol>
            </div>
            <div class="item-groups">
                <div class="item-group">
                    <div class="item-anthor">
                        <img class="img-thumbnail" src="./img/pikachu.jpg" alt="">
                        野生皮卡出<span class="text-muted item-anthor-desc">一只不知道干什么好的pikachu</span>
                    </div>
                    <h3 class="item-title"><a href="#">德国队输了,现在天台很冷</a></h3>
                    <div class="item-desc">
                            昨晚德国队输了,现在孩子老婆跑了,请问怎么办???!世界杯一到，天台就快站不下了。昨夜今晨刚刚结束的比赛日，卫冕冠军德国队被墨西哥1比0击败，夺冠大热巴西队被瑞士1比1逼平。而塞尔维亚则依靠着一记精彩任意球破门，1比0小胜哥斯达黎加。
                    </div>
                </div>
                <div class="item-group">
                    <div class="item-anthor">
                        <img class="img-thumbnail" src="./img/onion.jpg" alt="">
                        葱花头<span class="text-muted item-anthor-desc">苦逼刘洋党,爱吃洋葱的金融狗</span>
                    </div>
                    <h3 class="item-title"><a href="#">金融行业的哪些工作可以达到年薪 50 万?</a></h3>
                    <div class="item-desc">
                            高考落榜的高中生，步入社会后工作了几年，后来不知道遇上好心人带进金融行业从“0”发展，请问学历不是很高的人在金融行业赚到这么多钱是机遇大过努力还是努力大过机遇.我再过两年也本科毕业了，我在想金融是不是一个普通本科大学生优质的就业方向？学校金
                            融系的人数众多，潜意识也感觉金融相比较其他行业捞金速度快啊！
                    </div>
                </div>
                <div class="item-group">
                    <div class="item-anthor">
                        <img class="img-thumbnail" src="./img/nooo.jpg" alt="">
                        菊花怪<span class="text-muted item-anthor-desc">我天真\浪漫\不羁一生爱自由</span>
                    </div>
                    <h3 class="item-title"><a href="#">国内有哪些非古迹类的人少、好玩的地方？</a></h3>
                    <div class="item-desc">
                        请大家顺便标上省、市、县，交通情况和住宿情况，谢谢啦(๑╹◡╹)ﾉ✿
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="main-right col-md-5 clearfix">
        <div class="main-right-container clearfix">
            <div class="right-nav  container-sm-right">
                <div class="right-nav-top clearfix">
                    <?php
                        if(isset($_SESSION["logined"])){
                            if($_SESSION["logined"]==1){
                    ?>
                    <div class="user-portrait clearfix">
                        <img class="img-thumbnail" src="./img/pikachu.jpg" alt="">
                        <span class="user-name">pikachu</span>
                    </div>
                    <div class="user-desc">一只不知道干什么好的pikachu</div>
                    <?php
                        }else{
                    ?>
                    <a class="btn btn-default col-md-6" href="./login.php">登陆</a>
                    <a class="btn btn-default col-md-6" href="./register.php">注册</a>
                    <?php
                        }
                    }else{
                    ?>
                    <a class="btn btn-default col-md-6" href="./login.php">登陆</a>
                    <a class="btn btn-default col-md-6" href="./register.php">注册</a>
                    <?php
                    }
                    ?>
                </div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">我的</a></li>
                    <li><a href="#">帖子</a></li>
                    <li><a href="#">回复</a></li>
                    <li><a href="#">私信</a></li>
                </ul>
                <div class="web-info clearfix">
                    <div class="web-info-img">
                        <img src="./img/background.jpg" alt="">
                    </div>
                    <div class="web-info-link clearfix">
                        <ol><a href="#">简易指南</a></ol>
                        <ol><a href="#">简易政策</a></ol>
                        <ol><a href="#">反馈简易</a></ol>
                    </div>
                    <div class="web-info-desc">
                        <div class="info-item"><a href="#">侵权举报网上有害信息举报专区</a></div>
                        <div class="info-item"><a href="#">违法和不良信息举报：010-82716601</a></div>
                        <div class="info-item"><a href="#">儿童色情信息举报专区</a></div>
                        <div class="info-item"><a href="#">联系我们 © 2018 简易</a></div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>
</body>
</html>