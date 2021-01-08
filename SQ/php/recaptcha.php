<?php

$sitekey = '6LfLb-cUAAAAAGkjpv9DbZy3TMzIYJBNOc26CeAw'; 
$secretKey = "6LfLb-cUAAAAAPAeW0DFwFkRd_Oap4hGMtzoDcnN"; 

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = null;
    $contents = null;
    $recaptcha = null;
    if($_POST['name']){
        $name = $_POST['name'];
    }
    if($_POST['contents']){
        $contents = $_POST['contents'];
    }
    if($_POST['g-recaptcha-response']){
        $recaptcha = $_POST['g-recaptcha-response'];     
    }
    if($recaptcha){
        $url = "https://www.google.com/recaptcha/api/siteverify?
                secret=" . $secretKey . "&response=" . $recaptcha . 
                "&remoteip=" . $_SERVER['REMOTE_ADDR'];

        $resource =  file_get_contents( $url ); 



       $val = json_decode($resource, true);
       if(intval($val["success"]) !== 1){
            echo "정상적인 접속이 아닌 것 같습니다.";
            die();
       }
        echo "name = $name <br />";

        echo "contents = $contents <br />";
    }else{
        echo "로봇이 아니면 체크해주세요.";
        die();
    }
}
?> 