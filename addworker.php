<?php
function add()
{
echo <<<HERE
<center>���������� ������ ���������� � ����������<center><br />
<table align="center" border="1" cellspacing="10" cellpadding="10">

<form method="GET" action="addworker.php" >
	<tr>
		<td>
			�������
		</td>

		<td>
			<input type="text" name="surname">
		</td>
   </tr>

	<tr>
		<td>
			���
		</td>

		<td>
			<input type="text" name="name">
		</td>
   </tr>

   <tr>
		<td>
			��������
		</td>

		<td>
			<input type="text" name="secondname">
		</td>
   </tr>

   <tr>
		<td>
			���������
		</td>

		<td>
			<input type="text" name="titlejob">
		</td>
  </tr>

  <tr>
		<td>
			�������
		</td>

		<td>
			<input type="text" name="number">
		</td>
  </tr>

  <tr>
		<td>
			E-mail
		</td>

		<td>
			<input type="text" name="email">
		</td>
  </tr>

  <tr>
		<td>
			&nbsp;
		</td>

		<td>

			<input class="edit" type="submit" name="adddata" value="��������">
			</form>
		</td>
  </tr>
</table>
HERE;
// ��������� ���������� � mysql � ����� ������
require_once 'login.php';

// �������� �� ���� ������ �����
if (    (!empty($_GET['surname'])) &&
		(!empty($_GET['name']))    &&
		(!empty($_GET['secondname'])) &&
		(!empty($_GET['number'])) &&
		(!empty($_GET['titlejob']))   )
	{
		// ������������ � ������� ������� � ������ � ����� �������� ����������
		$surname_t = addslashes($_GET['surname']);
		$surname = trim($surname_t);

		$name_t = addslashes($_GET['name']);
		$name = trim($name_t);

		$secondname_t = addslashes($_GET['secondname']);
		$secondname = trim($secondname_t);

		$titlejob_t = addslashes($_GET['titlejob']);
		$titlejob = trim($titlejob_t);

		$number_t = addslashes($_GET['number']);
		$number = trim($number_t);

		$email_t = addslashes($_GET['email']);
		$email = trim($email_t);


        // ������ �� ���������� ������ � ������� workers
		$sql = "INSERT INTO workers (surname,name,secondname,titlejob) VALUES ('$surname','$name','$secondname','$titlejob')";
		$result = mysql_query ($sql) or die ("������ � ������� �1".mysql_error());
		// �����������  id ����������� ������
		$id_w = mysql_insert_id();
  		$linkkey = $id_w;

		// ������ �� ���������� ������ � ������� numbers
		$sql_n = "INSERT INTO numbers (linkkey,number) VALUES ('$linkkey', '$number')";
		$result_n = mysql_query($sql_n) or die ("������ � ������� �2".mysql_error());

		// ������ �� ���������� ������ � ������� emails
		$sql_e = "INSERT INTO emails (linkkey,email) VALUES ('$linkkey', '$email')";
		$result_ = mysql_query($sql_e) or die ("������ � ������� �3".mysql_error());

		echo "������ ������� ���������";
	}
else
	{
		echo "���������� ��������� ��� ����";
	}

}
require_once 'includes/main.inc';


?>
