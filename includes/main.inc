<html>

<head>
  <title>справочник</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" href="c:/web/www/eclipse/login/style/main.css" type="text/css">
<link rel="shortcut icon" href="images/phone.ico" type="text/x-ico">
</head>


<body>
<div class="header">
<!--Заголовок страницы-->
<?php include 'includes/header.inc';?>
</div>

<div>

<table align="center" class="main">
	<tr class="header">

		<td> <?php include 'includes/menu.inc';?>  </td>
	</tr>

	<tr class="main">

		<!--Рабочая область страницы-->
		<td colspan="100%"> <?php
								// Открытие страницы приветствия. кнопка "главная" основного меню.
								if (isset($content))echo $content;

                                // Вывод всех записей. кнопка "справочник" основного меню.
								if (isset($_POST['all'])) {require_once 'allnumbers.php'; view();}

								// Нахождение сотрудника по фамилии. кнопка "найти" основного меню.
                                if (isset($_POST['search'])) {require_once 'by_surname.php';search();}

								// Изменение данных сотрудника. кнопка "изменить" страницы справочник.
                                if (isset($_GET['edit'])) {require_once 'edit_profile.php';edit();}

								// Добавление нового сотрудника. кнопка "Добавить" страницы справочник.
								if (isset($_POST['add'])) {require_once 'addworker.php';add();}

								// Добавление нового сотрудника. кнопка "Добавить" страницы справочник.
								if (isset($_GET['adddata'])) {require_once 'addworker.php';add();}

								// Удаление сотрудника и  все данных о нем изо всех таблиц. кнопка "удалить профиль" страницы редактирование данных.
								if (isset($_POST['delete'])) {require_once 'delete.php';del();}

								// Добавдение нового номера для сотрудника.
				                if (isset($_POST['addnumber'])) {require_once 'addnumber.php';addnumber();}

								// Обновление данных сотрудника.
				                if (isset($_GET['update'])) {require_once 'update.php';update();}

                                // Изменение номера сотрудника
				                if (isset($_GET['edit_number'])) {require_once 'edit_number.php';edit_number();}

								// Обновление номера сотрудника
				                if (isset($_POST['update_number'])) {require_once 'update_number.php';update_number();}

								// Удаление номера сотрудника.
				    			if (isset($_POST['delete_number'])) {require_once 'delete_number.php';delete_number();}

                                // Изменение емайла сотрудника
                                if (isset($_GET['edit_email'])) {require_once 'edit_email.php'; edit_email();}

                                // Обновление email сотрудника
				                if (isset($_GET['update_email'])) {require_once 'update_email.php';update_email();}

				                // Удаление email сотрудника
				                if (isset($_GET['delete_email'])) {require_once 'delete_email.php';delete_email();}


				                // Добавдение нового email для сотрудника.
				                if (isset($_POST['addemail'])) {require_once 'addemail.php';addemail();}
								?>
		</td>

	</tr>
        <!--Подвал сайта-->
	<tr class="footer">
		<td colspan="100%"> <?php include 'includes/footer.inc';?></td>
	</tr>

</table>

</div>
</body>

</html>