<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP Connecting to MySQL Database</title>
<style type="text/css">
	p { border:1px solid #ccc; padding: 10px; }
</style>
</head>

<body>

<h3>PHP Test Website</h3>
<h4>Connected to MySQL Database</h4>

<?php
//Connect To Database
$hostname='p50mysql43.secureserver.net';
$username='db79711_ralph';
$password='trigeminal';
$dbname=' db79711_triggers';
$usertable='meals';
$yourfield = 'mealName';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

$query = 'SELECT * FROM $usertable';
$result = mysql_query($query);
if($result) {
    while($row = mysql_fetch_array($result)){
        $name = $row['$yourfield'];
        echo 'Name: '.$name;
    }
}
?>
<?php
	// Request the FirstNames
	$mealName = @mysql_query('SELECT mealName FROM meals');
	if (!$mealName) {
	 exit('<p>Error performing query: ' . mysql_error() . '</p>');
	}
	
?>



</body>
</html>
