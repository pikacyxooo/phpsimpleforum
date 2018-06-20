<?php
    session_start();
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    include("./config.php");
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname,$port);
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    $sql = "SELECT userid, password FROM user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // 输出数据
        while($row = $result->fetch_assoc()) {
            if($userid==$row["userid"]&&$password==$row["password"]){           
                $_SESSION["logined"]=1;
                $_SESSION["userid"]=$userid;          
                if(isset($_POST["remember"])){
                    setcookie("userid",$userid,time()+3600*6);//time()+600指600秒后cookie失效
                }
                header("Location:./index.php");
                return;
            }             
        }
        echo "验证失败";
        header("Location:./login.php?flag=1"); 
    }else {
        header("Location:register.php?flag=1");
        echo "0 结果";
    }
    $conn->close();
?>