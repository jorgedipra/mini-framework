#BD::SaveLink
#@jorgedipra
#	
#usuario
@TABLE->User
	id=>int() AUTOINCREMENT PRIMARYKEY,
	user=>varchar(20) NOT NULL,
	pass=>varchar(50) NOT NULL,
@ENDTABLE->User

@TABLE->redes_sociales
	Id=>int(11) NOT NULL,
  	Nombre=>varchar(20) NOT NULL COMMENT 'nombre de la red social',
 	Logo=>varchar(10) NOT NULL COMMENT 'class de icono( fontawesome 5)',
  	Url=>varchar(50) NOT NULL COMMENT 'Url de la red social',
  	Id_Pefil=>int(11) NOT NULL COMMENT 'perfil'
@ENDTABLE->redes_sociales

#categoria de paginas[series,peliculas,anime]
@TABLE->categorias
	id=>int() AUTOINCREMENT PRIMARYKEY,
	name=>varchar(20) NOT NULL,
	id_User=>int() FORINKEY [User->id]
@ENDTABLE->categorias

#pagina a guardar 
@TABLE->pagec
	id=>int() AUTOINCREMENT PRIMARYKEY,
	name=>varchar(20) NOT NULL,
	URL=>varchar(20) NOT NULL,
	img=>varchar(20) NOT NULL,
	nota=>varchar(20) NOT NULL,
	id_categoria=>id() FORINKEY [categorias->id]
@ENDTABLE->pagec



