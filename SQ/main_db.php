
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
    $password = "dopamine2312@@";
    $dbname = "sunam_test";

    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $u_name =  $_POST['hide'];
    $uploaddate = date("Y년 m월 d일 H시 i분");
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO sq (title, contents, uploaddate, ip, u_name)
    VALUES ('$title', '$contents', '$uploaddate', '$ip', '$u_name')";

    function ipBlock($ip, $iplist) {
      
      foreach ($iplist as $value) { 
      if (strpos($ip, $value) === 0) return true;
      else continue; 

      }
      return false;
    }

    $ip = $_SERVER['REMOTE_ADDR']; 

    $iplist = array(
                  "162.158.119.77"
              );


    if(ipBlock($ip, $iplist)) {
      echo "<script>alert(\"관리자에 의해 차단된 사용자입니다.\");</script>";
      echo "<script>document.location.href='https://dopamine.gq/FPP/SQ/index.php'; </script>";
    } else if ($conn->query($sql) === TRUE) {
      echo "<script>alert(\"게시글 등록이 완료되었습니다.\");</script>";
      echo "<script>document.location.href='https://dopamine.gq/FPP/SQ/ban_user_notice/ban_notice.php'; </script>";
    } else {
      echo "<script>alert(\"오류가 발생했습니다.\");</script>";
      echo "<script>document.location.href='https://dopamine.gq/FPP/SQ/index.php'; </script>";
    }

    $conn->close();
  ?>

  </body>
</html>