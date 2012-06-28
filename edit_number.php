<?php
function edit_number()
{	if (!isSet($_GET['id_n']))
	{		echo "¬ыберите номер дл€ редактировани€";	}
	else
	{echo <<<HERE
		<form method="POST" action="update_number.php">
HERE;		require_once 'login.php';
		$id_n = $_GET['id_n'];

		$sql_n = "SELECT id,number FROM numbers WHERE id='$id_n'";
		$result_n = mysql_query ($sql_n);
		$n = mysql_fetch_array($result_n);
echo <<<HERE

		–едактирование номера<br /><br /><input type="text" name="number" value=$n[1]>
		<input class="edit" type="submit" name="update_number" value="сохранить изменени€">
		<input type="hidden" name="id_n" value=$id_n>
		</form>

		<form method="POST" action="delete_number.php">
		<input class="edit" type="submit" name="delete_number" value="удалить номер">
		<input type="hidden" name="id_n" value=$id_n>
		</form>
HERE;
	}}
require_once 'includes/main.inc';


?>

