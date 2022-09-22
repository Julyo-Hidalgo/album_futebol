create database mydb;

use mydb;

create table pagina(
    id int auto_increment,
    primary key(id),
    link varchar(45)
);

/*Inserts*/
insert into pagina(link) values ("img/carta1.PNG"), ("img/carta2.PNG"), ("img/carta3.PNG"), ("img/carta4.PNG");