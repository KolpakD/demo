
<!DOCTYPE html>
<html>
    <head>
        
        <title>Метод анализа иерархий</title>
		<link rel="stylesheet" href="css/style.css">
		<meta charset="windows-1251">
    </head>
    <body>
        <?php
			include ("data/scale_relations.html")
		?>
		
		<br><br><br><br>
		
		<!--Верхняя шапка листа "Расчет" -->
		
		<form action="cho.php" method="POST">
		<a>Количество критериев, которые будут использоваться при выборе поставщиков: <input type="number" name="firstLevel" style="width: 35px;" min=2 max=99 value=2 required pattern="[0-9]{1,2}"></a>
		<br>
		<a>Количество потенциальных поставщиков: <input type="number" name="secondLevel" style="width: 35px;" min=2 max=99 value=2 required pattern="[0-9]{1,2}"></a>
		<br>
		<input type="submit" value="Далее">
		</form>

	



	</body>
	</html>