<?php
$str = "\xf0";
var_dump(htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));
var_dump(htmlspecialchars($str, ENT_QUOTES, 'EUC-JP'));
var_dump(htmlspecialchars($str, ENT_QUOTES, 'Shift_JIS'));
var_dump(htmlspecialchars($str, ENT_QUOTES));
