<?php
    session_start();
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "123456";
    $dbname = "simpleforum";
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
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    $sql = "select u.userid,u.userdesc,a.title,a.content,a.articleid from user as u inner join article as a on u.userid = a.userid;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // $row=$result->fetch_all(MYSQLI_BOTH);
        // $n = 0;
        // while($n<mysqli_num_rows($result)){
        //     $articleid = $row[$n]["articleid"];
        //     $userid = $row[$n]["userid"];
        //     $userdesc = $row[$n]["userdesc"];
        //     $title = $row[$n]["title"];
        //     $content = $row[$n]["content"];
        //     $article = new Article($userid,$userdesc,$articleid,$title,$content);
        //     $article_list[$articleid] = $article;
        //     $n++;
        // }
        while($row = $result->fetch_assoc()) {
            // if($userid==$row["userid"]&&$password==$row["password"]){           
            //     $_SESSION["logined"]=1;
            //     $_SESSION["userid"]=$userid;
            $articleid = $row["articleid"];
            $userid = $row["userid"];
            $userdesc = $row["userdesc"];
            $title = $row["title"];
            $content = $row["content"];
            $article = new Article($userid,$userdesc,$articleid,$title,$content);
            $article_list[$articleid] = $article;
        }
    }
    foreach($article_list as $key => $value){
        echo $article_list[$key]->getUserDesc();
        echo "<br>";
    }
    $conn->close();
?>