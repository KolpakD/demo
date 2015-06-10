<?php
$numOfСrit=$_POST["firstLevel"];
$numOfProv=$_POST["secondLevel"];
for ($i=1;$i<=$numOfСrit;$i++)
	$nameOfCrit[$i]=$_POST["C".$i];
for ($i=1;$i<=$numOfProv;$i++)
	$nameOfProv[$i]=$_POST["P".$i];

$filenameC = "data/critName.txt";
$fp = fopen($filenameC,"w"); 
if($fp)
{ 
 for ($i=1;$i<=$numOfСrit;$i++)
	fputs($fp, $nameOfCrit[$i]." "); 
 fclose($fp); 
} 

$filenameP = "data/provName.txt";
$fp = fopen($filenameP,"w"); 
if($fp)
{ 
 for ($i=1;$i<=$numOfProv;$i++)
	fputs($fp, $nameOfProv[$i]." "); 
 fclose($fp); 
include ("js/scriptp2.js");
} 
?>

<script type="text/javascript">
function nextCt (f,n)
{
	no=n;
	fo=f;
	vo=document.getElementById("i"+f+"j"+n).value;
	
	//if(f< <?php echo $numOfСrit;?>)
	//	f++;
		if(n< <?php echo $numOfСrit;?>)
		n++;
	else
		if (f<<?php echo $numOfСrit;?>-1)
		{
			f++;
			n=f+1;
		}

	document.getElementById("i"+f+"j"+n).focus();
	if (document.getElementById("i"+fo+"j"+no).value!=vo)
		document.getElementById("i"+fo+"j"+no).focus();

return false; 	
}
function nextCtR (f,n)
{
	no=n;
	fo=f;
	vo=document.getElementById("i"+f+"j"+n).value;

		if (f<<?php echo $numOfСrit;?>)
		{
			f++;
			
		}
		else
		if (n<<?php echo $numOfСrit;?>-1)
		{
			n++;
			f=n+1;
		}
	(document.getElementById("i"+f+"j"+n).focus()); 
		if (document.getElementById("i"+fo+"j"+no).value!=vo)
		document.getElementById("i"+fo+"j"+no).focus();
return false; 	
}
</script>


<head>
 <title>Оценка критериев</title>
		<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery-2-1-3.js"></script>


</head>


<?php




echo "<form method='POST' action='inputDataLevel3.php' id='bsub' name='bsub' onkeypress='if (event.keyCode ==13) return false;'>";
echo "<table style='width:auto'><tr><th colspan='2'>Попарные сравнения критериев</th></tr>";
for ($i=1;$i<=$numOfСrit-1;$i++)
	for ($j=$i+1;$j<=$numOfСrit;$j++)
	{
		echo "<tr><TD >Критерий ".$nameOfCrit[$i]." <input type='text' style='width: 45px;' id='i".$i."j".$j."' name='i".$i."j".$j."' onblur='jifromijpre(".$i.",".$j.")' onkeyup='if (event.keyCode ==13) nextCt(".$i.",".$j.")' pattern='\d+(\.\d{0,20})?' required ></td>";
		echo "<td>Критерий ".$nameOfCrit[$j]." <input type='text' style='width: 45px;' id='i".$j."j".$i."' name='i".$j."j".$i."' onblur='jifromijpre(".$j.",".$i.")' onkeyup='if (event.keyCode ==13) nextCtR(".$j.",".$i.")'pattern='\d+(\.\d{0,20})?' required ></td></tr>";
	}
echo "</div>";
echo "<input type='hidden' name='firstLevel' value='".$numOfСrit."'>";
echo "<input type='hidden' name='secondLevel' value='".$numOfProv."'>";
echo "<BR>Данные о сравнении критериев из файла<input type='file' multiple='false'><br>";
echo "<input type='submit' value='Далее' onFocus='jifromij();'>";	
echo "</table>";
echo "</form>";
?>