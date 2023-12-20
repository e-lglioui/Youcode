create database youcode;

/*table user*/
CREATE table users(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
nom varchar(250),
prenom varchar(250),
email varchar(250),
mot_pass varchar(250),
id_rol int ,
FOREIGN KEY (id_rol) REFERENCES rol(id);
id_class int ,
FOREIGN KEY (id_class) REFERENCES class(id)

)ENGINE=InnoDB;

/*table rol*/
CREATE table rol(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
position varchar(250),
id_permissions int ,
FOREIGN KEY (id_permissions) REFERENCES permissions(id)
)ENGINE=InnoDB;

/*table class*/
CREATE table class(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
nom varchar(250)
)ENGINE=InnoDB;

/*table permission*/
CREATE table permissions(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
permission varchar(250)
)ENGINE=InnoDB;