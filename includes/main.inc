<html>

<head>
  <title>����������</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" href="c:/web/www/eclipse/login/style/main.css" type="text/css">
<link rel="shortcut icon" href="images/phone.ico" type="text/x-ico">
</head>


<body>
<div class="header">
<!--��������� ��������-->
<?php include 'includes/header.inc';?>
</div>

<div>

<table align="center" class="main">
	<tr class="header">

		<td> <?php include 'includes/menu.inc';?>  </td>
	</tr>

	<tr class="main">

		<!--������� ������� ��������-->
		<td colspan="100%"> <?php
								// �������� �������� �����������. ������ "�������" ��������� ����.
								if (isset($content))echo $content;

                                // ����� ���� �������. ������ "����������" ��������� ����.
								if (isset($_POST['all'])) {require_once 'allnumbers.php'; view();}

								// ���������� ���������� �� �������. ������ "�����" ��������� ����.
                                if (isset($_POST['search'])) {require_once 'by_surname.php';search();}

								// ��������� ������ ����������. ������ "��������" �������� ����������.
                                if (isset($_GET['edit'])) {require_once 'edit_profile.php';edit();}

								// ���������� ������ ����������. ������ "��������" �������� ����������.
								if (isset($_POST['add'])) {require_once 'addworker.php';add();}

								// ���������� ������ ����������. ������ "��������" �������� ����������.
								if (isset($_GET['adddata'])) {require_once 'addworker.php';add();}

								// �������� ���������� �  ��� ������ � ��� ��� ���� ������. ������ "������� �������" �������� �������������� ������.
								if (isset($_POST['delete'])) {require_once 'delete.php';del();}

								// ���������� ������ ������ ��� ����������.
				                if (isset($_POST['addnumber'])) {require_once 'addnumber.php';addnumber();}

								// ���������� ������ ����������.
				                if (isset($_GET['update'])) {require_once 'update.php';update();}

                                // ��������� ������ ����������
				                if (isset($_GET['edit_number'])) {require_once 'edit_number.php';edit_number();}

								// ���������� ������ ����������
				                if (isset($_POST['update_number'])) {require_once 'update_number.php';update_number();}

								// �������� ������ ����������.
				    			if (isset($_POST['delete_number'])) {require_once 'delete_number.php';delete_number();}

                                // ��������� ������ ����������
                                if (isset($_GET['edit_email'])) {require_once 'edit_email.php'; edit_email();}

                                // ���������� email ����������
				                if (isset($_GET['update_email'])) {require_once 'update_email.php';update_email();}

				                // �������� email ����������
				                if (isset($_GET['delete_email'])) {require_once 'delete_email.php';delete_email();}


				                // ���������� ������ email ��� ����������.
				                if (isset($_POST['addemail'])) {require_once 'addemail.php';addemail();}
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