<?php
session_start();
if (!empty($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) {
    header('Content-Type: text/plain');
    echo 'success';
    exit;
}
header('HTTP/1.0 403 Forbidden');
echo 'forbidden';
exit;
