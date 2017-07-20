CREATE DATABASE sample;

USE sample;

CREATE TABLE exampletable
(
	Id INT(9) NOT NULL AUTO_INCREMENT,
	Name CHAR(50) NOT NULL,
	Address CHAR(255),
	Phone CHAR(20),
	PRIMARY KEY (id)
);

INSERT INTO exampletable VALUES(1,'Mario Rossi','Via le mani dal naso, 23','3-222-11442389') ;
INSERT INTO exampletable VALUES(2,'Valerio Bianchi','Piazza LaTenda, 11','33-455553434') ;
INSERT INTO exampletable VALUES(3,'Alessandro Rosa','Via Vai','333-2221221') ;
INSERT INTO exampletable VALUES(4,'Gino Lino','Via col vento','344-21232123') ;
INSERT INTO exampletable VALUES(5,'Guido LaVespa','Largo che ci passo','380-22300987') ;
INSERT INTO exampletable VALUES(6,'Armando Lanave','Corte Dichiarata','443-2323231') ;
INSERT INTO exampletable VALUES(7,'Gustavo Latorta','Strada Diritta','6-652-344232') ;
INSERT INTO exampletable VALUES(8,'Laura Diddio','Via del Cielo','1-111-3338764') ;
INSERT INTO exampletable VALUES(9,'Bruno Biondi','Vico Fico','3-233-2116783') ;
INSERT INTO exampletable VALUES(10,'Salvo Lapelle','Via da qua','5-555-2874102') ;

