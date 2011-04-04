<?php
function display_and_check($str) {
    print $str;
    print ' : ';
    var_dump(mb_check_encoding($str, 'UTF-8'));
}

display_and_check('aaa');
display_and_check('あああ');
display_and_check("\x80");
