
<html>
  <head>
    <title>FPP CITY 문의자 회원가입</title> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="ban_user_notice/assets/login_m_hurts.css?r=2"/>
    <link href="assets/fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
    
  <body class="hurts_body">

  <section class="hurts_login">
        <div class="container">
            <h1>문의자 회원가입</h1><br /><br />
            <form method="post" action="signup/module/signup_c.php"> 
            <div class="input-group mb-3 login_max_width">
              <small>디스코드#닉네임</small>
            <input type="text" style="text-align: center;" id="discord" name="discord" autocomplete="off" class="hurts_input" placeholder="디스코드#태그" aria-label="디스코드#태그" aria-describedby="basic-addon1"> 
            </div> 
            <div class="input-group mb-3 login_max_width">
              <small>아이디</small>
            <input type="text" style="text-align: center;" id="id" name="id" autocomplete="off" class="hurts_input" placeholder="아이디" aria-label="아이디" aria-describedby="basic-addon1"> 
            </div> 
            <div class="input-group mb-3 login_max_width">
              <small>비밀번호</small>
              <input type="password" style="text-align: center;" id="pw" name="pw" autocomplete="off" class="hurts_input" placeholder="비밀번호" aria-label="비밀번호" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 login_max_width">
              <small>비밀번호 재확인</small>
              <input type="password" style="text-align: center;" id="pw_check" name="pw_check" autocomplete="off" class="hurts_input" placeholder="비밀번호 재확인" aria-label="비밀번호 재확인" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 login_max_width">
              <button type="submit" class="hurts_btn btn-outline-dark">회원가입 <i class="fas fa-angle-right"></i></button> 
            </div>
            </form>     
        </div>
    </section>


    

    <footer class="hurts_footer">
        <div class="container">
          <p>Dopamine 2020 (C) 모든 권한 보유.</p>  
        </div>
      </footer>
  </body>
</html> 