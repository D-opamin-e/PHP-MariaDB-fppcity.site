<?
session_start();
 
define('NAVER_CLIENT_ID', '"******');
define('NAVER_CLIENT_SECRET', '"******');
define('NAVER_CALLBACK_URL', 'http://fppcity.site/sms/check.php');
 
 
$naver_curl = "https://nid.naver.com/oauth2.0/token?grant_type=authorization_code&client_id=".NAVER_CLIENT_ID."&client_secret=".NAVER_CLIENT_SECRET."&redirect_uri=".urlencode(NAVER_CALLBACK_URL)."&code=".$_GET['code'];
 
// 토큰값 가져오기 
$is_post = false; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $naver_curl); 
curl_setopt($ch, CURLOPT_POST, $is_post); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
 
$response = curl_exec ($ch); 
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
curl_close ($ch); 
 
if($status_code == 200){ 
    $responseArr = json_decode($response, true); 
 
      // 토큰값으로 네이버 회원정보 가져오기 
      $headers = array( 'Content-Type: application/json', sprintf('Authorization: Bearer %s', $responseArr['access_token']) ); 
      $is_post = false; 
      $me_ch = curl_init(); 
      curl_setopt($me_ch, CURLOPT_URL, "https://openapi.naver.com/v1/nid/me"); 
      curl_setopt($me_ch, CURLOPT_POST, $is_post ); 
      curl_setopt($me_ch, CURLOPT_HTTPHEADER, $headers); 
      curl_setopt($me_ch, CURLOPT_RETURNTRANSFER, true); 
      $res = curl_exec ($me_ch); 
      curl_close ($me_ch); 
      $res_data = json_decode($res , true); 
       
 
    /*
    {
      "resultcode": "00",
      "message": "success",
      "response": {
        "email": "openapi@naver.com",
        "nickname": "OpenAPI",
        "profile_image": "https://ssl.pstatic.net/static/pwe/address/nodata_33x33.gif",
        "age": "40-49",
        "gender": "F",
        "id": "32742776",
        "name": "오픈 API",
        "birthday": "10-01"
      }
    }
    */
 
      if ($res_data ['response']['id']) { 
      //해당 아이디값을 정상적으로 가져온다면 디비에 해당 아이디로 회원가입 여부 확인 하여 회원 가입을 하였으면 자동 로그인 구현.

 
            $query = "select * from member where id='". $res_data ['response']['email'] ."'";
            $memRes = mysql_query($query);
            $memRow = mysql_fetch_array($memRes);
 
            if($memRow[mno]){ // 이미 가입된 회원이면 자동로그인한다.
 
                $_SESSION[m_id]        = $memRow['email'];
                $_SESSION[m_name]    = $memRow['name'];
                echo("<meta http-equiv='refresh' content='0;URL=/'>");
 
                exit;
            } else {          // 새로 회원가입을 하고 자동로그인추가한다.
                
                $reg_date = time();
                $query = "insert into member(id,discord,pw) values ('".$res_data ['response']['email']."','".$res_data ['response']['name']."','".$res_data ['response']['id']."')";    
                mysql_query($query) or die("Insert error!");
 
                $_SESSION[m_id]        = $res_data ['response']['email'];
                $_SESSION[m_name]    = $res_data ['response']['name'];
                echo("<meta http-equiv='refresh' content='0;URL=/'>");
 
                exit;      
            }
        
 
      }
}
?>
