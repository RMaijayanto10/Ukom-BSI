<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=320; user-scalable=no; initial-scale=1.0; maximum-scale=1.0" />
	<title>Android Pattern Lock</title>
    @include("includes.css")
</head>

<body>
<div class="maincontainer">
    <h2 id="heading" class="heading">Welcome to the homescreen</h2>
    <button id="lockScreen" class="button-lockscreen" onclick="window.location= './index.html';">Lock Screen</a><br /><br />
    <button id="resetPassword" class="button-reset" onclick="resetPassword()">Reset Password</a>
</div>
</body>
<script type="text/javascript" src="js/homepage.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>