<?php
function addnumber()
{	if (!empty($_POST['number']))
	{
		$id_w = $_POST['id_w'];
		$number = $_POST['number'];

		require_once 'login.php';
		$sql = "INSERT INTO numbers (linkkey,number) VALUES('$id_w', '$number')";
		$result = mysql_query($sql) or die ("������ � �������".mysql_error());
		echo "���������� ����� ������� ��������";
	}
	else
	{		echo "��������� ���� ��� ��������� ������ ������";	}
}
require_once 'includes/main.inc';
?>
