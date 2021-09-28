<?php 
// 데이터 베이스 연결
include $_SERVER['DOCUMENT_ROOT']."/model/connect_database.php";

// management 데이터 베이스 생성
include $_SERVER['DOCUMENT_ROOT']."/model/create_database_management.php";

// management 데이터 베이스 선택
include $_SERVER['DOCUMENT_ROOT']."/model/use_database_management.php";

// employee 테이블 생성
include $_SERVER['DOCUMENT_ROOT']."/model/create_table_employee.php";

echo "<a href=\"/setting.php\">설정으로 돌아가기</a>";
?>