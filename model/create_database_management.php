<?php 
// management 데이터 베이스가 있으면 삭제
$sql = "DROP DATABASE IF EXISTS management";
if(mysqli_query($conn, $sql)){
    echo "management 데이터 베이스가 삭제되었습니다.<br />";
}else{
    die("데이터 베이스 삭제 오류 : ".mysqli_error($conn));
}

// management 데이터 베이스 생성
$sql = "CREATE DATABASE management";
if(mysqli_query($conn, $sql)){
    echo "management 데이터 베이스가 생성되었습니다.<br />";
}else{
    die("데이터 베이스 생성 오류 : ".mysqli_error($conn));
}
?>