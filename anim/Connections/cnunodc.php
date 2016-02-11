<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnunodc = "localhost";
$database_cnunodc = "unodc";
$username_cnunodc = "root";
$password_cnunodc = "";
$cnunodc = mysql_pconnect($hostname_cnunodc, $username_cnunodc, $password_cnunodc) or trigger_error(mysql_error(),E_USER_ERROR); 
?>