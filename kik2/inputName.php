<?php
$numOf�rit=$_POST["firstLevel"];
$numOfProv=$_POST["secondLevel"];
include ("js/scriptp1.js");
?>

<head>
 <title>Y������� ��������� � �����������</title>
		<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery-2-1-3.js"></script>


</head>

<script type="text/javascript">
function nextCt (f)
{
	if(f< <?php echo $numOf�rit;?>)
		f++;
if (event.keyCode ==13) 
	(document.getElementById("C"+f).focus()); 
return false; 	
}
function nextPr (f)
{
	if(f< <?php echo $numOfProv;?>)
		f++;
if (event.keyCode ==13) 
	(document.getElementById("P"+f).focus()); 
return false; 	
}
</script>



<?php
echo "<form action='inputDataLevel2.php' method='POST' >";
echo "<h3>�������� ���������</h3>";
for ($i=1;$i<=$numOf�rit;$i++)
	//if ($i<$numOf�rit)
	//$ne=$i+1;
	echo "�������� ".$i." ��������: <input type='text' class='navigatorItem' required size=15 id='C".$i."' name='C".$i."' onkeypress='if (event.keyCode ==13)  return false;' onkeyup='nextCt(".$i.")' onblur='unikNameCrit()'><br>";
echo "<br><br><br>";
echo "<h3>�������� ������������� �����������:</h3>";
for ($i=1;$i<=$numOfProv;$i++)
	echo "�������� ".$i." ����������: <input type='text' required size=15 id='P".$i."' name='P".$i."' onblur='unikNameProv()' onkeyup='nextPr(".$i.")' onkeypress='if (event.keyCode ==13) return false;'><br>";
echo "<input type='hidden' name='firstLevel' value='".$numOf�rit."'>";
echo "<input type='hidden' name='secondLevel' value='".$numOfProv."'>";
echo "<input type='submit' value='�����'>";
echo "</form>";
?>