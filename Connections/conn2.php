<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn = "localhost";
$database_conn = "project2017";
$username_conn = "root";
$password_conn = "";
$conn = mysqli_connect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>