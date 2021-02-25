CREATE TABLE IF NOT EXISTS `client` (
    `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) NOT NULL,
    `mail` varchar(255) NOT NULL,
    `password` varchar (255) NOT NULL,
    KEY `ID` (ID)) 
  ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

INSERT INTO `client` (`ID`, `nom`, `mail`,`password`) VALUES
(1, 'Duault', 'gas.duault@gmail.com','admin');