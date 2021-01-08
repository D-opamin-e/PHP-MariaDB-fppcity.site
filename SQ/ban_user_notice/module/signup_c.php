<?php
$mysqli = mysqli_connect("localhost","root","dopamine2312@@","sunam_test");


function mq($sql){
    global $mysqli;
    return $mysqli->query($sql);
}

session_start();

$id = $_POST['u_name'];
$pw = $_POST['y_name'];
$uploaddate = date("Y년 m월 d일 H시 i분");
$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];


$sqlq = "insert into user (userid, userpw, ip, date) values('".$id."','".$pw."', '".$ip."', '".$uploaddate."')";
$sql = mq($sqlq);
echo("<script>alert('회원가입이 완료되었습니다');</script>");
echo "<script>document.location.href='https://dopamine.gq/FPP/index.php'; </script>";
?>