<?php 
$sql = "SELECT id, user_id, user_pw, name, grade FROM employee WHERE user_id = '{$id}' AND user_pw = '{$pw}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>