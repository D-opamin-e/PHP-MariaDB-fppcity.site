<!doctype html>
<html lang="ko">
<head>
<script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<script type="text/javascript">
  var naver_id_login = new naver_id_login(""******", "http://fppcity.site/sms/check.php");
  $('body').append('');
  naver_id_login.get_naver_userprofile("naverSignInCallback()");
  function naverSignInCallback() {
    const age = naver_id_login.getProfileData('age');
    const token = naver_id_login.oauthParams.access_token
    
    
	let body = $('body');
  body.append('<h4>아래 명령어를 복사하여 bot-order에 붙여넣어 주세요.</h4>');
  body.append(`?성인 ${token}`);
  // body.append('<h4>토큰:'+token+'</h4>');
	// body.append('<h4>나이:'+age+'</h4>');


// Creating a cookie after the document is ready
$(document).ready(function () {
  createCookie("token", `${token}`, "10");
	createCookie("age", `${age}`, "10");
});

// Function to create the cookie
function createCookie(name, value, days) {
	var expires;
	
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		expires = "; expires=" + date.toGMTString();
	}
	else {
		expires = "";
	}
	
	document.cookie = escape(name) + "=" +
		escape(value) + expires + "; path=/";
}


  }
//   <?php
$con = mysqli_connect("localhost","root",""******@@","sunam_test");
$sql = "insert into naver_check (token, age) values('".$_COOKIE["token"]."','".$_COOKIE["age"]."')";
if(!mysqli_query($con,$sql)) {
}

// ?>
</script>
</body>
</html>