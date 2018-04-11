# JoaquimPhpWebApp

Webapp PHP per a fer una demo a Azure del autoscaling, retorna el nom del host on està corrent, així es pot veure com balanceja les connexiones entre diversos servidors.

Per a poder demostrar la connexió contra la db, fem un count() d'una taula per veure el total de registres. Aquesta taula l'alimentem nosaltres mateixos fent un insert a modo de "log" de logins. Quan fem un test de càrrega a lo bruto, podem veure com aquesta taula creix de forma considerable.

Dades Mysql per a que funcioni la part de la DB (en cas de ser diferents, s'ha de modificar el .php amb les dades bones):

Excutar el script database.sql per a crear es schema un cop connectar al servidor per a deixar-ho preparat.
Vaig a lo bruto i no utilitzo un datasource, sino que ho foto a saco al codi, pero ja m'està bé pe a la demo que es vol fer.

Servidor: joaquimphpwebapp-mysqldbserver.mysql.database.azure.com

DB: joaquimphpwebapp

Taula: connectionlog

Usuari: mysqldbuser@joaquimphpwebapp-mysqldbserver

Password: Webapp123

