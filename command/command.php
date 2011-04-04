<?php
header('Content-Type: text/plain');

print system('ls '  . $_POST['dir']);

?>
