# JoaquimPhpWebApp

Webapp PHP per a fer una demo a Azure del autoscaling, retorna el nom del host on està corrent, així es pot veure com balanceja les connexiones entre diversos servidors.

Per a poder demostrar la connexió contra la db, fem un count() d'una taula per veure el total de registres. Aquesta taula l'alimentem nosaltres mateixos fent un insert a modo de "log" de logins. Quan fem un test de càrrega a lo bruto, podem veure com aquesta taula creix de forma considerable.

Dades Mysql per a que funcioni la part de la DB (en cas de ser diferents, s'ha de modificar el .php amb les dades bones):

Servidor: joaquimphpwebapp-mysqldbserver.mysql.database.azure.com
DB: JoaquimPHPWebApp
Usuari: mysqldbuser@joaquimphpwebapp-mysqldbserver
Password: Webapp123
