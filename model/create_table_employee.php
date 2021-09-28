<?php
// employee 테이블이 있다면 삭제
$sql = "DROP TABLE IF EXISTS employee";
if(mysqli_query($conn, $sql)){
    echo "employee 테이블이 삭제되었습니다.<br />";
}else{
    die("employee 테이블 삭제 오류 : ".mysqli_error($conn));
} 

// employee 테이블 생성
$sql = "CREATE TABLE employee (
    id int unsigned NOT NULL PRIMARY KEY auto_increment,
    user_id varchar(50) NOT NULL UNIQUE,
    user_pw varchar(50) NOT NULL,
    name varchar(30) NOT NULL,
    age tinyint unsigned NOT NULL,
    gender varchar(2) NOT NULL,
    phone varchar(13) NOT NULL,
    adress varchar(255) NOT NULL,
    grade varchar(30) NOT NULL,
    created_at timestamp NOT NULL DEFAULT current_timestamp,
    updated_at timestamp NOT NULL DEFAULT current_timestamp ON UPDATE current_timestamp
)";
if(mysqli_query($conn, $sql)){
    echo "employee 테이블이 생성되었습니다.<br />";
}else{
    die("employee 테이블 생성 오류 : ".mysqli_error($conn));
}
?>