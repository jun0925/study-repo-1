<?php
include $_SERVER['DOCUMENT_ROOT']."/inc/common.php";
if(is_login()){
    header("Location: /management.php");
}else{
    header("Location: /login.php");
}
?>