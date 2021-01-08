<?php
session_start();
$res=session_destroy(); //모든 세션 변수 지우기
if($res){
    header('Location: https://dopamine.gq/FPP/SQ/ban_user_notice/inquiryview.php '); // 로그아웃 성공 시 로그인 페이지로 이동
}
?>