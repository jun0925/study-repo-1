<?php
include $_SERVER['DOCUMENT_ROOT']."/inc/common.php";

$id = $_POST['id'];
$pw = $_POST['pw'];

// 데이터 베이스 연결
include $_SERVER['DOCUMENT_ROOT']."/model/connect_database.php";

// 로그인 정보 조회
include $_SERVER['DOCUMENT_ROOT']."/model/select_login_data.php";

if(!empty($row)){
    if($id === $row['user_id'] && $pw === $row['user_pw']){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['grade'] = $row['grade'];
        header("Location: /management.php");
    }else{
        echo '<script>alert("로그인 정보를 확인해 주세요.");location.href="/login.php";</script>';
    }
}else{
    echo '<script>alert("로그인 정보를 확인해 주세요.");location.href="/login.php";</script>';
}
?>