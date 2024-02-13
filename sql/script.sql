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
    name varchar (40)
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
    salary double DEFAULT 5000,
    salaryDate date not null
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

INSERT INTO user (email, pswd, status) VALUES ('exemple@email.com', 'motdepasse123', 1);
INSERT INTO teaCategory (name, output) VALUES ('Thé vert', 20.5);
INSERT INTO parcel (size, idTeaCategory, startDate) VALUES (10.2, 1, '2024-02-12');
INSERT INTO picker (name) VALUES ('Jean Dupont');
INSERT INTO picking (idParcel, qty, theDate) VALUES (1, 15.5, '2024-02-12');
INSERT INTO salary (salary, salaryDate) VALUES (5000, '2024-02-01');
INSERT INTO categSpent (name) VALUES ('Transport');
INSERT INTO spent (idcategSpent, spent, theDate) VALUES (1, 50.75, '2024-02-12');


--172.20.0.167
