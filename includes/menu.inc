<table class="menu">
<tr>
	<td>
		<form method="POST" action="index.php">
			<input class="submit" type="submit" value="�������">
		</form>
	</td>
	<td>
		<form method="POST" action="allnumbers.php">
			<input class="submit" type="submit" value="����������" name="all">
		</form>
	</td>

	<td align="right">
		<form method="POST" action="by_surname.php" onSubmit="if(!this.surname.value){alert('������� ������� ��� ������ ������!');return false}";>

			<input type="submit" class="submit" value="�����" name="search">
			<input type="text" name="surname" placeholder="&nbsp;&nbsp;&nbsp;������� �������...">
		</form>
	</td>
</tr>
</table>



