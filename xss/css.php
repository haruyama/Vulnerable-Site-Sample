<?php
$message = !empty($_GET['message']) ? $_GET['message'] : '' ;
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

<p>IE 6,7, IE8(compatible mode)</p>
<p>POC: xss:expression(javascript:alert(1))</p>

<p>escaped message: <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>

<div style="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">ga</div>

<form action="./css.php" method="get">
<p>
<input type="text" name="message" />
<input type="submit" />
</p>
</form>
</body>
</html>
