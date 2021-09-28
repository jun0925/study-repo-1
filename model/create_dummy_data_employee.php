<?php
end($dummyData); 
$lastKey = key($dummyData);

$sql = "INSERT INTO employee(user_id, user_pw, name, age, gender, phone, adress, grade) VALUE";
foreach($dummyData as $key => $val){
    $sql .= "('{$val[0]}', '{$val[1]}', '{$val[2]}', {$val[3]}, '{$val[4]}', '{$val[5]}', '{$val[6]}', '{$val[7]}')";
    if($key !== $lastKey) $sql .= ',';
}

if(mysqli_query($conn, $sql)){
    echo "더미 데이터가 생성되었습니다. <br />";
}else{
    die("더미 데이터 생성 실패 오류 : ".mysqli_error($conn));
}
?>