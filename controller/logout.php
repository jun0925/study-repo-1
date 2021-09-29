<?php 
include $_SERVER['DOCUMENT_ROOT']."/inc/common.php";
session_unset();
session_destroy();
echo '<script>location.href="/"</script>';
?>