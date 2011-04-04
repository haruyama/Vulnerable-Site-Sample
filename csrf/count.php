<?php
session_start();
if (!empty($_SESSION['isLogin']) && $_SESSION['isLogin'] === true
//    && ($_POST['session'] === session_id() || $_SESSION['isFirst'] === true)
    ) {
    $_SESSION['isFirst'] = false;
    if (empty($_SESSION['count'])) {
        $_SESSION['count'] = 1;
    } else {
        ++$_SESSION['count'];
    }
} else {
    header('HTTP/1.0 403 Forbidden');
    header('Content-Type: text/plain');
    print 'Forbidden';
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <title>CSRF Test</title>
        </head>
        <body>
        <p><?php print htmlspecialchars($_SESSION['count'], ENT_QUOTES, 'UTF-8'); ?></p>
                <form method="post" action="count.php">
                        <p>
                        <input type="hidden" name="dummy" value="dummy" />
                        <input type="submit" value="count up" />
                        </p>
                </form>
        </body>
</html>
