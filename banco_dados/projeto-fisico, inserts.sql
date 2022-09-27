create database mydb;

use mydb;

create table pagina(
    id int auto_increment,
    primary key(id),
    link varchar(45)
);

/*Inserts*/
insert into pagina(link) values ("view/modules/pagina/img/capa.jpg"), ("view/modules/pagina/img/carta1.PNG"), ("view/modules/pagina/img/carta2.PNG"), ("view/modules/pagina/img/carta3.PNG"), ("view/modules/pagina/img/carta4.PNG");

/*tests*/
select * from pagina;

/*caso dê problemas*/
drop database mydb;