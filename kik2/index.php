
<!DOCTYPE html>
<html>
    <head>
        
        <title>����� ������� ��������</title>
		<link rel="stylesheet" href="css/style.css">
		<meta charset="windows-1251">
    </head>
    <body>
        <?php
			include ("data/scale_relations.html")
		?>
		
		<br><br><br><br>
		
		<!--������� ����� ����� "������" -->
		
		<form action="cho.php" method="POST">
		<a>���������� ���������, ������� ����� �������������� ��� ������ �����������: <input type="number" name="firstLevel" style="width: 35px;" min=2 max=99 value=2 required pattern="[0-9]{1,2}"></a>
		<br>
		<a>���������� ������������� �����������: <input type="number" name="secondLevel" style="width: 35px;" min=2 max=99 value=2 required pattern="[0-9]{1,2}"></a>
		<br>
		<input type="submit" value="�����">
		</form>

	



	</body>
	</html>