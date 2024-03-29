-- phpMyAdmin SQL Dump
-- version 3.4.6-rc1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 09 2012 г., 14:20
-- Версия сервера: 5.5.16
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `phonebook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `linkkey` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=51 ;

--
-- Дамп данных таблицы `emails`
--

INSERT INTO `emails` (`id`, `linkkey`, `email`) VALUES
(1, 1, '1311@ooorst.ru'),
(4, 3, 'secretary@ooorst.ru'),
(5, 4, 'нет'),
(6, 5, 'rsu1@ooorst.ru'),
(7, 6, 'rsu2@ooorst.ru'),
(8, 7, 'rsu3@ooorst.ru'),
(9, 8, 'rsu5@ooorst.ru'),
(10, 9, 'rsu1@ooorst.ru'),
(11, 10, 'rsu1@ooorst.ru'),
(12, 11, 'rsu1@ooorst.ru'),
(13, 12, 'rsu2@ooorst.ru'),
(14, 13, 'rsu2@ooorst.ru'),
(15, 14, 'rsu3@ooorst.ru'),
(16, 15, 'rsu3@ooorst.ru'),
(17, 16, 'нет'),
(18, 17, 'rsu5@ooorst.ru'),
(19, 18, 'rsu5@ooorst.ru'),
(20, 19, 'rsu5@ooorst.ru'),
(21, 20, 'нет'),
(22, 21, 'нет'),
(23, 22, 'нет'),
(24, 23, 'нет'),
(25, 24, 'filippova@ooorst.ru'),
(26, 25, 'нет'),
(27, 26, 'нет'),
(28, 27, 'нет'),
(29, 28, '1707@ooorst.ru'),
(30, 29, 'kazieva@ooorst.ru'),
(31, 30, 'нет'),
(32, 31, 'kalinina@ooorst.ru'),
(33, 32, 'shnitko@ooorst.ru'),
(34, 33, 'anufrieva@ooorst.ru'),
(35, 34, 'kokko@ooorst.ru'),
(36, 35, 'нет'),
(37, 36, 'petuhova@ooorst.ru'),
(38, 37, 'нет'),
(39, 38, 'нет'),
(40, 39, 'нет'),
(41, 40, 'нет'),
(42, 41, 'нет'),
(43, 42, 'filatov@ooorst.ru'),
(44, 43, 'нет'),
(45, 44, 'нет'),
(46, 45, 'нет'),
(47, 46, 'tahteev@ooorst.ru'),
(48, 47, 'otb@ooorst.ru'),
(49, 48, 'нет'),
(50, 49, 'osipov@ooorst.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `numbers`
--

CREATE TABLE IF NOT EXISTS `numbers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `linkkey` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=56 ;

--
-- Дамп данных таблицы `numbers`
--

INSERT INTO `numbers` (`id`, `linkkey`, `number`) VALUES
(1, '1', '715536'),
(3, '2', '620670'),
(4, '2', '714532'),
(5, '3', '62-06-66'),
(6, '4', '62-06-69'),
(7, '5', '714218'),
(8, '6', '714182'),
(9, '7', '715391'),
(10, '8', '714672'),
(11, '9', '271864'),
(12, '10', '791836'),
(13, '11', '271873'),
(14, '12', '715526'),
(15, '13', '714784'),
(16, '14', '715521'),
(17, '15', '791835'),
(18, '16', '714625'),
(19, '17', '715732'),
(20, '18', '791834'),
(21, '19', '791806'),
(22, '20', '714748'),
(23, '21', '714548'),
(24, '22', '713964'),
(25, '23', '620662'),
(26, '24', '356591'),
(27, '25', '620649'),
(28, '26', '620652'),
(29, '27', '620651'),
(30, '28', '620655'),
(31, '29', '351170'),
(32, '30', '620693'),
(33, '31', '620657'),
(34, '32', '620661'),
(35, '33', '620661'),
(36, '34', '620654'),
(37, '35', '620668'),
(38, '36', '620668'),
(39, '37', '620673'),
(40, '38', '620675'),
(41, '39', '620671'),
(42, '40', '620671'),
(43, '41', '620676'),
(44, '42', '714800'),
(45, '43', '715113'),
(46, '44', '7157160'),
(47, '45', '337868'),
(48, '46', '339925'),
(49, '47', '271872'),
(50, '48', '263787'),
(51, '49', '260727'),
(52, '49', '620664'),
(54, '22', '620662'),
(55, '34', '714918');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `titlejob` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `surname`, `name`, `secondname`, `titlejob`) VALUES
(1, 'Шарыгин', 'Юрий', 'Александрович', 'Директор'),
(2, 'Турубанов', 'Василий', 'Кимович', 'Заместитель диретора по производству'),
(3, 'Казиева', 'Анна', 'Владимировна', 'Секретарь'),
(4, 'Евтеева', 'Ирина', 'Владимировна', 'Помощник директора по ГО и ЧС'),
(5, 'Сопронюк', 'Евгений', 'Владимирович', 'Начальник РСУ №1'),
(6, 'Хомский', 'Евгений', 'Альбертович', 'Начальник РСУ№ 2'),
(7, 'Шевченко', 'Андрей', 'Иванович', 'Начальник РСУ№ 3'),
(8, 'Киселев', 'Андрей', 'Юрьевич', 'Начальник РСУ№ 5'),
(9, 'Кузнецов', 'Андрей', 'Вячеславович', 'Мастер РСУ № 1'),
(10, 'Поморцев', 'Андрей', 'Зосимович', 'И.О. мастера'),
(11, 'Ефимов', 'Владимир', 'Николаевич', 'И.О. мастера'),
(12, 'Грязнов', 'Валентин', 'Петрович', 'Прораб'),
(13, 'Кучумов', 'Владимир', 'Юрьевич', 'Прораб РСУ №2'),
(14, 'Логинов', 'Сергей', 'Михайлович', 'Прораб РСУ №3'),
(15, 'Якимов', 'Сергей', 'Васильевич', 'Мастер РСУ №3'),
(16, 'Ивашкевич', 'Сергей', 'Иосифович', 'Начальник РСУ №4'),
(17, 'Жаков', 'Николай', 'Иванович', 'Прораб'),
(18, 'Кузьминых', 'Александр', 'Валерьевич', 'Мастер РСУ № 5'),
(19, 'Федорова', 'Надежда', 'Юрьевна', 'И.О. мастера РСУ №5'),
(20, 'Сковоронская', 'Елена', 'Васильевна', 'Диспетчер'),
(21, 'Разумова', 'Ирина', 'Васильевна', 'Диспетчер'),
(22, 'Алина', 'Алина', 'Павловна', 'Кадровик'),
(23, 'Верховцева', 'Надежда', 'Александровна', 'Начальник отдела кадров'),
(24, 'Филиппова', 'Надежда', 'Александровна', 'Главный бухгалтер'),
(25, 'Куклина', 'Ольга', 'Александровна', 'Заместитель главного бухгалтера'),
(26, 'Матвеева', 'Ирина', 'Геннадьевна', 'Бухгалтер материальной части'),
(27, 'Паутова', 'Юлия', 'Александровна', 'Рассчетчик-кассир'),
(28, 'Ивашкевич', 'Елена', 'Иосифовна', 'Зам. главного бухгалтера'),
(29, 'Казиева', 'Татьяна', 'Павловна', 'Начальник'),
(30, 'Степановская', 'Марина', 'Николаевна', 'Заместитель'),
(31, 'Калинина', 'Елена', 'Анатольевна', 'Инженер 2-й категории'),
(32, 'Шнитко', 'Ольга', 'Петровна', 'Инженер 1-й категории'),
(33, 'Ануфриева', 'Елена', 'Ивановна', 'Инженер 1-й категории'),
(34, 'Кокко', 'Хелли', 'Михайловна', 'Начальник КО'),
(35, 'Щербакова', 'Тамара', 'Викторовна', 'Инженер 1-й категории'),
(36, 'Петухова', 'Виктория', 'Леонидовна', 'Специалист'),
(37, 'Костина', 'Галина', 'Александровна', 'Кладовщик'),
(38, 'Филиппова', 'Юлия', 'Владимировна', 'Мастер погрузочно-разгрузочных работ'),
(39, 'Фомина', 'Мария', 'Васильевна', 'Начальник ДОЦ'),
(40, 'Часовникова', 'Лариса', 'Васильевна', 'Технолог'),
(41, 'Батюто', 'Елена', 'Александровна', 'Мастер'),
(42, 'Филатов', 'Александр', 'Викторович', 'Главный механик'),
(43, 'Печкуров', 'Петр', 'Николаевич', 'Механик'),
(44, 'Демин', 'Владимир', 'Семенович', 'Инженер-энергетик'),
(45, 'Бузунов', 'Александр', 'Николаевич', 'Геодезист'),
(46, 'Тахтеев', 'Сергей', 'Германович', 'Председатель профкома'),
(47, 'Овдина', 'Галина', 'Михайловна', 'Начальник ОТБ'),
(48, 'Балакшин', 'Андрей', 'Владимирович', 'Начальник БРУ'),
(49, 'Осипов', 'Александр', 'Михайлович', 'Инженер-программист');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
