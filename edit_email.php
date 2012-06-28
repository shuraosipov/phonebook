<?php
function edit_email()
{
 	if (!isset($_GET['id_e']))
    {    	echo "выберите email для редактирования";
    }
    else
    {
     $id_e = $_GET['id_e'];
     $email = $_GET['email'];

echo <<<HERE
Редактировать e-mail<br />  <br />
<form method="GET" action="update_email.php">
	<input type="text" name="email" value=$email>
	<input class="edit" type="submit" name="update_email" value="сохранить изменения">
	<input type="hidden" name="id_e" value=$id_e >
</form>
<form method="GET" action="delete_email.php">
	<input class="edit" type="submit" name="delete_email" value="удалить e-mail">
	<input type="hidden" name="id_e" value=$id_e >
</form>
HERE;

    }
}
require_once 'includes/main.inc';
?>