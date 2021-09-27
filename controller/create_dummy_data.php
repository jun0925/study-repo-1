<?php 
// 더미 데이터 생성하기
$dummyData = array(
    array('test1','pw1','김철수',25,'010-0000-0001','서울 강남구','사원'),
    array('test2','pw2','김영희',27,'010-0000-0002','서울 중랑구','주임'),
    array('test3','pw3','이민준',30,'010-0000-0003','서울 도봉구','대리'),
    array('test4','pw4','박서연',32,'010-0000-0004','경기도 시흥','대리'),
    array('test5','pw5','유지호',21,'010-0000-0005','서울 강동구','사원'),
    array('test6','pw6','최윤서',22,'010-0000-0006','서울 강서구','사원'),
    array('test7','pw7','강채원',26,'010-0000-0007','서울 마포구','주임'),
    array('test8','pw8','문준우',40,'010-0000-0008','경기도 구리시','과장'),
    array('test9','pw9','도지훈',42,'010-0000-0009','경기도 남양주','차장'),
    array('test10','pw10','양지아',43,'010-0000-0010','서울 광진구','차장')
);

// management 데이터 베이스 연결
include $_SERVER['DOCUMENT_ROOT']."/model/connect_database.php";

// management 데이터 베이스 선택
include $_SERVER['DOCUMENT_ROOT']."/model/use_database_management.php";

// dummyData 생성
include $_SERVER['DOCUMENT_ROOT']."/model/create_dummy_data_employee.php";
?>