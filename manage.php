<?php
  include 'db.php'; /* db load */
?>
<html>
  <head>
    <title>FPP CITY 관리자</title> 
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo/FPP.ico" />
    <link rel="stylesheet" href="assets/m_hurts.css?r=1"/>
    <link href="assets/fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
  <?php
    session_start();
    if(!isset($_SESSION['userid'])) //세션이 존재하지 않을 때
    {
        header ('Location: index.php');
    }
  ?>
    <!-- <nav class="hurts_nav">
      <div class="container">
      <h1><a href="https://dopamine.gq" target="_blank">메인으로 이동</a>   |  
        <a href="http://dopamine.gq/FPP/SQ/file_list.php" target="_blank">파일 리스트로 이동</a></h1>
      </div>
    </nav> -->
  <body class="hurts_body">

    <section class="hurts_main_alert">
        <div class="container">
               <!-- <div class="input-group mb-3">
                <textarea type="text" id="contents" autocomplete="name" name="contents" cols="40" rows="10" class="hurts_input" placeholder="※ 별도의 관리자용 계정 생성이 가능하게 페이지를 수정했습니다 :D&#13;&#10;" aria-label="내용" aria-describedby="basic-addon1" required></textarea>
            </div> -->
            <br/><br/>
            <section class="hurts_table"> 
            <div class="container">
            <h1>관리자 페이지</h1><br/>  
            <p><a href="logout.php">로그아웃 <i class="fas fa-angle-right"></i></a></p>
             <p><a href="http://dopamine.gq/phpmyadmin" target="_blank">phpmyadmin으로 이동 <i class="fas fa-angle-right"></i></a></p>
            <br/>
            <?php
      $servername = "localhost";
      $username = "root";
      $password = "dopamine2312@@";
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
            echo "<a href='https://dopamine.gq/FPP/SQ/view.php?idx=" . $row["idx"]."'>";
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
            </form>     
        </div>
    </section>
     

    <footer class="hurts_footer">
        <div class="container">
          <p>Dopamine 2020 (C) 모든 권한 보유.</p>
          <!-- <p><a href="logout.php">로그아웃 <i class="fas fa-angle-right"></i></a></p> -->
        </div>
      </footer>
  </body>
</html> 