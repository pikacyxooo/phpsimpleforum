<?php
    session_start();
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    echo $userid;
    echo "<br>";
    echo $password;
    echo "<br>";    
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "123456";
    $dbname = "simpleforum";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
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
                header("Location:./index.php");
            }else{
                echo "验证失败";
                header("Location:./login.php?flag=1");
            }
        }
    } else {
        header("Location:register.php");
        echo "0 结果";
    }
    $conn->close();
?>