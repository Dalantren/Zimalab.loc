-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 16 2018 г., 20:19
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Zimalab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `phone_mob` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `phone_work` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `phone_home` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `company`, `position`, `phone_mob`, `phone_work`, `phone_home`) VALUES
(105, 'Артем', 'Иваницкий', 'sova@lala.ru', 'Тусур', 'Инженер', '+7(913) 843-02-49', '35-52-12', '96-14-32'),
(106, 'Костя', 'Николаев', 'kost@mail.ru', 'Энергострой', 'Электрик', '', '89-13-21', ''),
(107, 'Дарья', 'Кострикина', 'dash@iline.dash', 'Тот Самый Бар', 'Бармен', '+7(999) 124-45-56', '', ''),
(108, 'Ольга', 'Коваленко', 'olga.kov@mail.ru', '', '', '', '', ''),
(109, 'Евгений', 'Мавроди', 'mmm@lohi.ru', 'пирамида МММ', 'Царь', '+2(852) 124-32-42', '54-45-16', '72-21-56'),
(110, 'Гриша', 'Усольцев', 'gr@us.ru', 'Тусур', 'Стажер', '+7(954) 542-17-90', '90-80-70', '60-50-40'),
(111, 'Андрей', 'Чуркин', 'andre@mail.ru', 'ООО Топь', 'Пивовар', '', '', ''),
(112, 'Буянто', 'Доржиев', 'booza@best.ru', 'Протон', 'Бузодел', '+7 913 843 2124', '', '98-12-62'),
(113, 'Алексей', 'Запор', '2fast@furious.ru', 'Форсаж', 'Запорожец', '+7(913) 843-02-49', '35-52-21', '12-45-21'),
(114, 'Петр', 'Романов', 'petya@piter.ru', 'Спб', 'Основатель', '', '', ''),
(115, 'Михаил', 'Литвинов', 'mih@lit.ru', '', '', '+7(954) 542-17-90', '34-56-78', '12-21-12'),
(116, 'Руслан', 'Сапогин', 'rus@lan.ru', 'Люксберг', '', '+7(999) 124-45-56', '35-52-12', ''),
(117, 'Гриша', 'Пупкин', 'sova@lala.ru', 'Организация', 'web developer', '+7 913 843 2124', '35-52-25', ''),
(118, 'Петруня', 'Иванов', 'vasya@pupkin.ru', 'Будка', 'Рабочий', '+7(954) 542-17-90', '54-45-16', '72-21-56'),
(119, 'Синица', 'Алая', 'sin@al.ru', 'Форсаж', 'web developer', '+7(999) 124-45-56', '34-56-78', '60-50-40'),
(120, 'Слава', 'Усольцев', '123@te.com', 'mail.ru', 'Junior php разработчик', '+7(913) 843-02-49', '35-42-12', '12-45-21'),
(121, 'Александр', 'Пушкин', 'alex@push.ru', 'Чтиво и Ко', 'Писатель', '', '', ''),
(122, 'Muhhamed', 'Ali', 'Muh@ali.ru', 'organisation', 'должность', '+7(954) 542-17-90', '35-52-25', ''),
(123, 'Кучерьма', 'Николаев', 'us@user.com', 'Чебурек', 'Пивовар', '+7(999) 124-45-56', '', ''),
(124, 'Петр', 'Пупкин', 'vasya@pupkin.ru', 'Тусур', 'Пивовар', '+7(954) 542-17-90', '35-42-12', ''),
(125, 'Алексей', 'Иванов', 'alex@push.ru', 'Александрия', '', '', '', ''),
(126, 'Василий', 'Березуцкий', 'vasya@bereza.ru', 'ЦСКА', 'олдфаг', '+7 913 843 2124', '', ''),
(127, 'Василиса', 'Прекрасная', 'sova@lala.ru', '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
