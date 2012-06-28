<?php
function view()
{
require_once 'login.php';
echo <<<ECHO
    <table align="right" border="0">
    <tr>
	    <td>
		    <form method="POST" action="addworker.php">
		    <input class="edit" type="submit" name="add" value="добавить">
		    </form>
	    </td>

	    <td>
		    <form method="GET" action="edit_profile.php">
		    <input class="edit" type="submit" value="изменить" name="edit">
		</td>

	    <td valign="top">
	   		 <input class="edit" type="reset"  value="сброс"    name="reset">
	    </td>
    </tr>
    </table>

	<table align="center" class="spisok" border="0">

		<tr class="table">

			<td>№ п/п</td>
			<td>Фамилия</td>
			<td>Имя</td>
			<td>Отчество</td>
			<td>Должность</td>
		</tr>
		<tr>
			<td colspan="100%">
				&nbsp;
			</td>
		</tr>

ECHO;


	$sql_a = "SELECT *
			 FROM workers
 				GROUP BY surname
			 ORDER BY workers.id";
	$result_a = mysql_query($sql_a) or die ("Невозможно выполнить запрос № 1: ".mysql_error());
	while ($a = mysql_fetch_array($result_a))
{       $id_w = $a[0];
echo <<<ECHO

		<tr class="hvr">

			<td class="all">$a[0]</td>
			<td class="all">$a[1]</td>
			<td class="all">$a[2]</td>
			<td class="all">$a[3]</td>
			<td class="all">$a[4]</td>
			<td>

				<input type="radio" name="id_w" value=$a[0]>


			</td>

		</tr>

		<tr>
			<td><b>Телефон :</b></td>

ECHO;

	$sql_n = "SELECT number
			FROM numbers
			WHERE numbers.linkkey='$id_w'";
	$result_n = mysql_query ($sql_n) or die ("Невозможно выполнить запрос № 2 : ".mysql_error());
	while ($n = mysql_fetch_array($result_n))
	{echo <<<ECHO


			<td>$n[0]</td>

ECHO;
    }
echo <<<ECHO
		</tr>

		<tr>
			<td><b>E-mail :<b></td>

ECHO;
	$sql_e = "SELECT email
			FROM emails
			WHERE emails.linkkey='$id_w'";
	$result_e = mysql_query ($sql_e) or die ("Невозможно выполнить запрос № 3 : ".mysql_error());
	while ($e = mysql_fetch_array($result_e))
	{
echo <<<ECHO


			<td>$e[0]</td>


ECHO;
    }
echo <<<HERE
	<tr>
		<td>&nbsp;
		</td>
		</tr>
HERE;

}

echo "</form></tr></table>";
}
require_once 'includes/main.inc';


?>
