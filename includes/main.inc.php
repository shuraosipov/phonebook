<html>

<head>
  <title>����������</title>
<link rel="stylesheet" href="styles/main.css" type="text/css">
<link rel="shortcut icon" href="images/phone.ico" type="text/x-ico">
</head>


<body>
<div>
<!--��������� ��������-->
<?php include 'includes/header.inc';?>
</div>

<div>

<table  class="main">
	<tr class="header">

		<td colspan="100%"> <?php include 'includes/menu.inc';?>  </td>
	</tr>

	<tr class="main">

		<!--������� ������� �����-->
		<td colspan="100%"> <?php
								if (isset($content))echo $content;

								if (isset($_POST['all'])) include_once 'allnumbers.php';

								?>
		</td>

	</tr>
        <!--������ �����-->
	<tr class="footer">
		<td colspan="100%"> <?php include 'includes/footer.inc';?></td>
	</tr>

</table>

</div>
</body>

</html>