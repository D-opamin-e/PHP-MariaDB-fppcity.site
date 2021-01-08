<?php
$mysqli = mysqli_connect("localhost","root","dopamine2312@@","sunam_test");


function mq($sql){
    global $mysqli;
    return $mysqli->query($sql);
}

session_start();

$discord = $_POST['discord'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw_check = $_POST['pw_check'];
$signupdate = date("Y년 m월 d일 H시 i분");
$ip = $_SERVER['REMOTE_ADDR'];


$idcheck = mysqli_fetch_array(mq('SELECT * FROM member WHERE `id`=\''.$id.'\''));
if($idcheck['id'] == $id) {
    echo("<script>alert('이미 사용 중인 아이디입니다. 다른 아이디를 선택해주세요.');</script>");
    echo "<script>history.back(-1)</script>";
    exit;
}

// Rule Check
 if(!preg_match('/^([A-Za-z0-9!@#]{4,64})$/', $pw)) {
    echo("<script>alert('유효한 암호를 입력하세요. 암호는 4자 이상, 64자 미만의 영문 대, 소문자, 숫자, 특수기호를 사용하여 구성할 수 있습니다.');</script>");
    echo "<script>history.back(-1)</script>";
    exit;
}else if($pw != $pw_check) {
    echo("<script>alert('암호와 암호 확인이 서로 일치하지 않습니다.');</script>");
    echo "<script>history.back(-1)</script>";
    exit;
}



$sqlq = "insert into member (id, pw, discord, signupdate, ip) values('".$id."','".$pw."', '".$discord."', '".$signupdate."', '".$ip."')";
$sql = mq($sqlq);
echo("<script>alert('회원가입이 완료되었습니다');</script>");
echo "<script>document.location.href='https://dopamine.gq/FPP/SQ/ban_user_notice/inquiryview.php'; </script>";
?>