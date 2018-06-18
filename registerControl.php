<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "123456";
$dbname = "simpleforum";
$userid = $_POST["userid"];
$email = $_POST["email"];
$pass = $_POST["password"];
echo $userid;
echo $email;
echo $pass;
// 创建连接
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "链接成功";
    // 开始事务
    $conn->beginTransaction();
    // SQL 语句
    $conn->exec("INSERT INTO user (userid, email, password) 
    VALUES ('".$userid."','".$email."','".$pass."')");
    
    // 提交事务
    $conn->commit();
    echo "新记录插入成功";
    header("location:./index.html");
}
catch(PDOException $e)
{
    echo $e;
}
?>