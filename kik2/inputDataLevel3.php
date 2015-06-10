<head>
 <title>Оценка критериев</title>
		<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery-2-1-3.js"></script>


</head>





<?php
$numOfСrit=$_POST["firstLevel"];
$numOfProv=$_POST["secondLevel"];
for ($i=1;$i<=$numOfСrit;$i++)
	for ($j=1;$j<=$numOfСrit;$j++)
		if ($i==$j)
			$ratingOfСrit[$i][$j]=1;
		else
		$ratingOfСrit[$i][$j]=$_POST['i'.$i.'j'.$j];
$filenameAD = "data/allData.txt";
$fpAD = fopen($filenameAD,"w"); 
$filenameCR = "data/critRating.txt";
$fp = fopen($filenameCR,"w"); 
if($fp)
{ 
for ($i=1;$i<=$numOfСrit;$i++)
	for ($j=1;$j<=$numOfСrit;$j++)
	{
	fputs($fp, $ratingOfСrit[$i][$j]." "); 
	fputs($fpAD, $ratingOfСrit[$i][$j]." ");
	}
 fclose($fp); 
} 
include ("js/scriptp3.js");
?>


<script type="text/javascript">
function nextCt (k,f,n)
{
	no=n;
	fo=f;
	vo=document.getElementById("k"+k+"i"+f+"j"+n).value;
	
	//if(f< <?php echo $numOfСrit;?>)
	//	f++;
		if(n< <?php echo $numOfProv;?>)
		n++;
	else
		if (f<<?php echo $numOfProv;?>-1)
		{
			f++;
			n=f+1;
		}

	document.getElementById("k"+k+"i"+f+"j"+n).focus();
	if (document.getElementById("k"+k+"i"+fo+"j"+no).value!=vo)
		document.getElementById("k"+k+"i"+fo+"j"+no).focus();

return false; 	
}
function nextCtR (k,f,n)
{
	no=n;
	fo=f;
	vo=document.getElementById("k"+k+"i"+f+"j"+n).value;

		if (f<<?php echo $numOfProv;?>)
		{
			f++;
			
		}
		else
		if (n<<?php echo $numOfProv;?>-1)
		{
			n++;
			f=n+1;
		}
	(document.getElementById("k"+k+"i"+f+"j"+n).focus()); 
		if (document.getElementById("k"+k+"i"+fo+"j"+no).value!=vo)
		document.getElementById("k"+k+"i"+fo+"j"+no).focus();
return false; 	
}
</script>




<?php
$filenameP = "data/provName.txt";
$namesP= file_get_contents($filenameP);
$rez = explode(" ", $namesP);
for($i=0;$i<$numOfProv;$i++)
	$provName[$i+1]=$rez[$i];


$filenameC = "data/critName.txt";
$namesC= file_get_contents($filenameC);
$rez = explode(" ", $namesC);
for($i=0;$i<$numOfСrit;$i++)
	$critName[$i+1]=$rez[$i];
echo "<a href='data/critRating.txt' download>Сохранить файл с оценками критериев</a>";
echo "<form method='POST' action='afterInput.php' onkeypress='if (event.keyCode ==13) return false;'>";
for($k=1;$k<=$numOfСrit;$k++)
	{
	echo "<table style='width:auto'><tr><th colspan='2'>Попарное сравнение поставщиков по критерию ".$critName[$k]."</th></tr>";
	for ($i=1;$i<$numOfProv;$i++)
		for ($j=$i+1;$j<=$numOfProv;$j++)
		{
			echo "<tr><td>Поставщик ".$provName[$i]." <input type='text' style='width: 45px;' id='k".$k."i".$i."j".$j."' name='k".$k."i".$i."j".$j."' onblur='jifromijpre(".$k.",".$i.",".$j.")' onkeyup='if (event.keyCode ==13) nextCt(".$k.",".$i.",".$j.")' pattern='\d+(\.\d{0,20})?' required ></td>";
			echo "<td>Поставщик ".$provName[$j]." <input type='text' style='width: 45px;' id='k".$k."i".$j."j".$i."' name='k".$k."i".$j."j".$i."' onblur='jifromijpre(".$k.",".$j.",".$i.")' onkeyup='if (event.keyCode ==13) nextCtR(".$k.",".$j.",".$i.")' pattern='\d+(\.\d{0,20})?' required ></td></tr>";
		}
	echo "</table><br>";
	
        echo "<BR>Данные о сравнении поставщиков по критерию № ".$k." из файла<input type='file' id='".$k."' multiple='false'><br>";
        }
echo "<input type='hidden' name='firstLevel' value='".$numOfСrit."'>";
echo "<input type='hidden' name='secondLevel' value='".$numOfProv."'>";	
echo "<input type='submit' value='Далее' onFocus='ijfromji()'>";	
echo "</form>";

?>