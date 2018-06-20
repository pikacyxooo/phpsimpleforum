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
    <link rel="stylesheet" href="css/article.css">
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
                        <li><a href="./index.php">HOME</a></li>
                        <li><a href="./index.php">热门<!-- <span class="badge badge-success">50</span> --></a></li>
                        <li style="color: #ddd">德国队输了,现在天台很冷</li>
                    </ol>
                </div>
                <div>
                    <h2>德国队输了，现在天台很冷</h2>
                    <p>
                        <span class="label label-success">世界杯</span>
                        <span class="label label-info">菠菜</span>
                        <span class="label label-warning">天台</span>
                    </p>
                    <div class="main-desc">昨晚德国队输了,现在孩子老婆跑了,请问怎么办???!世界杯一到，天台就快站不下了。昨夜今晨刚刚结束的比赛日，卫冕冠军德国队被墨西哥1比0击败，夺冠大热巴西队被瑞士1比1逼平。而塞尔维亚则依靠着一记精彩任意球破门，1比0小胜哥斯达黎加。</div>
                    <button class="btn btn-primary">关注问题</button>
                    <button class="btn btn-default">我的回复</button>
                </div>
                <div class="item-groups">
                    <div class="item-group">
                        <div class="item-anthor">
                            <img class="img-thumbnail" src="./img/pikachu.jpg" alt=""> 野生皮卡出
                            <span class="text-muted item-anthor-desc">一只不知道干什么好的pikachu</span>
                        </div>
                        <div class="item-desc">
                            昨天看完球后写了一些字后来睡了一觉又不太想写了。主要观点有几个： 1.勒夫有多远滚多远，我忍他好几年了 2.德国这次的失败关键一点是小猪的状态始终没出来，踢得太差了 3.依旧坚定的认为厄齐尔不是个适合当绝对核心来用的球员，他是个二当家，一把手现在还没出来。
                        </div> 
                        <div class="item-bottom">
                            <button class="btn btn-info btn-good">赞 <span class="badge">688</span></button>
                            <button class="btn btn-danger btn-bad">踩 <span class="badge">86</span></button>
                            <button class="btn btn-default">评论</button>
                            <span class="item-time">发布于 2018-06-18</span>
                        </div>
                    </div>
                    <div class="item-group">
                        <div class="item-anthor">
                            <img class="img-thumbnail" src="./img/onion.jpg" alt=""> 葱花头
                            <span class="text-muted item-anthor-desc">苦逼刘洋党,爱吃洋葱的金融狗</span>
                        </div>
                        <div class="item-desc">
                            不能说这支球队不为赢球而来，但是这支球队好像只知道如何在领先中赢球，一旦落后却反而越发的不知道怎么打了。看得出他们压力很大，但是压力大不是借口。除了08年欧锦赛对土耳其的那场比赛之外，印象中勒夫的球队好像就没逆转过谁......
                        </div>
                        <div class="item-bottom">
                            <button class="btn btn-info btn-good">赞 <span class="badge">688</span></button>
                            <button class="btn btn-danger btn-bad">踩 <span class="badge">86</span></button>
                            <button class="btn btn-default">评论</button>
                            <span class="item-time">发布于 2018-06-18</span>
                        </div>
                    </div>
                    <div class="item-group">
                        <div class="item-anthor">
                            <img class="img-thumbnail" src="./img/nooo.jpg" alt=""> 菊花怪
                            <span class="text-muted item-anthor-desc">我天真\浪漫\不羁一生爱自由</span>
                        </div>
                        <div class="item-desc">
                            我最不能理解的就是德国队明明优势在身体，能冲能抗头球好；劣势也在身体，不够灵活。 为什么一直要主打技术流！ 玩技术流，以我德球员的天赋，再玩二十年能玩的过拉丁派？ 加强技术是对的，弥补短板是对的，我德球员如果继续发扬身体优势，再加上练练还算不错的脚下技术，难道不能所向披靡么？ 但是硬要把自己本来的优势全部放弃！然后疯狂地加强短板，然后将自己的短板作为主要竞争力去对付这方面的宗师！这尼玛是脑子里有翔么？
                        </div>
                        <div class="item-bottom">
                            <button class="btn btn-info btn-good">赞 <span class="badge">688</span></button>
                            <button class="btn btn-danger btn-bad">踩 <span class="badge">86</span></button>
                            <button class="btn btn-default">评论</button>
                            <span class="item-time">发布于 2018-06-18</span>
                        </div>
                    </div>
                    <div>
                        <ul class="pager">
                            <li><a href="#">上一页</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">下一页</a></li>
                        </ul>
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
<<script>
    // 点赞
    $(".btn-good").click(function(){
        var a = $(this).children("span").text();
        a ++;
        $(this).children("span").text(a);
    })
    // 踩
    $(".btn-bad").click(function(){
        var b = $(this).children("span").text();
        b ++;
        $(this).children("span").text(b);
    })
</script>
</html>