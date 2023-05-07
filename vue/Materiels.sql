Drop database if exists Iris;
create database Iris;
	use Iris;
	create table professeurs(idprof int (3) not null auto_increment,
		Nom varchar(20),
        Prenom varchar(20),
        Adresse varchar(25),
        Diplome varchar(15),
        primary key(idprof));
	insert into professeurs values('','VOUANDZA','Cedric','31 Rue du Docteur Guerin','Doctorat');

		create table materiels(idm int (3) not null auto_increment, 
		designation varchar(100),
        DateAchat date,
        Etat varchar(25),
       primary key(idm));

	insert into materiels values('', 'Ordinateur portable', '2021-07-10', 'Bonne Etat');

		create table categories_materiels(idcm int (3) not null auto_increment, 
		libelle varchar(100),
       
        fournisseur varchar(25),
       
        primary key(idcm));

        insert into categories_materiels values('','ccc', 'XD');
	
	create table location( 
		idm int (3) not null auto_increment,
		idprof int(5),
		DaTEL date,
       heureL time,
        Duree varchar(9),
        primary key(idm,idprof),
        foreign key(idm) references materiels(idm) ,
        foreign key(idprof) references professeurs(idprof) );

	insert into location values('','01','2020-10-10','14:20','1 mois');
	