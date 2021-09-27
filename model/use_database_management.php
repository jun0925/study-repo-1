<?php 
$sql = "USE management";
if(mysqli_query($conn, $sql)){
    echo "management 데이터베이스가 선택되었습니다.<br />";
}else{
    die("데이터베이스 선택 오류 : ".mysqli_error($conn));
}
?>