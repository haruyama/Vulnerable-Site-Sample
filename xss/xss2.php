<?php
$message = isset($_GET['message']) ? $_GET['message'] : '' ;
?>
<?php
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

<p>POC: javascript:alert(2)</p>
<p>POC2: data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K</p>

<p><a href="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></a></p>

<form action="./xss2.php" method="get">
<p>
<input type="text" name="message" />
<input type="submit" />
</p>
</form>
</body>
</html>
