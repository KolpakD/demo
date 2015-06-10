<?php

    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
?>
<form method="post" action="../modules/check.php" class="login">
    <p>
      <label for="login">Логин:</label>
      <input type="text" name="login" maxlength="15" id="login" value="">
    </p>

    <p>
      <label for="password">Пароль:</label>
      <input type="password" name="password" id="password" maxlength="25" value="">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Войти</button>
    </p>

    <p class="forgot-password"><a href="index.html">Забыл пароль?</a></p>
</form>


<?php
    }
    else  
    {
		 $login=$_SESSION['login'];
		 

    $dbcon = mysql_connect("localhost", "sdad", "123987564"); 
    mysql_select_db("sd", $dbcon);
	if (!$dbcon)
	{
    echo "<p>Произошла ошибка при подсоединении к MySQL!</p>".mysql_error(); exit();
    } 
 
$sqlCart = mysql_query("SELECT fio FROM login WHERE login = '$login'", $dbcon);

 while($row = mysql_fetch_array($sqlCart)) 
 { 
$name = $row["name"];
  }
  	mysql_close($dbcon);

    echo "
<div align='center'
style='border: 0px solid blue; position:relative; top:100px; left:350px; height:100px; width:300px;'>

	<font color='green'>Здравствуйте: "."<font color='red'>".$name."</font>!</font>
	      <a href='../modules/exit.php'>Выйти</a> 
   <br/>

</div>";

    }
    ?> 
</body>
</html>