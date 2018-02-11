#BD::SaveLink
#@jorgedipra
#	
#usuario
@TABLE->User
	id=>int() AUTOINCREMENT PRIMARYKEY
	user=>varchar(20) NOT NULL
	pass=>varchar(50) NOT NULL
@ENDTABLE->User

#categoria de paginas[series,peliculas,anime]
@TABLE->categorias
	id=>int() AUTOINCREMENT PRIMARYKEY
	name=>varchar(20) NOT NULL
	id_User=>int() FORINKEY [User->id]
@ENDTABLE->categorias

#pagina a guardar 
@TABLE->pagec
	id=>int() AUTOINCREMENT PRIMARYKEY
	name=>varchar(20) NOT NULL
	URL=>varchar(20) NOT NULL
	img=>varchar(20) NOT NULL
	nota=>varchar(20) NOT NULL
	id_categoria=>id() FORINKEY [categorias->id]
@ENDTABLE->pagec



