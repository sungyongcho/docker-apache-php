<?php
$arr = array('OS' => php_uname('s'), 'Ver' => php_uname('v'), 'HostName' => php_uname('n'), 'IP' => $_SERVER['SERVER_ADDR'], 'Date' => date("Y-m-d H:i:s"));
print_r(json_encode($arr,JSON_UNESCAPED_UNICODE));
?>
