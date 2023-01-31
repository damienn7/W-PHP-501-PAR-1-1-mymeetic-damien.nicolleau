-- SCRIPT SQL DE LA DATABASE MYMEETIC

-- Suppression de la database :
drop database mymeetic;

-- Creation de la database :
create database mymeetic;

-- On ouvre la base de donnee pour effectuer nos ajouts de tables et de valeurs :
use mymeetic;

-- Liste des tables a creer :
--  user (id , email , password , firstname , lasname , birthdate , id_member)
--  profil (id , id_city , id_genre , id_role , id_session , id_status , id_cookie , id_hobbies , id_movies , id_sports , id_fumeur , id_user_image)
--  profil_image (id , url_image)
--  rol (id , name) values (basic , pass , admin)
--  city (id , name , id_profil) values (...)
--  sess (id , active) values (bool true || false)
--  statu (id , status_marital) values(celibataire , marie , mariee, divorce , divorcee , veuf , veuve)
--  cookie (id , contenu)
--  hobbie (id , name)
--  movie (id , name)
--  genre (id , name) values (Homme , Femme , Autre)
--  sport (id , name)
--  smoke (id , name) values (Ne fume pas , Fume occasionnellement , Fume régulièrement , Essaye d'arrêter)

-- Creation des tables :

CREATE TABLE user(
    id int AUTO_INCREMENT NOT NULL ,
    lastName varchar(255) NOT NULL,
    firstName varchar(255) NOT NULL,
    birthdate DATETIME NOT NULL,
    email varchar(255) NOT NULL,
    pass varchar(255) NOT NULL,
    id_profil int not null,
    PRIMARY KEY (id)
);

create table profil(
    id int AUTO_INCREMENT not null ,
    id_city int not null,
    id_genre int not null,
    id_role int not null,
    id_session int,
    id_cookie int,
    id_statu int not null,
    id_hobbie int,
    id_movie int,
    id_sport int,
    id_smoke int,
    id_profil_image int not null,
    PRIMARY KEY (id)
);

alter table user add foreign key (id_profil) references profil(id);

create table profil_image (
    id int AUTO_INCREMENT not null ,
    url_image varchar(255),
    primary key (id)
);

create table rol (
    id int AUTO_INCREMENT not null ,
    name varchar(64) not null,
    primary key (id)
);

insert into
    rol(name)
values
    ("Classic"),
    ("Premium"),
    ("Admin");

create table city (
    id int AUTO_INCREMENT not null,
    name varchar(64) not null,
    primary key (id)
);

create table sess (
    id int AUTO_INCREMENT not null,
    active boolean not null,
    primary key (id)
);

create table statu (
    id int AUTO_INCREMENT not null,
    status_marital varchar(255) not null,
    genre varchar(255) not null,
    primary key (id)
);

insert into
    statu(status_marital,genre)
values
    ("Célibataire","non-binaire"),
    ("Séparé","masculin"),
    ("Séparée","féminin"),
    ("Divorcé","masculin"),
    ("Divorcée","féminin"),
    ("Veuf","masculin"),
    ("Veuve","féminin");

create table cookie (
    id int AUTO_INCREMENT not null,
    contenu varchar(255) not null,
    primary key (id)
);

create table hobbie (
    id int AUTO_INCREMENT not null,
    name varchar(255) not null,
    primary key (id)
);

insert into
    hobbie(name)
values
    ("Musique"),
    ("Voyage"),
    ("Sport"),
    ("Balades"),
    ("Cuisine"),
    ("Nature"),
    ("Shopping"),
    ("Bricolage"),
    ("Lecture"),
    ("Danse"),
    ("Jardinage"),
    ("Expositions/musées"),
    ("Écriture"),
    ("Animaux"),
    ("Télévision"),
    ("Automobiles"),
    ("Informatique/internet"),
    ("Photo"),
    ("Jeux vidéos"),
    ("Chant/instrument musical"),
    ("Décoration"),
    ("L'art"),
    ("Cinéma"),
    ("Jeux de cartes"),
    ("Oenologie"),
    ("Peinture/dessin"),
    ("Jeux de sociétés"),
    ("Théâtre"),
    ("Restaurant"),
    ("Les sorties"),
    ("Voir des amis"),
    ("Activité caritative"),
    ("Pêche/chasse"),
    ("Loisirs créatifs"),
    ("Autres");

create table movie (
    id int AUTO_INCREMENT not null,
    name varchar(255) not null,
    primary key (id)
);

insert into
    movie(name)
values
    ("Comiques"),
    ("Action"),
    ("Aventure"),
    ("Policiers"),
    ("Fantastiques"),
    ("Comédies romantiques"),
    ("Science-fiction"),
    ("Documentaires"),
    ("Horreur"),
    ("Dramatiques"),
    ("Historiques"),
    ("Dessins animés"),
    ("Animation"),
    ("D'auteur"),
    ("Westerns"),
    ("Comédies musicales"),
    ("Érotiques"),
    ("Mangas"),
    ("Courts métrages"),
    ("Autres");

create table genre (
    id int not null AUTO_INCREMENT,
    name varchar(255) not null,
    primary key (id)
);

insert into
    genre(name)
values
    ("Homme"),
    ("Femme"),
    ("Autre");

create table sport (
    id int not null AUTO_INCREMENT,
    name varchar(255) not null,
    primary key (id)
);

insert into
    sport(name)
values
    ("Natation"),
    ("Fitness"),
    ("Randonnées / trekking"),
    ("Football"),
    ("Danse"),
    ("Ski / snowboard"),
    ("Jogging"),
    ("Moto"),
    ("Cyclisme / VTT"),
    ("Tennis"),
    ("Équitation"),
    ("Gym"),
    ("Boxe"),
    ("Automobile"),
    ("Basket-ball"),
    ("Badminton"),
    ("Athlétisme"),
    ("Rugby"),
    ("Yoga / méditation"),
    ("Escalade"),
    ("Sports de combat"),
    ("Tennis de table"),
    ("Golf"),
    ("Volley-ball"),
    ("Voile"),
    ("Handball"),
    ("Sports extrêmes"),
    ("Sports de glisse aquatiques"),
    ("Billard/billard americain / fléchettes"),
    ("Squash"),
    ("Skate / roller"),
    ("Football américain"),
    ("Base-ball"),
    ("Culturisme"),
    ("Bowling"),
    ("Salle de musculation"),
    ("Pilates"),
    ("Autres");

create table smoke (
    id int not null AUTO_INCREMENT,
    name varchar(255) not null,
    primary key (id)
);

insert into
    smoke(name)
values
    ("Ne fume pas"),
    ("Fume occasionnellement"),
    ("Fume régulièrement"),
    ("Essaye d'arrêter");


alter table profil add foreign key (id_city) REFERENCES city(id),
    add FOREIGN KEY (id_genre) REFERENCES genre(id),
    add FOREIGN KEY (id_role) REFERENCES rol(id),
    add FOREIGN KEY (id_session) REFERENCES sess(id),
    add FOREIGN KEY (id_cookie) REFERENCES cookie(id),
    add FOREIGN KEY (id_statu) REFERENCES statu(id),
    add FOREIGN KEY (id_hobbie) REFERENCES hobbie(id),
    add FOREIGN KEY (id_movie) REFERENCES movie(id),
    add FOREIGN KEY (id_sport) REFERENCES sport(id),
    add FOREIGN KEY (id_smoke) REFERENCES smoke(id),
    add FOREIGN KEY (id_profil_image) REFERENCES profil_image(id);