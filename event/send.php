
<html>
  <head>
    <title>FPP CITY 이벤트 페이지</title> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fppcity.site/SQ/ban_user_notice/assets/login_m_hurts.css?r=2"/>
    <link href="assets/fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
    
  <body class="hurts_body">

  <?php
      $bno = $_GET['idx']; 
      $sql = mq("select * from random where idx='".$bno."'"); 
      $sql2 = mq("select * from member where id='".$bno2."'"); 
      $board = $sql->fetch_array();
      $member = $sql2->fetch_array();

      if($board['u_name'] != $member['id']){
        echo "<script>alert(\"본인 문의글 외에 접근을 하실 수 없습니다.\");</script>";
        echo "<script>document.location.href='https://fppcity.site/SQ/ban_user_notice/ban_notice.php'; </script>";
      }
    ?>

  <section class="hurts_login">
        <div class="container">
            <h1>FPP CITY x JAYWORKS<br /><small>이벤트 페이지</small></h1>
            <?php include("signup/module/TOS.php") ?>
            <form method="post" action="signup/module/signup_c.php"> 
            <div class="input-group mb-3 login_max_width">
              <small>디스코드닉네임#태그</small>
            <input type="text" style="text-align: center;" id="discord" name="discord" autocomplete="off" class="hurts_input" placeholder="디스코드#태그" aria-label="디스코드#태그" aria-describedby="basic-addon1"> 
            </div> 
            <div class="input-group mb-3 login_max_width">
              <small>계정 ID | <small>계정ID(숫자)를 붙여넣어주세요.</small></small>
            <input type="text" style="text-align: center;" id="discord_id" name="discord_id" autocomplete="off" class="hurts_input" placeholder="계정 ID" aria-label="계정 ID" aria-describedby="basic-addon1"> 
            </div> 
            <div class="input-group mb-3 login_max_width">
              <small>성함</small>
            <input type="text" style="text-align: center;" id="name" name="name" autocomplete="off" class="hurts_input" placeholder="성함" aria-label="성함" aria-describedby="basic-addon1"> 
            </div> 
            <div class="input-group mb-3 login_max_width">
              <small>주소</small>
              <input type="text" style="text-align: center;" id="adress" name="adress" autocomplete="off" class="hurts_input" placeholder="주소" aria-label="주소" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 login_max_width">
              <small>전화번호</small>
              <input type="text" style="text-align: center;" id="pw_check" name="pw_check" autocomplete="off" class="hurts_input" placeholder="전화번호" aria-label="전화번호" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 login_max_width">
              <button type="submit" class="hurts_btn btn-outline-dark">전송 <i class="fas fa-angle-right"></i></button> 
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