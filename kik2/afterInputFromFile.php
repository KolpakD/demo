<head>
 <title>��������� ������</title>
		<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery-2-1-3.js"></script>


</head>
<?php
include ("logic/mumnozh.php");
include ("logic/getOpred.php");
include ("iter.php");

$numOf�rit=$_POST["firstLevel"];
$numOfProv=$_POST["secondLevel"];

// � PHP 4.1.0 � ����� ������ ������� ������� ������������ $HTTP_POST_FILES
// ������ $_FILES.

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . "allData.txt";


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "���� ��������� � ��� ������� ��������.\n";
} else {
    echo "��������� ����� � ������� �������� ��������!\n";
}
$allDataFile="uploads/allData.txt";
$allDataStr=file_get_contents($allDataFile);

$ratings = explode("\n", $allDataStr);





$filenameCR = "data/critRating.txt";
$fp = fopen($filenameCR,"w"); 
if($fp)
{ 

 fputs($fp, $ratings[0]); 
 fclose($fp); 
} 
for ($k=1;$k<=$numOf�rit;$k++)
{
$filenamePR = "data/provRating".$k.".txt";
$fp = fopen($filenamePR,"w"); 
if($fp)
{ 
 fputs($fp, $ratings[$k]); 
 fclose($fp); 
} 	
}



$filenameCRF = "data/critRating.txt";
echo "<br>��������� ���������<BR>";
$filenamePR = "data/allData.txt";
$fp = fopen($filenamePR,"w"); 
$vectCrit=iter($filenameCRF,$numOf�rit);
	echo "<br>"."<BR>";
for ($i=1;$i<=$numOf�rit;$i++)
{
	echo "<br>��������� ����������� �� ��������� � ".$i."<BR>";
	$filenamePRF = "data/provRating".$i.".txt";
	$vectProv[$i] = iter($filenamePRF,$numOfProv);

}

for ($i=1;$i<=$numOf�rit;$i++)
    for ($j=1;$j<=$numOfProv;$j++)
        $vectProvTr[$j][$i] = $vectProv[$i][$j];
   


  
$finish = mumnozh($vectProvTr,$vectCrit);
	echo "<br>��������� ������<BR>";
for ($i=1;$i<=$numOfProv;$i++)
	$finish[$i]=number_format($finish[$i],3);	
for ($i=1;$i<=$numOfProv;$i++)
	echo $finish[$i]."<br>";
echo "<br><br><br>";

for ($i=1;$i<=$numOfProv;$i++)
	if($finish[$i]==max($finish))
		echo "������ �� ������� ���� �������, �������� ����������� ��������� - ��������� �".$i;
	echo "<br><a href='index.php'>�� �������</a>"
?>