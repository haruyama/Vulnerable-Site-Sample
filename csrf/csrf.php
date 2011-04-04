<?php
session_start();
$_SESSION['isLogin'] = true;
$_SESSION['isFirst'] = true;
?>

<!DOCTYPE HTML>
<html>
<head>
<title>CSRFデモ</title>
</head>
<body>
<form method="post" action="post.php">
<input type="textarea" name="content">
<input type="submit">
</form>
</body>
</html>
