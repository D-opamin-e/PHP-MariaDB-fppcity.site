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
    
  <body class="hurts_body">
    <?php
      $bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
      $sql = mq("select * from sq where idx='".$bno."'"); /* 받아온 idx값을 선택 */
      $sql2 = mq("select * from member where id='$board[u_name]'"); 
      $board = $sql->fetch_array();
      $member = $sql2->fetch_array();
    ?>
        <?php
      $sql2 = mq("select * from member where id='$board[u_name]'"); 
      $member = $sql2->fetch_array();
    ?>

    <nav class="hurts_nav">
      <div class="container">
      <h1><a href="https://dopamine.gq/FPP/SQ/FPP_CITY_SQ_LIST.php">게시글 리스트</a>   |
      <a href="https://dopamine.gq/FPP/manage.php">관리자 페이지</a>
        </h1>
      </div>
    </nav> 
    
    <header class="hurts_main">
      <div class="container">
        <h1 style="padding-bottom: 10px;"><?php echo $board['monitor']; ?><span style="padding-left: 10px;"></span><?php echo $board['title']; ?></h1>
        <h2>
        ========================================================<br />
        <?php echo nl2br("디스코드#태그 : $member[discord]"); ?> <br />
        <?php echo nl2br("문의자(ID) : $board[u_name]"); ?><br />
        <?php echo nl2br("비밀번호 : $member[pw]"); ?> <br />
        <?php echo nl2br("접수일 : $board[uploaddate]"); ?></br>  
        ========================================================<br /><br/><br/>
        <?php echo nl2br("$board[contents]"); ?>
        </h2>
      </div>
    </header><br />



          <section class="hurts_write">
      <div class="container">
              <form method="post" action="answer/answer_main_db.php">
                <input type="hidden" name="idx" value="<?=$bno?>" />
                <div class="input-group mb-3">
                  <textarea type="text" id="contents" autocomplete="name" name="contents" cols="40" rows="10" class="hurts_input" placeholder="답변 내용을 작성해주세요." aria-label="내용" aria-describedby="basic-addon1" required></textarea>
                </div>
                <div class="input-group mb-3 login_max_width">
                  <button type="submit" class="hurts_btn btn-outline-dark">업로드 <i class="fas fa-angle-right"></i></button> 
                </div>
              </form>
        <div class="input-group mb-3">
          <button type="submit" class="hurts_btn btn-outline-dark"  Onclick="location.href='tag/delete.php?idx=<?php echo $board['idx']; ?>'">삭제 <i class="fas fa-angle-right"></i></button> | <button type="submit" class="hurts_btn btn-outline-dark"  Onclick="location.href='tag/save.php?idx=<?php echo $board['idx']; ?>'">보류 <i class="fas fa-angle-right"></i></button>
          </div>

          
          
      </div>    
    </section>
  </body>
</html>