Drop database if exists BDD_PPE;
Create database BDD_PPE;
Use BDD_PPE;

Create table client (
    idclient int(11)not null auto_increment,
    nomC varchar(50),
    prénomC varchar(50),
    emailC varchar(70),
    telephoneC int(10),
    regionC varchar(50),
    villeC varchar(50),
    primary key(idclient)
) ENGINE=InnoDB;
-- ENGINE=InnoDB : permet de gérer l'intégrité des données, même lors d'un crash du server


insert into client values
(null, "Amar", "Raphael", "Amar.raphael@yahoo.fr", "0606060606", "Poitou chrente", "Absent"),
(null, "Mariani", "Paul", "Maria.paulo@yahoo.fr", "0707070707", "Ile de France", "Absent");

Create table users (
	id_u int not null auto_increment,
	pseudo varchar(15) UNIQUE,
	firstName varchar(50),
	lastName varchar(50),
	email varchar(255) UNIQUE,
    datenaiss varchar(11),
	mdp varchar(255),
    age int (3) default 0,
	lvl int not null default 1,
	primary key(id_u)
) ENGINE=InnoDB;

Insert into users values
(null, "Nepik", "Lucas", "LABASTUGUE", "lucas@gmail.com", "1998-03-29", "107d348bff437c999a9ff192adcb78cb03b8ddc6",1, 1),
(null, "Popo", "Paul", "MARIANI", "popo@gmail.com", "2008-07-15", "107d348bff437c999a9ff192adcb78cb03b8ddc6",1, 1);

-- Trigger :



-- fin trigger.

Create table commande (
    idcommande int(3) not null auto_increment,
    iduser varchar(50),
    dateC date,
    primary key(idcommande)
) ENGINE=InnoDB;

insert into commande values
(null, 1, "2020-04-25"),
(null, 2, "2020-04-27");

Create table produit (
  	idP int(11) not null auto_increment,
  	nom varchar(50),
	dateMiseEnBouteille date,
	domaine varchar(30),
	type varchar(20),
	degreAlcol varchar(5),
    prix float(25),
    primary key(idP)
) ENGINE=InnoDB; 

insert into produit values
(null, "Château Val d’Or", "1968-04-25", "Château Pontet Fumet", "blanc", "24.4%", 20),
(null, "Côtes Du Rhône", "2014-10-14","Château de Montesquieu", "Rouge", "28%", 40),
(null, "Côtes De Mer", "2012-08-07","Domaine de La Vache", "rouge", "37%", 60),
(null, "Mon Château", "2011-01-15","Domaine de Champeret", "blanc", "19.5%", 80),
(null, "Seine et Marne", "1992-04-17","Château de Pierre", "blanc", "28%", 45),
(null, "Château De Marne", "1684-09-08","Domaine de Raganrok", "rouge", "17%", 10),
(null, "Côtes De La Mort", "2014-06-25","Domaine de Madrid", "rosé", "14.5%", 25),
(null, "Château Ruinart", "1994-04-25","Château Laronne", "Brut", "23%", 40),
(null, "Château Ruinart", "2011-11-11","Château de Montesquieu", "Brut millésimé", "28.4%", 25),
(null, "Château Ruinart", "2012-09-17","Château Laronne", "Demi-sec", "12%", 78),
(null, "MILLÉSIMÉ", "2011-01-15","Domaine de Champeret", "blanc de noirs", "14%", 40),
(null, "Poitu Charente", "1942-04-17","Château de Marc", "blanc de noirs", "21.1%", 60),
(null, "Château De Marne", "1963-010-05","Domaine de Viking", "Blanc de Blancs", "4%", 25),
(null, "Côtes De La Mort", "2017-07-15","Château de Pompier", "Brut", "24.4%", 20),
(null, "Gin", "2000-05-10","Larios", "fort", "40%", 65),
(null, "Wisky", "2002-04-15","Laronne", "Brut", "45%", 20),
(null, "Wisky", "2001-06-11", "Jet", "Brut millésimé", "60%", 30),
(null, "Wisky", "2014-01-14","Cronobourg", "Demi-sec", "41%", 35),
(null, "Vodka,", "2011-04-05","Poliakof", "blanc de noirs", "39.5%", 45),
(null, "Wisky", "2012-09-07","W&S", "blanc de noirs", "34.5%", 60),
(null, "Vodka", "2000-12-25","Enutrof", "Blanc de Blancs", "40%", 40),
(null, "Gin", "2018-11-30","Tonik", "Brut", "42.2%", 30),
(null, "Côtes Du Rhône", "2016-11-24","Domaine de Verret", "Rouge", "18%", 20),
(null, "Côtes De Reine", "2014-10-04","Domaine de Verret", "blanc", "17%", 10),
(null, "Château Val d'Oise", "2013-01-25","Domaine de Champeret", "Rouge", "22%", 40),
(null, "Côtes De la Loire", "2014-03-14","Domaine de Mielleux", "Rouge", "8%", 50),
(null, "Château De Seine", "2004-09-08","Domaine de Nazak", "blanc", "27%", 60),
(null, "Château Val d'Oise", "2003-05-15","Domaine de Biaritz", "blanc", "26%", 50);

Create table commande_produit (
    idcom_P int(3) not null auto_increment,
    idcommande int(3),
    quantite int(10),
    prix float(25),
    primary key(idcom_P, idcommande),
    foreign key (idcommande) REFERENCES commande (idcommande)
) ENGINE=InnoDB;

insert into commande_produit values
(null, 1, 4, 54),
(null, 2, 2, 19);

Create table mode_paye (
    idpaye int(11) not null auto_increment,
    type_paye varchar(50),
    primary key(idpaye)
) ENGINE=InnoDB;

insert into mode_paye values
(null, "CB"),
(null, "Paypal");

Create table cat_produit (
    idcat int(11) not null auto_increment,
    idP int(3),
    type_C varchar(30),
    primary key(idcat, idP),
    foreign key (idP) REFERENCES produit (idP)
) ENGINE=InnoDB;

insert into cat_produit values
(null, 1, "grand crue"),
(null, 2, "grand crue"),
(null, 3, "grand crue"),
(null, 4, "grand crue"),
(null, 5, "grand crue"),
(null, 6, "grand crue"),
(null, 7, "grand crue"),
(null, 8, "champagne"),
(null, 9, "champagne"),
(null, 10, "champagne"),
(null, 11, "champagne"),
(null, 12, "champagne"),
(null, 13, "champagne"),
(null, 14, "champagne"),
(null, 15, "spiritueux"),
(null, 16, "spiritueux"),
(null, 17, "spiritueux"),
(null, 18, "spiritueux"),
(null, 19, "spiritueux"),
(null, 20, "spiritueux"),
(null, 21, "spiritueux"),
(null, 22, "spiritueux"),
(null, 23, "vins"),
(null, 24, "vins"),
(null, 25, "vins"),
(null, 26, "vins"),
(null, 27, "vins"),
(null, 28, "vins");
