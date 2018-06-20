<?php
include("./config.php");
$userid = $_POST["userid"];
$email = $_POST["email"];
$pass = $_POST["password"];
echo $userid;
echo $email;
echo $pass;
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
    $conn->exec("INSERT INTO user (userid, email, password) 
    VALUES ('".$userid."','".$email."','".$pass."')");
    
    // 提交事务
    $conn->commit();
    echo "新记录插入成功";
    header("location:./login.php");
}
catch(PDOException $e)
{
    echo $e;
}
?>