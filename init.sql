CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(20) NOT NULL,
`link` varchar(30) NOT NULL DEFAULT '#',
`parent` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;

INSERT INTO `menu` (`id`, `title`, `link`, `parent`) VALUES
(1, 'Kategoria główna', '#', 0),
(2, 'Podkategoria 1', '#', 1),
(3, 'Podkategoria 1.1', '#', 2),
(4, 'Podkategoria 1.2', '#', 2),
(5, 'Podkateogria 2', '#', 1),
(6, 'Podkategoria 2.1', '#', 5),
(7, 'Podkategoria 2.2', '#', 5),
