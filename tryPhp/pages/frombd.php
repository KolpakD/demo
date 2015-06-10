<?
$host='localhost'; 
$database='sd'; 
$user='sdad'; 
$pswd='123987564'; 
$tablename = 'phpTest';

 $name=$_POST["name"];
 $salary=$_POST["salary"];

 if ($name!="")
	  if ($salary!="")
	  {
$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
$test="VALUES('".$name."','".$salary."')";
$strSQL = "INSERT INTO ".$tablename."(name, salary) ".$test;
mysql_query($strSQL) or die(mysql_error());
mysql_close($dbh);
	  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<TITLE>Обучение Php</TITLE>
<link href="../css/main.css" type="text/css" rel="stylesheet">
</head>



<div class="header">

</div>

<div id="leftmenu">
<?
include("../modules/leftmenufp.php");
?>
</div>

<div id="rightmenu">
</div>

<div id="content">
<table>
<tr><th>ID</th><th>Name</th><th>Salary</th></tr>
<?
$host='localhost'; 
$database='sd'; 
$user='sdad'; 
$pswd='123987564'; 
$tablename = 'phpTest';
$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
$result = mysql_query("SELECT * FROM phpTest",$dbh);
while($myrow = mysql_fetch_assoc($result))
    echo "<tr><td>".$myrow['id']."</td>"."<td>".$myrow['name']."</td>"."<td>".$myrow['salary']."</td></tr>";
mysql_close($dbh);
?>
</table>
<p>
<form method="POST">
Имя: <input type="edit" required id="name" name="name"><br>
Зарплата: <input type="edit" required id="salary" name="salary"><br>
<input type="Submit">
</form>
</p>

</div>
<div id="footer">
</div>


</body>
</html>