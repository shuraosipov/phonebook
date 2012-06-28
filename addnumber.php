<?php
function addnumber()
{	if (!empty($_POST['number']))
	{
		$id_w = $_POST['id_w'];
		$number = $_POST['number'];

		require_once 'login.php';
		$sql = "INSERT INTO numbers (linkkey,number) VALUES('$id_w', '$number')";
		$result = mysql_query($sql) or die ("Ошибка в запросе".mysql_error());
		echo "Телефонный номер успешно добавлен";
	}
	else
	{		echo "заполните поле для добаления нового номера";	}
}
require_once 'includes/main.inc';
?>
