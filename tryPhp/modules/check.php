<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("<body><div align='center'><br/><br/><br/><h3>Вы ввели не всю информацию, вернитесь назад и заполните все поля!" . "<a href='../admin/index.php'> <b>Назад</b> </a></h3></div></body>");
    }
    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);
	
     
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
 
$result = mysql_query("SELECT * FROM login WHERE login='$login'", $dbcon);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow["password"]))
    {
    exit ("<body><div align='center'><br/><br/><br/>
	<h3>Извините, введённый вами login или пароль неверный." . "<a href='../admin/index.php'> <b>Назад</b> </a></h3></div></body>");
    }
    else {
    
    if ($myrow["password"]==$password) {
    $_SESSION['login']=$myrow["login"]; 
    $_SESSION['id']=$myrow["id"];
   header("Location:../admin/index.php"); 
    }
 else {
    
echo $myrow["password"]." ".$password;
    exit ("<body><div align='center'><br/><br/><br/>
	<h3>Извините, введённый вами login или пароль неверный." . "<a href='../admin/index.php'> <b>Назад</b> </a></h3></div></body>");
    }
    }
    ?>