<?php
header('Content-Type: text/plain');
$db = mysqli_connect(null, 'root', 'tyorome', 'test_sjis');
$teststring = "aa'bb\\cc¥";
echo $teststring ;
//ZZecho 'mysqli_real_escape_string($db,"' . $teststring . ')';
echo "\n";
echo mysqli_real_escape_string($db, $teststring);
echo "\n";
