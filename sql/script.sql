drop database TopTea;
create database TopTea;
use toptea;
create table user (
    id int primary key  auto_increment,
    email varchar (30) not null ,
    pswd VARCHAR (255) not null ,
    status int check (status=0 or status=1)
);

create table teaCategory ( 
    id int primary key  auto_increment,
    name varchar(30) not null,
    output double default 10,
    space double,
    prixVente double,
    CHECK (output>=0)
);

create table parcel (
    id int primary key auto_increment,
    size double ,
    idTeaCategory int REFERENCES teaCat,
    startDate date not null
);

create table picker (
    id int primary key  auto_increment,
    name varchar (40),
    gender varchar(1),
    dob date
);


create table picking (
    id int primary key  auto_increment,
    idParcel int REFERENCES parcel(id),
    qty double DEFAULT 0 ,
    idPicker int,
    theDate date not null ,
    CHECK (qty>=0)
);

create table salary (
    salary double DEFAULT 15000,
    quotaMin double,
    bonus double,
    mallus double 
);

create table categSpent (
    id int primary key  auto_increment,
    name VARCHAR (30)
);

create table spent (
    id int primary key  auto_increment,
    idcategSpent int,
    spent double,
    theDate date,
    CHECK (spent>=0),
    Foreign key (idcategSpent) REFERENCES categSpent(id)
);

create table vente (
    id int primary key auto_increment,
    idTeaCategory int references teaCategory(id),
    qtt double,
    prixVente double,
    theDate date
);

create table mois (
    idmois int primary key auto_increment,
    mois VARCHAR (30)
);

create table saison (
    idmois int
);

insert into salary values (default,15,0.25,0.15);

insert into salary values (default,15,0.25,0.15);

INSERT INTO user (email, pswd, status) VALUES ('exemple@email.com', sha1('motdepasse123'), 1);
INSERT INTO user (email, pswd, status) VALUES ('exemple2@email.com', sha1('motdepasse123'), 0);

INSERT INTO parcel (size, idTeaCategory, startDate) VALUES (10.2, 1, '2024-02-12');
INSERT INTO parcel (size, idTeaCategory, startDate) VALUES (60.2, 1, '2024-02-12');
INSERT INTO picker (name) VALUES ('Jean Dupont');
INSERT INTO picker (name) VALUES ('Janot babu');
INSERT INTO picker (name) VALUES ('Gerak garou');
INSERT INTO picking (idParcel, qty, theDate) VALUES (1  , 15.5, '2024-02-12');
INSERT INTO salary (salary, salaryDate) VALUES (5000, '2024-02-01');
INSERT INTO categSpent (name) VALUES ('Transport');
INSERT INTO spent (idcategSpent, spent, theDate) VALUES (1, 50.75, '2024-02-12');

insert into teaCategory values (default,'The indien',default,1.8);
insert into teaCategory values (default,'Tisane',default,1.8);
insert into teaCategory values (default,'The blanc',default,1.8);

insert into parcel values (default,120,1,'2023-10-12');
insert into parcel values (default,20,2,'2024-01-10');
insert into parcel values (default,200,3,'2024-02-01');
insert into parcel values (default,80,4,'2023-12-30');


insert into picking (id,idParcel,qty,idPicker,theDate) values (default,1,120,2,'2023-11-23');
insert into picking (id,idParcel,qty,idPicker,theDate) values (default,2,140,3,'2024-05-11');
--172.20.0.167
