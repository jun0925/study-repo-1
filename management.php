<?php
include $_SERVER['DOCUMENT_ROOT']."/inc/common.php";
if(!is_login()){
    header("Location: /login.php");
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>직원관리 페이지</title>
    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
    <style>
        .table tbody > tr > td{
            line-height:30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="active"><a href="javascript:;">직원관리</a></li>
                    <li role="presentation"><a href="javascript:;">직원등록하기</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="이름">
                    </div>
                    <button type="submit" class="btn btn-default">조회하기</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">로그아웃</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <table class="table table-hover">
        <th>고유번호</th>
        <th>아이디</th>
        <th>이름</th>
        <th>나이</th>
        <th>연락처</th>
        <th>주소</th>
        <th>직급</th>
        <th>등록일</th>
        <th>수정일</th>
        <th>수정/삭제</th>
        <tr>
            <td>1</td>
            <td>test1</td>
            <td>김철수</td>
            <td>25</td>
            <td>010-0000-0001</td>
            <td>서울 강남구</td>
            <td>사원</td>
            <td>2021-09-28 09:14:29</td>
            <td>2021-09-28 09:14:29</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">수정</button>
                    <button type="button" class="btn btn-default">삭제</button>
                </div>
            </td>
        </tr>
    </table>

    <nav style="text-align:center">
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
    </nav>
</body>
</html>