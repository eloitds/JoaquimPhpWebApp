<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
 $servername = "joaquimphpwebapp-mysqldbserver.mysql.database.azure.com";
 $username = "mysqldbuser@joaquimphpwebapp-mysqldbserver";
 $password = "Webapp123";
 $dbname = "connectionlog"; 
  
 echo 'Hola soc el servidor: ';
 echo gethostname();
  
 echo '<p>Em vull connectar al servidor $servername </p>';
 ?>
 
 </body>
</html>
