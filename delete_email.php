<?php
function delete_email()
{
	require_once 'login.php';
 	$id_e = $_GET['id_e'];
  	$sql = "DELETE FROM emails WHERE id='$id_e'";
  	$result = mysql_query ($sql) or die ("���������� ��������� ������ �� �������� :".mysql_error());
  	echo "������ ������� �������";}
require_once 'includes/main.inc';


?>
