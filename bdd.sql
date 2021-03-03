create table `client`
(
  `id_cli` int unsigned NOT NULL AUTO_INCREMENT,
  `nom_cli` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `passeword` varchar(255) NOT NULL,
  `immatriculation` varchar(255) NOT NULL,
  KEY `id_cli`(`id_cli`))
  ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51;

INSERT INTO `client` (`id_cli`, `nom_cli`, `mail`, `passeword`, `immatriculation`) VALUES 
(1,'Duault','gas.duault@gmail.com','admin','12zs6da4'),
(2,'lambda','lambda@yahoo.fr','jesuislambda','zet3g6h5');


create table `table_objection`(
  `id_objection` int unsigned NOT NULL AUTO_INCREMENT,
  `objection` varchar(255) NOT NULL,
  KEY `id_objection`(`id_objection`))
  ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51;

INSERT INTO `table_objection` (`id_objection`, `objection`) VALUES 
(1,'trop cher'),
(2,'peur'),
(3,'compliqué'),
(4,'besoin de rien'),
(5,'pas le temps'),
(6,'réfléchir'),
(7,'muet');


create table `table_reponse`
(
  `id_reponse` int unsigned NOT NULL AUTO_INCREMENT,
  `reponse` varchar(255) NOT NULL,
  KEY `id_reponse`(`id_reponse`))
  ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51;

INSERT INTO `table_reponse` (`id_reponse`, `reponse`) VALUES 
(1,'notre offre est largement rentable'),
(2,'vous pouvez nous faire confiance'),
(3,'nous nous occupons de tout'),
(4,'nottre offre est la moin cher sur le marché'),
(5,'Quels sont vos enjeux cette année ?'),
(6,'Quand puis-je vous en reparler ?'),
(7,'Vous êtes pressé, mais pouvez-vous me dire si vous disposez de tel produit ?'),
(8,'Vous avez entendu parler de ce que a fait notre concurrent ?'),
(9,'Un certain nombre de points restent flous pour vous ?'),
(10,'La qualité se paie'),
(11,'Quand vous aurez gagné des parts de marché grâce à moi, vous ne douterez plus, vous serez enthousiaste');


create table `jonction`
(
  `id_jonction` int unsigned NOT NULL AUTO_INCREMENT,
  `id_objection` int unsigned NOT NULL,
  `id_reponse` int unsigned NOT NULL,
  KEY `id_jonction`(`id_jonction`))
  ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51;


alter table `jonction`
  add constraint `fk1_jonction` foreign key (`id_objection`)
  references `table_objection`(`id_objection`);

alter table `jonction`
  add constraint `fk2_jonction` foreign key (`id_reponse`)
  references `table_reponse`(`id_reponse`);

INSERT INTO `jonction` (`id_jonction`, `id_objection`, `id_reponse`) VALUES 
(1,1,1),
(2,2,2),
(3,3,3),
(4,1,4),
(5,4,5),
(6,5,6),
(7,5,7),
(8,5,8),
(9,6,9),
(10,1,10),
(11,7,11);