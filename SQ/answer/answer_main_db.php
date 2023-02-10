
<html>
  <head>
    <title>글 업로드 중...</title> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/m_hurts.css?r=1"/>
    <link href="assets/fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  <body>

  <?php
    $servername = "localhost";
    $username = "root";
    $password = "비버너어언";
    $dbname = "sunam_test";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $bno = $_POST['idx'];
    $cnts = $_POST['contents'];
    $answerdate = date("Y년 m월 d일 H시 i분");
    
    
    $sqls = "UPDATE sq SET monitor = '[처리완료]' where idx='$bno'";
    $sql = "UPDATE sq SET answer = '$cnts' where idx='$bno'";
    $date = "UPDATE sq SET answerdate = '$answerdate' where idx='$bno'";
    
    if ($conn->query($sql) === TRUE) {
      $conn->query($sqls);
      $conn->query($date);
      echo "<script>alert('답변 등록이 완료되었습니다.');</script>";
      echo "<script>history.back(-1)</script>";
    } else {
      echo "<script>alert('답변 등록을 실패하였습니다.');</script>";
      echo "<script>history.back(-1)</script>";
    }
    
    $conn->close();
  ?>

  

  </body>
</html>
