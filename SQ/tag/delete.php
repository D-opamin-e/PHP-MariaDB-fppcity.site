<?php
		session_start();
		header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩
	
		$db = new mysqli("localhost","root","dopamine2312@@","sunam_test");
		$db->set_charset("utf8");
	
		function mq($sql)
		{
			global $db;
			return $db->query($sql);
		}
	
	$bno = $_GET['idx'];
	$sql = mq("delete from sq where idx='$bno';");
?>
<script type="text/javascript">alert('게시글이 정상적으로 삭제되었습니다.');</script>
<script>document.location.href='https://dopamine.gq/FPP/SQ/FPP_CITY_SQ_LIST.php'; </script>
<!-- <meta http-equiv="refresh" content="0 url=/" /> -->


