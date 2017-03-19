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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Rola urzytkownika'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `author`
--

INSERT INTO `author` (`id`, `authorname`, `authormail`, `password`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `role`) VALUES
(2, 'Grzojdaaaaaa', 'alakadazam@uuqw.kk', '$2a$08$dgthgL5DYbExXoAzUkoOr.1/SIiWPlTzZvB3WbXtdAuQhzxXs35C6', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2017-03-19 18:46:35', '0000-00-00 00:00:00', '2017-03-19 17:46:35', 'administrator'),
(3, 'Grzegorz', 'grzojda@gmial.com', '$2a$08$dgthgL5DYbExXoAzUkoOr.1/SIiWPlTzZvB3WbXtdAuQhzxXs35C6', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2017-03-06 16:25:32', '0000-00-00 00:00:00', '2017-03-06 15:25:32', ''),
(8, 'Ten LEpszy', 'jjslmsdf@gnm.pl', 'niemahasla', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49', ''),
(9, 'kupa', 'grzesiu2203@gmail.com', 'itakniezgadniesz', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49', ''),
(10, 'Blondynka', 'gunwo@gg.pkl', 'najlepszehaslo', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49', ''),
(11, 'Burak', 'frzygam@uu1.pl', 'mizeria', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49', ''),
(13, 'Blondynka', 'marianna.pomykala@vip.onet.pl', 'kochamjoo', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49', ''),
(14, 'As', 'gggguhi@ggcjh.pl', 'loljuznie', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-01-23 06:07:49', ''),
(15, 'Grzojdatel', 'grzojda@gmail.com', '$2a$08$n5bJYHgjFbaEyD2jrSemrewH4GYyQgDl2MlT2cVw1h6/4TgfomjDK', 1, 0, NULL, NULL, NULL, NULL, '4076fc9c34d70e9855c3cdf56afadb60', '192.168.0.148', '2017-02-03 14:33:15', '2017-01-28 15:55:44', '2017-02-03 13:33:15', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posty`
--

CREATE TABLE `posty` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `authorname` text COLLATE utf8_bin NOT NULL,
  `starttime` date NOT NULL,
  `actudate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'data ostatniej aktualizacji',
  `odp` int(11) NOT NULL DEFAULT '0' COMMENT 'Liczba odpowiedzi',
  `wys` int(11) NOT NULL DEFAULT '0' COMMENT 'Wyswietlony',
  `lastuser` text COLLATE utf8_bin NOT NULL COMMENT 'urzytkownik ktory ostatni cos dodal',
  `watkiid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `posty`
--

INSERT INTO `posty` (`id`, `name`, `authorname`, `starttime`, `actudate`, `odp`, `wys`, `lastuser`, `watkiid`) VALUES
(1, 'Głowny Regulamin', 'Grzojda', '2017-02-24', '2017-03-13 18:49:51', 0, 10, 'Grzojda', 1),
(6, 'Regulamin Dotyczący  wątków', 'Grzojdaaaaaa', '2017-03-19', '2017-03-19 18:04:00', 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'Grzojda', '$2a$08$dgthgL5DYbExXoAzUkoOr.1/SIiWPlTzZvB3WbXtdAuQhzxXs35C6', 'grzojda@gmail.com', 1, 0, NULL, NULL, NULL, NULL, 'c728cf89ec59c6e3208f5bafe7ab77a1', '::1', '2017-01-23 07:09:05', '2017-01-16 07:39:51', '2017-01-23 06:09:05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('3b6005cec6d7f00620bf3152030ff476', 15, 'Mozilla/5.0 (Linux; U; Android 4.4.2; pl-pl; A916 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/42.0.0.0 Mobile Safari/537.', '192.168.0.148', '2017-02-03 13:33:15'),
('bfb557ea6bed8b521144407293a75360', 2, 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0', '::1', '2017-01-27 08:50:55');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `watki`
--

CREATE TABLE `watki` (
  `id` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_bin NOT NULL,
  `authorname` text COLLATE utf8_bin NOT NULL,
  `posts` int(11) NOT NULL DEFAULT '0',
  `startdate` date NOT NULL,
  `important` int(1) NOT NULL DEFAULT '0',
  `actudate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `watki`
--

INSERT INTO `watki` (`id`, `name`, `authorname`, `posts`, `startdate`, `important`, `actudate`) VALUES
(1, 'Regulamin', 'Grzojda', 1, '0000-00-00', 1, '2017-02-24 04:53:26'),
(2, 'Telefony', 'Grzojdaaaaaa', 0, '2017-03-13', 0, '2017-03-13 18:22:08');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wpisy`
--

CREATE TABLE `wpisy` (
  `id` int(11) NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Czas dodania lub modyfikacji',
  `authorname` text NOT NULL COMMENT 'Nazwa urzytkownika',
  `text` text NOT NULL COMMENT 'Caly tekst wpisu',
  `postyid` int(11) NOT NULL,
  `watkiid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Wszystkie wpisy';

--
-- Zrzut danych tabeli `wpisy`
--

INSERT INTO `wpisy` (`id`, `addtime`, `authorname`, `text`, `postyid`, `watkiid`) VALUES
(1, '2017-03-13 18:49:34', 'Grzojda', 'Nie przeklinamy!', 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watkiid` (`watkiid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watki`
--
ALTER TABLE `watki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wpisy`
--
ALTER TABLE `wpisy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `postyid` (`postyid`,`watkiid`),
  ADD KEY `watkiid` (`watkiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `posty`
--
ALTER TABLE `posty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `watki`
--
ALTER TABLE `watki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `wpisy`
--
ALTER TABLE `wpisy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `posty`
--
ALTER TABLE `posty`
  ADD CONSTRAINT `posty_ibfk_1` FOREIGN KEY (`watkiid`) REFERENCES `watki` (`id`);

--
-- Ograniczenia dla tabeli `wpisy`
--
ALTER TABLE `wpisy`
  ADD CONSTRAINT `wpisy_ibfk_1` FOREIGN KEY (`postyid`) REFERENCES `posty` (`id`),
  ADD CONSTRAINT `wpisy_ibfk_2` FOREIGN KEY (`watkiid`) REFERENCES `watki` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
