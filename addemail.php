<?php
function addemail()
{	if (!empty($_POST['email']))
	{
		require_once 'login.php';

		$id_w = $_POST['id_w'];
		$email = $_POST['email'];
		$sql = "INSERT INTO emails (linkkey, email) VALUES ('$id_w','$email')";
		$result = mysql_query($sql) or die ("���������� ��������� ������ : ".mysql_error());
		echo "email ������� ��������";
	}
	else
	{		echo "��������� ���� email";	}}
require_once 'includes/main.inc';

?>

