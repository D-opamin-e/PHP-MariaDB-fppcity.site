<?php
		session_start();
		header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩
	
		$db = new mysqli("localhost","root","비밀번호!","sunam_test");
		$db->set_charset("utf8");
	
		function mq($sql)
		{
			global $db;
			return $db->query($sql);
		}
		$bno = $_GET['idx'];
		// $s_title = mq("select * from sq where idx='$bno';");
		// $update = $s_title->fetch_array();
		$sql = mq("update sq SET monitor = '[처리완료]' where idx='$bno';");

?>
<script type="text/javascript">alert('게시글의 제목을 변경하였습니다.');</script>
<script>document.location.href='https://dopamine.gq/FPP/SQ/FPP_CITY_SQ_LIST.php'; </script>
<!-- <meta http-equiv="refresh" content="0 url=/" /> -->
