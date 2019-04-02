CREATE DATABASE LOGIN_PHP;
USE LOGIN_PHP

MariaDB [LOGIN_PHP]> CREATE TABLE users(
    -> id int unsigned not null auto_increment,
    -> name varchar(50),
    -> email varchar(80) not null,
    -> password varchar(40) not null,
    -> primary key(id)
    -> );
	
	
insert into users(name, email, password) 
values('usuário1', 'user1@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498'),
      ('Usuário 2', 'user2@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498'),
      ('Usuário 3', 'user3@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498');