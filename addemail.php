<?php
function addemail()
{	if (!empty($_POST['email']))
	{
		require_once 'login.php';

		$id_w = $_POST['id_w'];
		$email = $_POST['email'];
		$sql = "INSERT INTO emails (linkkey, email) VALUES ('$id_w','$email')";
		$result = mysql_query($sql) or die ("Невозможно выполнить запрос : ".mysql_error());
		echo "email успешно добавлен";
	}
	else
	{		echo "заполните поле email";	}}
require_once 'includes/main.inc';

?>

