<?
$idofdel=$_POST["idofdelel"];
	if ($idofdel!="")
	{
    $dbcon = mysql_connect("localhost", "sdad", "123987564"); 
    mysql_select_db("sd", $dbcon);
	if (!$dbcon)
	{
    echo "<p>Произошла ошибка при подсоединении к MySQL!</p>".mysql_error(); exit();
    } else {
    if (!mysql_select_db("sd", $dbcon))
    {
    echo("<p>Выбранной базы данных не существует!</p>");
    }
	}
	$wdel = "DELETE FROM phpTest WHERE id=".$idofdel;// what to delleate
	$result1 = mysql_query("SELECT id FROM login WHERE login='$login'", $dbcon);
    $myrow1 = mysql_fetch_array($result1);

	
	mysql_query($wdel,$dbcon);
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
include("../modules/leftmenufa.php");
include("../modules/login.php");
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

<?
if (!(empty($_SESSION['login']) or empty($_SESSION['id'])))
{
echo '<form action="index.php" method=post>';
echo '<p>Введите ID удаляемой строчки</p><br>';
echo '<input type="text" name="idofdelel">';
echo '<input type="submit">';
echo '</form>';
}
?>
</div>
<div id="footer">
</div>


</body>
</html>