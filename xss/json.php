<?php
echo '<?xml version="1.0" encoding="UTF-8"?>'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>XSS Demo(json)</title>
</head>
<body>
<h1>XSS Demo</h1>
<script>
var xhr = new XMLHttpRequest();
xhr.open("GET", "http://security.s-tanno.net/xss/json.json", true);
xhr.send();
xhr.onreadystatechange = function() {
    console.log(xhr);
    if (xhr.readyState == 4) {
        try {
            var resp = eval("(" + xhr.responseText + ")");
            //var resp = JSON.parse(xhr.responseText);
            console.log(resp);
        } catch(err) {
            console.log(err);

        }
    }
}
</script>
</body>
</html>
