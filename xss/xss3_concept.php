<?php
echo '<?xml version="1.0" encoding="Shift_JIS"?>'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>XSS Demo</title>
</head>
<body>
<h1>XSS Demo</h1>

<?php
$name = "\x8f";
$url = ' onmouseover="alert(1)" "';
?>

<p><a name="<?php echo $name;?>" href="<?php echo $url; ?>">nyo</a>

</form>
</body>
</html>
