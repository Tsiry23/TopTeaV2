drop database TopTea;
create database TopTea;
use toptea;
create table user (
    id int primary key  auto_increment,
    email varchar (30) not null ,
    pswd VARCHAR (255) not null ,
    status int check (status=0 or status=1) --0 admin et 1 simple-user
);

create table teaCategory ( 
    id int primary key  auto_increment,
    name varchar(30) not null,
    output double default 10, --rendement
    space double, --modif (espace occupée par pied)
    prixVente double,
    CHECK (output>=0)rendement
);

create table parcel (
    id int primary key  auto_increment,
    size double , --m²
    idTeaCategory int REFERENCES teaCat,
    startDate date not null
);

create table picker ( --cueilleur
    id int primary key  auto_increment,
    name varchar (40),
    gender varchar(1), --m=homme et f=femme
    dob date
);

create table picking ( --cueillette
    id int primary key  auto_increment,
    idParcel int REFERENCES parcel(id),
    qty double DEFAULT 0 ,
    idPicker int,
    theDate date not null ,
    CHECK (output>=0)
);

create table salary (
    salary double DEFAULT 5000, --par kg
    quotaMin double, 
    double bonus, --en pourcentage
    double mallus --en pourcentage
);

create table categSpent ( --catégorie dépense
    id int primary key  auto_increment,
    name VARCHAR (30)
);

create table spent ( --dépenses
    id int primary key  auto_increment,
    idcategSpent int,
    spent double,
    theDate date,
    CHECK (spent>=0),
    Foreign key idcategSpent REFERENCES categSpent(id)
);

create table vente ( --vente
    id int primary key auto_increment,
    idTeaCategory int references teaCategory(id),
    qtt double,
    prixVente double,
    dtn date
);

-- Exemple 1 : Thé vert avec un rendement de 85%
INSERT INTO teaCategory (name, output) VALUES ('Thé vert', default);

-- Exemple 2 : Thé noir avec un rendement de 75%
INSERT INTO teaCategory (name, output) VALUES ('Thé noir', default);

-- Exemple 3 : Tisane avec un rendement de 90%
INSERT INTO teaCategory (name, output) VALUES ('Tisane', default);
