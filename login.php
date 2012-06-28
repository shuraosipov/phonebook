<?php
$host = 'localhost';
$user = 'root';
$password = '12345';
$database = 'phonebook';
mysql_connect($host, $user, $password) or die ("Невозможно подключиться к MySQL : ".mysql_error());
mysql_select_db($database) or die ("Невозможно подлкючиться к базе данных : ".mysql_error());
date_default_timezone_set('Europe/Moscow');
// Настройка локали
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251', 'russian');
// Настройка подключения к базе данных
mysql_query('SET names "cp1251"');
?>