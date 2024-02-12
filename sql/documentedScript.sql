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
    output double, --rendement
    CHECK (output>=0)
);

create table parcel (
    id int primary key  auto_increment,
    size double , --m²
    idTeaCategory int REFERENCES teaCat,
    startDate date not null
);

create table picker ( --cueilleur
    id int primary key  auto_increment,
    name varchar (40)
);


create table picking ( --cueillette
    id int primary key  auto_increment,
    idParcel int REFERENCES parcel(id),
    qty double DEFAULT 0 ,
    theDate date not null ,
    CHECK (output>=0)
);

create table salary (
    salary double DEFAULT 5000, -- salaire pour 1 kg
    salaryDate date not null
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