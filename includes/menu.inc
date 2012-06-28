<table class="menu">
<tr>
	<td>
		<form method="POST" action="index.php">
			<input class="submit" type="submit" value="главна€">
		</form>
	</td>
	<td>
		<form method="POST" action="allnumbers.php">
			<input class="submit" type="submit" value="справочник" name="all">
		</form>
	</td>

	<td align="right">
		<form method="POST" action="by_surname.php" onSubmit="if(!this.surname.value){alert('¬ведите фамилию дл€ начала поиска!');return false}";>

			<input type="submit" class="submit" value="поиск" name="search">
			<input type="text" name="surname" placeholder="&nbsp;&nbsp;&nbsp;введите фамилию...">
		</form>
	</td>
</tr>
</table>



