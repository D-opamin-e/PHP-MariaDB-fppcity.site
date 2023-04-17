<head>
<script type="text/javascript" src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.0.js" charset="utf-8"></script>
</head>
<body>
<div id="naverIdLogin"></div>
<script type="text/javascript">
   var naverLogin = new naver.LoginWithNaverId(
      {
         clientId: "i0y0z_GY8SUVjeajBoNt",
         callbackUrl: "http://fppcity.site/sms/check.php",
         isPopup: false,
         loginButton: {color: "green", type: 3, height: 60}
      }
   );
   naverLogin.init();
</script>
</body>
</html>