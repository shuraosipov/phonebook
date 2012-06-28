<?php
function del()
{
require_once 'login.php';
$id_w = $_POST['id_w'];


$sql_e = "delete from emails where linkkey='$id_w'";
$result_e = mysql_query($sql_e) or die ("error 1 ".mysql_error());

$sql_n = "delete from numbers where linkkey='$id_w'";
$result_n = mysql_query($sql_n) or die ("error 2 ".mysql_error());

$sql_w = "delete from workers where id='$id_w'";
$result_w = mysql_query($sql_w) or die ("error 3 ".mysql_error());

echo "запись успешно удалена";
}
require_once 'includes/main.inc';
?>
