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
<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
</head>
<body>
<h1>XSS Demo</h1>

<p>POC: ab32'; alert(0); '</p>

<p id="message">message</p>

<form action="./literal.php" method="get">
<input id="stash" type="hidden" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');?>" />
<input type="text" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');?>" />
<input type="submit" />
</p>
</form>
<script>
var message = '<?php echo $message;?>';
$('#message').text(message);
</script>
<!--
//var message = $('#stash').attr('value');
//$('#message').text(message);
-->
</body>
</html>
