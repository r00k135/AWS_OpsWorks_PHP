<!DOCTYPE html>
<html>
<head>
<title>PHP Sample App</title>
</head>
<body>
<h2>OpsWorks PHP Sample Application</h2>
<p>
WebServer call from <?php
echo $_SERVER['REMOTE_ADDR'];
?></p>
<p>X-Forwarded-For Header <?php
echo $_SERVER['HTTP_X_FORWARDED_FOR'];
?></p>
</body>
</html>