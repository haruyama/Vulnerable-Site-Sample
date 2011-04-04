<?php
$message = isset($_GET['message']) ? $_GET['message'] : '' ;
?>
<?php
header('Content-Type: text/html; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>XSS Demo</title>
</head>
<body>
<h1>XSS Demo</h1>

<div><span id="nyo" /></div>

<p><input type="button" value="mouseover" onmouseover="document.getElementById('nyo').innerHTML =  '入力は' + document.getElementById('nya').innerHTML;" /></p>
<div style="display: none"><span id="nya"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');?></span></div>
<form action="./js_xss3.php" method="get">
<p>
<input type="text" name="message" />
<input type="submit" />
</p>
</form>
</body>
</html>
