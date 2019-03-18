CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(20) NOT NULL,
`link` varchar(30) NOT NULL DEFAULT '#',
`parent` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;

INSERT INTO `menu` (`id`, `title`, `link`, `parent`) VALUES
(1, 'Home', '#', 0),
(2, 'About Us', '#', 0),
(3, 'PHP', '#', 0),
(4, 'Wordpress', '#', 3),
(5, 'Joomla', '#', 3),
(6, 'Mobile Development', '#', 0),
(7, 'Android', '#', 6),
(8, 'iphone', '#', 6),
(9, 'Joomla 1.5', '#', 5),
(10, 'Joomla 2.5', '#', 5);