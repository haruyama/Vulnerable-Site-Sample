<?php
header('Content-Type: text/plain');

@readfile(dirname(__FILE__) . '/data/' . $_GET['data_file']);
//readfile(dirname(__FILE__) . '/data/' . $_GET['data_file'] . '.dat');

//$file = str_replace('../', '', $_GET['data_file']);
//readfile(dirname(__FILE__) . '/data/' . $file);

?>
