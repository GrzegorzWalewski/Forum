--
-- Baza danych: `forum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `authorname` varchar(255) DEFAULT NULL,
  `authormail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) DEFAULT NULL,
  `new_password_key` varchar(50) DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) DEFAULT NULL,
  `new_email_key` varchar(50) DEFAULT NULL,
  `last_ip` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `author`
--

INSERT INTO `author` (`id`, `authorname`, `authormail`, `password`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(2, 'Grzojdaaaaaa', 'alakadazam@uuqw.kk', '$2a$08$dgthgL5DYbExXoAzUkoOr.1/SIiWPlTzZvB3WbXtdAuQhzxXs35C6', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2017-02-27 20:29:23', '0000-00-00 00:00:00', '2017-02-27 19:29:23'),
(3, 'Grzegorz', 'grzojda@gmial.com', 'passworek', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49'),
(8, 'Ten LEpszy', 'jjslmsdf@gnm.pl', 'niemahasla', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49'),
(9, 'kupa', 'grzesiu2203@gmail.com', 'itakniezgadniesz', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49'),
(10, 'Blondynka', 'gunwo@gg.pkl', 'najlepszehaslo', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49'),
(11, 'Burak', 'frzygam@uu1.pl', 'mizeria', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49'),
(13, 'Blondynka', 'marianna.pomykala@vip.onet.pl', 'kochamjoo', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49'),
(14, 'As', 'gggguhi@ggcjh.pl', 'loljuznie', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49'),
(15, 'Grzojdatel', 'grzojda@gmail.com', '$2a$08$n5bJYHgjFbaEyD2jrSemrewH4GYyQgDl2MlT2cVw1h6/4TgfomjDK', 1, 0, NULL, NULL, NULL, NULL, '4076fc9c34d70e9855c3cdf56afadb60', '192.168.0.148', '2017-02-03 14:33:15', '2017-01-28 15:55:44', '2017-02-03 13:33:15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
