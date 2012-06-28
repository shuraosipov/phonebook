<?php
function update_email()
{$id_e = $_GET['id_e'];

$email_t = addslashes($_GET['email']);
$email = trim($email_t);

require_once  'login.php';$sql = "UPDATE emails SET email='$email' WHERE id='$id_e'";
$result = mysql_query($sql) or die ("Невозможно обновить email".mysql_error());
echo "Данные сотрудника изменены";
}
require_once 'includes/main.inc';

?>
