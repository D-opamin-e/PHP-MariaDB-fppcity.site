<?php
	include 'db.php'; /* db load */
?>


<html>
  <head>
    <title>FPP CITY 신고 | 문의 내용</title>  
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo/FPP.ico" />
    <link rel="stylesheet" href="assets/m_hurts.css?r=1"/>
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
      $bno2 = $_SESSION['id']; 
      $sql = mq("select * from sq where idx='".$bno."'"); 
      $sql2 = mq("select * from member where id='".$bno2."'"); 
      $board = $sql->fetch_array();
      $member = $sql2->fetch_array();

      if($board['u_name'] != $member['id']){
        echo "<script>alert(\"본인 문의글 외에 접근을 하실 수 없습니다.\");</script>";
        echo "<script>document.location.href='https://dopamine.gq/FPP/SQ/ban_user_notice/ban_notice.php'; </script>";
      }
    ?>

    <nav class="hurts_nav">
      <div class="container">
      <h1><a href="javascript:history.back();">이전 페이지</a>
        </h1>
      </div>
    </nav> 
    
    <header class="hurts_main">
      <div class="container">
        <h1 style="padding-bottom: 10px;"><?php echo $board['monitor']; ?><?php echo $board['title']; ?></h1>
        <h2>
        ========================================================<br />
        <?php echo nl2br("문의자(ID) : $member[id]"); ?><br />
        <?php echo nl2br("비밀번호 : $member[pw]"); ?> <br />
        <?php echo nl2br("문의날짜 : $board[uploaddate]"); ?></br>  
        ========================================================<br /><br/><br/>
        <?php echo nl2br("$board[contents]"); ?>
        </h2>
      </div>
    </header><br />

    <header class="hurts_main">
      <div class="container">
        <h1 style="padding-bottom: 10px;">답변</h1>
        <h2>
        ========================================================<br />
        <?php echo nl2br("답변날짜 : $board[answerdate]"); ?></br>  
        ========================================================<br /><br/><br/>
        <?php echo nl2br("$board[answer]"); ?>
        </h2>
      </div>
    </header><br />

    
          
          
      </div>    
    </section>
  </body>
</html>