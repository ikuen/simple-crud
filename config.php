<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root")
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

 $user = 'root';
 $password = 'ecPxkkzYmZAa';
 $databaseName = 'test';
 $host = 'localhost';
 $port = 3306;

$mysqli = mysqli_connect("$host", $user, $password, $databaseName);
