<?php
  include 'db.php'; /* db load */
?>

<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="assets/popupcss/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/popupcss/css/noscript.css" /></noscript> -->
    <title>FPP CITY 신고 | 문의</title> 
    <script data-ad-client="ca-pub-1810816506678938" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo/FPP.ico" />
    <link rel="stylesheet" href="assets/m_hurts.css?r=1"/>
    <link href="assets/fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> 
    <script> AOS.init(); </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script> const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: Dark)').matches 
    console.log(prefersDark); </script>

    <script src="https://www.google.com/recaptcha/api.js?render=6Lc0c-cUAAAAAHXuXLW3-teZZNNXYFd1qwHQ6CoG"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lc0c-cUAAAAAHXuXLW3-teZZNNXYFd1qwHQ6CoG', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>


  <body class="hurts_body">
        
  <?php
    session_start();
    if(!isset($_SESSION['id'])) //세션이 존재하지 않을 때
    {
        header ('Location: https://dopamine.gq/FPP/SQ/ban_user_notice/inquiryview.php');
    }
  ?>

    <header class="hurts_main">
      <div class="container">
        <h1>FPP CITY 문의 글쓰기 | <a href="https://dopamine.gq/FPP/SQ/ban_user_notice/ban_notice.php">문의 답변 조회</a></h1>
      </div>
    </header>
    　 
    <section class="hurts_write">
      <div class="container">
      <div class="alert alert-danger" role="alert">
            본 페이지는 FPP CITY와는 별도로 FPP CITY 내에 매니저인 Dopamine이 개발하여 운영을 하는 밴 유저 문의 페이지입니다.<br/>
            페이지 개발자 단독 판단하에 비매너 게시글 성향이 띌 경우, IP 차단을 당하실 수 있습니다.
            </div>
        <form method="post" action="main_db.php">
        <input type="hidden" name="hide" value="<?php echo $_SESSION['id']; ?>">
          <div class="input-group mb-3">
            <input type="text" id="title" name="title" autocomplete="name" class="hurts_input" placeholder="제목을 입력해주세요." aria-label="제목" aria-describedby="basic-addon1" required> 
          </div>
          <div class="input-group mb-3">
            <textarea type="text" id="contents" autocomplete="name" name="contents" cols="40" rows="10" class="hurts_input" placeholder="신고 및 문의하실 내용을 입력해주세요.&#13;&#10;&#13;&#10;매니저, 개발자에 대해 비난이나 비판에 대해 자제 부탁드리며, 글을 업로드시 서버에 업로드자의 IP가 저장됩니다.&#13;&#10;&#13;&#10;※ 추가 자료(영상, 이미지 등등) 제출이 필요하신 경우, 구글 드라이브 혹은 N드라이브를 활용하여 공유 부탁드립니다." aria-label="내용" aria-describedby="basic-addon1" required></textarea>
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
          </div>
          <div class="input-group mb-3">
            <button type="submit" class="hurts_btn btn-outline-dark">완료 <i class="fas fa-angle-right"></i></button>
            <span style="margin-right: 10px;"></span>
          </div>  
        </form>
      </div>
  
      
    </section>

    <footer class="hurts_footer">
        <div class="container">
        <p><a style="margin-right: 10px;" href="https://dopamine.gq/FPP_privacypolicy.php" target="_blank">개인정보 처리방침 <i class="fas fa-angle-right"></i></a>
                  <p>Dopamine 2020 (C) 모든 권한 보유.</p>
        </div>
      </footer>



  </body>
</html>