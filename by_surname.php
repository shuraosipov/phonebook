<?php
// ������ ���������� � ����� ��� � �������
function search()
{
// ����������� ����� � ����������� ���� ������
require_once 'login.php';
$sur = addslashes($_POST['surname']);
$surname = trim($sur);

echo <<<HERE
	<table class="spisok" border="0">

		<tr class="table">
		<td>� �/�</td>
			<td>�������</td>
			<td>���</td>
			<td>��������</td>
			<td>���������</td>
		</tr>
HERE;

// ������� ���������� �� ���������� ������
$sql_s = "SELECT *
			FROM workers
			WHERE surname LIKE '%$surname%'
			LIMIT 10";
$result_s = mysql_query ($sql_s) or die ("���������� ��������� ������ � 1 : ".mysql_error());
	while ($s = mysql_fetch_array($result_s))
	{		$id_w = $s[0];

echo <<<HERE
			<tr class="hvr">
				<td>$s[0]</td>
				<td>$s[1]</td>
				<td>$s[2]</td>
				<td>$s[3]</td>
				<td>$s[4]</td>
			</tr>
			<tr>
				<td>������� :</td>

HERE;

	// ������� ���������� ������ ����������
	$sql_n = "SELECT number
			  FROM numbers
			  WHERE numbers.linkkey = '$id_w'";
	$result_n = mysql_query($sql_n) or die ("���������� ��������� ������ � 2 :".mysql_error());
	while ($n = mysql_fetch_array($result_n))
		{echo <<<HERE
				<td>$n[0]</td>

HERE;		}

echo "</tr>
			<tr>
				<td>E-mail : </td>";
	$sql_e = "SELECT email
			  FROM emails
			  WHERE emails.linkkey = '$id_w'";
	$result_e = mysql_query($sql_e) or die ("���������� ��������� ����� � 3 : ".mysql_error());
	while ($e = mysql_fetch_array($result_e))
		{
echo <<<HERE
				<td>$e[0]</td>

HERE;
		}

	}
echo "</tr></table>";
}


require_once 'includes/main.inc';
?>
