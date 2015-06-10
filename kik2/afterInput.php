<head>
 <title>Финальный вектор</title>
		<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery-2-1-3.js"></script>


</head>
<?php
include ("logic/mumnozh.php");
include ("logic/getOpred.php");
include ("iter.php");

$numOfСrit=$_POST["firstLevel"];
$numOfProv=$_POST["secondLevel"];
$filenameAD = "data/allData.txt";
$fpAD = fopen($filenameAD,"a"); 
fputs($fpAD, "\n"); 


for ($k=1;$k<=$numOfСrit;$k++)
	for ($i=1;$i<=$numOfProv;$i++)
		for ($j=1;$j<=$numOfProv;$j++)
			if ($i==$j)
				$ratingOfСrit[$k][$i][$j]=1;
			else
			{
			$ratingOfСrit[$k][$i][$j]=$_POST['k'.$k.'i'.$i.'j'.$j];
			}
for ($k=1;$k<=$numOfСrit;$k++)
{
$filenamePR = "data/provRating".$k.".txt";
$fp = fopen($filenamePR,"w"); 
if($fp)
{ 
for ($i=1;$i<=$numOfProv;$i++)
	for ($j=1;$j<=$numOfProv;$j++)
	{
	fputs($fp, $ratingOfСrit[$k][$i][$j]." "); 
	fputs($fpAD, $ratingOfСrit[$k][$i][$j]." "); 
	}
 fclose($fp); 
}
 fputs($fpAD, "\n");
}
for ($i=1;$i<=$numOfСrit;$i++)
echo "<table style='width:auto'><TR><TD><a href='data/provRating".$i.".txt' download>Сохранить файл с оценками поставщиков по ".$i." критерию</a></td></tr></table>";
$filenameCRF = "data/critRating.txt";
echo "<br>Сравнение критериев<BR>";

$vectCrit=iter($filenameCRF,$numOfСrit);
	echo "<br>"."<BR>";
for ($i=1;$i<=$numOfСrit;$i++)
{
	echo "<br>Сравнение поставщиков по параметру № ".$i."<BR>";
	$filenamePRF = "data/provRating".$i.".txt";
	$vectProv[$i] = iter($filenamePRF,$numOfProv);

}

for ($i=1;$i<=$numOfСrit;$i++)
    for ($j=1;$j<=$numOfProv;$j++)
        $vectProvTr[$j][$i] = $vectProv[$i][$j];
   


  
$finish = mumnozh($vectProvTr,$vectCrit);
	echo "<br>Финальный вектор<BR>";
for ($i=1;$i<=$numOfProv;$i++)
	$finish[$i]=number_format($finish[$i],3);	
for ($i=1;$i<=$numOfProv;$i++)
	echo $finish[$i]."<br>";
echo "<br><br><br>";
for ($i=1;$i<=$numOfProv;$i++)
	if($finish[$i]==max($finish))
		echo "Исходя из заданых вами условий, наиболее оптимальный поставщик - поставщик №".$i;
		echo "<br><a href='data/allData.txt' download>Сохранить файл со всеми исходными данными</a><br>";
	echo "<br><a href='index.php'>На главную</a>"
?>