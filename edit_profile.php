<?php
function edit()
{
	if (!isSet($_GET['id_w']))
		{			echo "Не выбрана запись для редактирования";		}
	else
		{
			$id_w = $_GET['id_w'];
require_once 'login.php';

		// выбор сотрудника из таблицы workers
		$sql_w =  "SELECT surname,name,secondname,titlejob
				 FROM workers
				 WHERE id = '$id_w'";
		$result_w = mysql_query($sql_w) or die ("Невозможно выполнить запрос № 1 :".mysql_error());
		$w = mysql_fetch_array($result_w);
echo <<<HERE

<table width="100%" border="0">

            <tr>

					<td valign="top" width="30%">
						 Фамилия      <br /> <br />
						 <form method="GET" action="edit_profile.php">
	                     <input type="text" name="surname" value=$w[0] size="50"><br /><br />
	                     Имя   <br />      <br />
	                     <input type="text" name="name" value=$w[1] size="50">   <br /><br />
	                     Отчество   <br />  <br />
	                     <input type="text" name="secondname" value=$w[2] size="50"> <br /><br />
	                     Должность     <br /> <br />
	                     <input type="text" name="titlejob" value=$w[3] size="50">   <br /><br />
	                     <br /> <br />    <br />
	                     <input class="edit" type="submit" name="update" value="сохранить изменения"><br />
	                     <input type="hidden" name="id_w" value=$id_w>
	                     </form>
					</td>



					<td valign="top" width="30%">
                    Телефонный номер:<br /><br />

					<form method="GET" action="edit_number.php">
HERE;
					$sql_n = "SELECT id, number
							  FROM numbers
							  WHERE linkkey='$id_w'";
					$result_n = mysql_query ($sql_n) or die ("Не могу найти номер, проверь запрос : ".mysql_error());
					while ($n = mysql_fetch_array($result_n))
					{
                       echo "<label> | $n[1] <input type=\"radio\" name=\"id_n\" value=$n[0]></label><br />";
                    }
echo <<<HERE

						<br /><input id="numberedit" type="submit" name="edit_number" value="изменить номер" title="изменить выбранный номер">
						</form>

						<form method="POST" action="addnumber.php">
		   					<input type="text" name="number">
		   					<input id="numberedit"  type="submit" name="addnumber" value="добавить номер">
		   					<input type="hidden" name="id_w" value=$id_w>
						 </form>
                        <hr>
                    <br />
					Почтовый ящик:<br />  <br />
					<form method="GET" action="edit_email.php">
HERE;
					$sql_e = "SELECT id,email
							  FROM emails
							  WHERE linkkey = '$id_w'";
					$result_e = mysql_query($sql_e) or die ("Не могу найти емайл : ".mysql_error());
					while ($e = mysql_fetch_array($result_e))
					{
						echo "<label> | $e[1] <input type=\"radio\" name=\"id_e\" value=$e[0]></label><br />";
						echo "<input type=\"hidden\" name=\"email\" value=$e[1]>";
					}
echo <<< HERE
					<br /><input id="numberedit" type="submit" name="edit_email" value="изменить адрес" title="изменить выбранный адрес">

					</form>

					<form method="POST" action="addemail.php">
		   					<input type="text" name="email">
		   					<input id="numberedit"  type="submit" name="addemail" value="добавить email">
		   					<input type="hidden" name="id_w" value=$id_w>
					</form>


					</td>

			</tr>

</table>
HERE;


        	}

}
require_once 'includes/main.inc';

?>
