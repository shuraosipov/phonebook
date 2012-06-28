

<?php
echo <<<HERE
<div align="right">
<form method="GET" action="addtest.php"><br /> <br />
Фамилия<input type="text" name="surname"> <br /> <br />
Имя<input type="text" name ="name"> <br />  <br />
Отчество<input type="text" name="secondname"><br /> <br />
Должность<input type="text" name="titlejob"> <br />  <br />
<input type="submit" name="adddata" value="submit"><br /><br />
</form>
</div>
HERE;

require_once 'login.php';

if (    (!empty($_GET['surname'])) &&
		(!empty($_GET['name']))    &&
		(!empty($_GET['secondname'])) &&
		(!empty($_GET['titlejob']))   )
{
	$surname = $_GET['surname'];
	$name = $_GET['name'];
	$secondname = $_GET['secondname'];
	$titlejob = $_GET['titlejob'];



	$sql = "INSERT INTO workers (surname,name,secondname,titlejob) VALUES ('$surname','$name','$secondname','$titlejob')";
	$result = mysql_query ($sql);
	echo "добавлено";
}
else
{	echo "заполните все поля";
}

?>
