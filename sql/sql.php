<?php
$name = isset($_GET['name']) ? $_GET['name'] : '' ;
$pass = isset($_GET['pass']) ? $_GET['pass'] : '' ;
?>
<?php
echo '<?xml version="1.0" encoding="UTF-8"?>'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SQL injection Demo</title>
</head>
<body>
<h1>SQL injection Demo</h1>
<?php
$link = mysql_connect('localhost', 'root', 'tyorome') or die(mysql_error());
mysql_select_db('test', $link) or die(mysql_error());

$sql = "SELECT * FROM users WHERE
	name = '{$name}'
	AND pass = '{$pass}' ";
/*
$sql = 'SELECT * FROM users WHERE ' .
	"name = '" . mysql_real_escape_string($name, $link) . "' " .
	"AND pass = '" . mysql_real_escape_string($pass, $link) . "'";
*/

$result = mysql_query($sql, $link);

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$rows[] = $row;
}
mysql_free_result($result);
mysql_close($link);
if (!empty($rows)) {
foreach ($rows as $row) {
?>
<dt>
<dl>name: <?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></dl>
<dd>class: <?php echo htmlspecialchars($row['class'], ENT_QUOTES, 'UTF-8'); ?></dd>
</dt>
<?php
}
}
?>
<ul>
<li>sql: <?php echo htmlspecialchars($sql, ENT_QUOTES, 'UTF-8'); ?></li>
<li>name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></li>
<li>pass: <?php echo htmlspecialchars($pass, ENT_QUOTES, 'UTF-8'); ?></li>
</ul>


<form action="./sql.php" method="get">
<p>
<input type="text" name="name" />
<input type="text" name="pass" />
<input type="submit" />
</p>
</form>
</body>
</html>
