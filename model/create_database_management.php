<?php 
// management 데이터 베이스 생성
$sql = "CREATE DATABASE IF NOT EXISTS management";
if(mysqli_query($conn, $sql)){
    echo "management 데이터 베이스가 생성되었습니다.<br />";
}else{
    die("데이터 베이스 생성 오류 : ".mysqli_error($conn));
}
?>