<?php
function update_number()
{

	$number_t = addslashes($_POST['number']);
	$number = trim($number_t);
	$id_n = $_POST['id_n'];
	require_once 'login.php';
	$sql_u = "UPDATE numbers SET number='$number'
			  WHERE id='$id_n'";
    $result_u = mysql_query($sql_u) or die ("Невозможно выполнить запрос №1 :".mysql_error());
    echo "Данные сотрудника изменены";
}

require_once 'includes/main.inc';
?>