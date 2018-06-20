<?php
session_start();
include("./config.php");
$userid = $_SESSION["userid"];
$title = $_POST["title"];
$content = $_POST["content"];
// 创建连接
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "链接成功";
   
    // 开始事务
    $conn->beginTransaction();
    // SQL 语句
    $conn->query("SET NAMES utf8");
    $code = rand(10000000, 99999999); 
    $codeStr = (string)$code;
    echo $codeStr;
    $conn->exec("INSERT INTO article (userid,articleid,title,content) 
    -- userid,    '".$userid."',
    VALUES ('".$userid."','".$codeStr."','".$title."','".$content."')");
    // 提交事务
    $conn->commit();
    echo "新记录插入成功";
    header("location:./index.php");
}
catch(PDOException $e)
{
    echo $e;
}
?>