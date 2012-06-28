
<?php
function update()
{if ((!empty($_GET['surname'])) ||
	(!empty($_GET['name'])) ||
	(!empty($_GET['secondname'])) ||
	(!empty($_GET['titlejob']))
   )
{
	$id_w = $_GET['id_w'];
	$surname_t = addslashes($_GET['surname']);
	$surname = trim($surname_t);

	$name_t=addslashes($_GET['name']);
	$name = trim($name_t);

	$secondname_t=addslashes($_GET['secondname']);
	$secondname = trim($secondname_t);

	$titlejob_t=addslashes($_GET['titlejob']);
	$titlejob = trim($titlejob_t);
	require_once 'login.php';
	$sql_u = "UPDATE workers SET surname='$surname', name='$name', secondname='$secondname', titlejob='$titlejob' WHERE id='$id_w'";    $result_u = mysql_query($sql_u) or die ("Невозможно выполнить запрос №1 :".mysql_error());
    echo "Данные сотрудника изменены";}
else
{
echo "Заполнены не все поля";
}
}
require_once 'includes/main.inc';

?>
