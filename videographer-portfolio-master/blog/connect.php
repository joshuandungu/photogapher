<?php
/*-------------------------------------------
FILE PURPOSE

This file is for connecting to the MySQL databse using the MySQLi procedural method.
It would be beneficial if i switched my system over to PDO (PHP Data Objects) eventually.

Both MySQLi and PDO have their advantages:

PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

Both are object-oriented, but MySQLi also offers a procedural API.

Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.

-------------------

LOCAL CONNECTION:
$dbhost = "localhost"; // servername
$dbuser = "root"; // username for user given database access
$dbpass = ""; // password for user given database access

LIVE / ONLINE CONNECTION:
$dbServername= "localhost"; // servername
$db_username= "chblanton"; // username for user given database access
$db_password= "J!anie11841"; // password for user given database access
$dbname= "portfolio_blog"; // specific database being used
$table = "video"; // specific table selector

/*------------------------------------------*/
$dbhost = "localhost"; // servername
$dbuser = "root"; // username for user given database access
$dbpass = ""; // password for user given database access

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Connect failed. Please contact admin at admin@james-blanton.com");

$dbname= "portfolio_blog";
mysqli_select_db($dbcon,$dbname);

?> 
