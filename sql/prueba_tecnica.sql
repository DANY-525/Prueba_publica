CREATE DATABASE prueba_tecnica;

USE prueba_tecnica;

CREATE TABLE usuarios(
id_usuario VARCHAR(50) NOT NULL,

	usuario VARCHAR(50) NOT NULL,

	password VARCHAR(50) NOT NULL,


	rol VARCHAR(10) NOT NULL,
 
	

PRIMARY KEY(id_usuario),
FULLTEXT KEY  buscador(id_usuario,usuario,rol)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE lectivas(
idlectivas VARCHAR(50) NOT NULL,
nombre VARCHAR(50) NOT NULL,
profesor VARCHAR(50) NOT NULL,
descripcion VARCHAR(50) NOT NULL,
num_c_disponibles VARCHAR(50) NOT NULL,

PRIMARY KEY(idlectivas),
FULLTEXT KEY buscador1 (idlectivas,nombre,profesor,descripcion,num_c_disponibles)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;


