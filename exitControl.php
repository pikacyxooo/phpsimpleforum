<?php
    session_start();
    $_SESSION['logined']=0;
    header("Location:./index.php"); 
?>