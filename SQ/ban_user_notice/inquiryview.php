<html>
<?php
require("ip.php");
$blockmsg = "VPN 혹은 프록시 변경이 의심되어 접근이 차단되었으며 정상적인 접근임에도 메시지가 출력된다면 다른 기기로 페이지 재접속 부탁드립니다.";
$IP = new IP();
if(in_array($IP->getCountryCode(), array("KR"))){

} else {
  die($blockmsg);
}
?>

  <head>
    <title>문의자 로그인</title> 
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo/FPP.ico" />
    <link rel="stylesheet" href="assets/login_m_hurts.css?r=2"/>
    <link href="assets/fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
  <body class="hurts_body">

  <?php include("php/nav_admin.php"); ?>

  <section class="hurts_login">
        <div class="container">
            <h1>FPP CITY 문의 로그인</h1><br /><br />
            <form method="post" action="login_check.php"> 
            <form method="post" action="ban_notice.php"> 
            <div class="input-group mb-3 login_max_width">
              <input type="text" style="text-align: center;" id="id" name="id" autocomplete="off" class="hurts_input" placeholder="아이디" aria-label="아이디" aria-describedby="basic-addon1"> 
            </div> 
            <div class="input-group mb-3 login_max_width">
              <input type="password" style="text-align: center;" id="pw" name="pw" autocomplete="off" class="hurts_input" placeholder="비밀번호" aria-label="비밀번호" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 login_max_width">
              <button type="submit" class="hurts_btn btn-outline-dark">로그인 <i class="fas fa-angle-right"></i></button></form>   |     <button type="submit" class="hurts_btn btn-outline-dark"><a href="https://dopamine.gq/FPP/SQ/signup.php">회원가입 </a><i class="fas fa-angle-right"></i></button> 
            </div>
        </div>
    </section>
    <footer class="hurts_footer">
        <div class="container">
          <ab>Dopamine 2020 (C) 모든 권한 보유.</ab>  |  <a href="https://dopamine.gq/FPP/index.php">매니저 로그인</a>
        </div>
      </footer>
  </body>
</html> 