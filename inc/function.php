<?php 
/**
 * 로그인 체크
 */
function is_login(){
    if(empty($_SESSION)){
        return false;
    }else{
        return true;
    }
}
?>