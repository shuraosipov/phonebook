<?php
function delete_number()
{
$id_n = $_POST['id_n'];

require_once 'login.php';
$sql = "DELETE FROM numbers WHERE id = '$id_n'";
$result = mysql_query($sql) or die ("���������� ��������� ������ �� ��������".mysql_error());
echo "������ ������� �������";
}
require_once 'includes/main.inc';


?>
