<?php
$numOfСrit=$_POST["firstLevel"];
$numOfProv=$_POST["secondLevel"];
include ("js/scriptp1.js");
?>

<head>
 <title>Yазвание критериев и поставщиков</title>
		<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery-2-1-3.js"></script>


</head>

<script type="text/javascript">
function nextCt (f)
{
	if(f< <?php echo $numOfСrit;?>)
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
echo "<h3>Названия критериев</h3>";
for ($i=1;$i<=$numOfСrit;$i++)
	//if ($i<$numOfСrit)
	//$ne=$i+1;
	echo "Название ".$i." критерия: <input type='text' class='navigatorItem' required size=15 id='C".$i."' name='C".$i."' onkeypress='if (event.keyCode ==13)  return false;' onkeyup='nextCt(".$i.")' onblur='unikNameCrit()'><br>";
echo "<br><br><br>";
echo "<h3>Названия потенциальных поставщиков:</h3>";
for ($i=1;$i<=$numOfProv;$i++)
	echo "Название ".$i." поставщика: <input type='text' required size=15 id='P".$i."' name='P".$i."' onblur='unikNameProv()' onkeyup='nextPr(".$i.")' onkeypress='if (event.keyCode ==13) return false;'><br>";
echo "<input type='hidden' name='firstLevel' value='".$numOfСrit."'>";
echo "<input type='hidden' name='secondLevel' value='".$numOfProv."'>";
echo "<input type='submit' value='Далее'>";
echo "</form>";
?>