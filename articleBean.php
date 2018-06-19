<?php
    $article_list = array();
    class Article{
        var $userid;
        var $userdesc;
        var $articleId;
        var $title;
        var $content;
        function __construct($id,$desc,$aid,$tie,$con){
            $this->userid = $id;
            $this->userdesc = $desc;
            $this->articleId = $aid;
            $this->title = $tie;
            $this->content = $con;
        }
        function setUserId($par){
            $this->userid = $par;
        }
        function getUserId(){
            return $this->userid;
        }
        function getUserDesc(){
            return $this->userdesc;
        }
        function setUserDesc($par){
            $this->userdesc = $par;
        }
        function setTitle($par){
            $this->title = $par;
        }
         
        function getTitle(){
            return $this->title;
        }
        function setContent($par){
            $this->content = $par;
        }
         
        function getContent(){
            return $this->content;
        }
        function getArticleId(){
            return $this->articleId;
        }
        function setArticleId($par){
            $this->arctileId = $par;
        }
    }
    $article1 = new Article("admin","这个人很懒,什么都没有留下","5324123432141","德国队输了,现在天台很冷","昨晚德国队输了,现在孩子老婆跑了,请问怎么办???!世界杯一到，天台就快站不下了");
    $article2 = new Article("admin2","这个人很懒,什么都没有留下","7324123432141","意大利队输了,现在天台很冷","昨晚意大利队输了,现在孩子老婆跑了,请问怎么办???!世界杯一到，天台就快站不下了");
    $userid = $article1->getUserId();
    $userdesc =  $article1->getUserDesc();
    $articleId = $article1->getArticleId();
    $title =  $article1->getTitle();
    $content =  $article1->getContent();
    $userid2 = $article2->getUserId();
    $userdesc2 =  $article2->getUserDesc();
    $articleId2 = $article2->getArticleId();
    $title2 =  $article2->getTitle();
    $content2 =  $article2->getContent();
    $article_list[$articleId] = $article1;
    $article_list[$articleId2] = $article2;
    echo count($article_list);
    echo "<br>";
    print_r($article_list);
?>