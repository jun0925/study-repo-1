<?php 
$sql = "SELECT user_id, user_pw, name FROM employee WHERE user_id = '{$id}' AND user_pw = '{$pw}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>