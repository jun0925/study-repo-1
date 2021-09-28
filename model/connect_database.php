<?php
// 설정파일
include $_SERVER['DOCUMENT_ROOT']."/config/env.php";
// 데이터 베이스 연결
$conn = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database'],$db['port']);
if(mysqli_connect_errno()){
    die("MySQL 연결 오류: ".mysqli_connect_error());
}
?>