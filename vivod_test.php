<?php
echo <<<HERE
<form method="GET" action=$action>
<input type="sumbit" value="submit">
<input type="radio" name="one" value="1" checked>
<input type="radio" name="one" value="2">
<input type="radio" name="two" value="3">
<input type="radio" name="two" value="4">
</form>
HERE;
if (isset($_GET['one'])) {$action = "update_one.php";}
elseif (isset($_GET['two'])) $action = "update_two.php";


?>
