
<html>
  <head>
    <title>FPP CITY 신고 | 문의 리스트</title>  
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo/FPP.ico" />
    <link rel="stylesheet" href="assets/m_hurts.css?r=1"/>
    <link href="assets/fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php

session_start();
if(!isset($_SESSION['userid'])) //세션이 존재하지 않을 때
{
    header ('Location: https://dopamine.gq/FPP/sq/index.php');
}

?>


  <body class="hurts_body">

    <nav class="hurts_nav">
      <div class="container">
        <a href="https://dopamine.gq/FPP/manage.php"><h1>관리자 페이지로</h1></a>
      </div>
    </nav> 
    
    <header class="hurts_main">
      <div class="container">
        <h1 style="padding-bottom: 10px;">게시판</h1>
      </div>
    </header><br />

    <section class="hurts_table">
      <div class="container">
      
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "비밀번호!";
      $dbname = "sunam_test";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT idx, title, contents, uploaddate FROM sq";
      $sql = "SELECT * FROM sq ORDER BY idx DESC";
      $result = $conn->query($sql);
 
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class=\"hurts_table_box\">";
            echo "<div class=\"container\">";
            echo "<p>" . $row["u_name"]. "</p>";
            echo "<p>" . $row["uploaddate"]. "</p>";
            echo "<a href='view.php?idx=" . $row["idx"]."'>";
            echo "<h1>" .$row["monitor"].  $row["title"]. "</h1></a>";
            echo "</div>";
            echo "</div><br />";
          }
      } else {
          echo "<div style=\"text-align: left; font-family: 'nanumsquare'; color: black;\">"; 
          echo "게시글이 없습니다."; 
          echo "</div>";
      }

      $conn->close();
      ?>

    </div>
    </section>

    <footer class="hurts_footer">
        <div class="container">
          <p>Dopamine 2020 (C) 모든 권한 보유.</p>
          <p><a style="margin-right: 10px;" href="https://dopamine.gq/FPP_privacypolicy.php">개인정보 처리방침 <i class="fas fa-angle-right"></i></a>|     <a style="margin-left: 10px;" href="https://dopamine.gq/phpmyadmin">DB 관리 페이지 <i class="fas fa-angle-right"></i></a></p>
        </div>
      </footer>

  </body>
</html>
