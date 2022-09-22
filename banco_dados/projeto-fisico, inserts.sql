create database mydb;

use mydb;

create table pagina(
    id int auto_increment,
    primary key(id),
    link varchar(45)
);

/*Inserts*/
insert into pagina(link) values ("app/view/modules/pagina/img/capa.jpg"), ("app/view/modules/pagina/img/carta1.PNG"), ("view/modules/pagina/img/carta2.PNG"), ("app/view/modules/pagina/img/carta3.PNG"), ("app/view/modules/pagina/img/carta4.PNG");