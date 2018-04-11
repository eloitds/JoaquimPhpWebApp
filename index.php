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
 
 echo "<p>JoaquimPhpWebApp</p>";
  
 echo "Hola soc el servidor: " .gethostname();
 echo "Em vull connectar al servidor $servername \n"; 
 #echo '<p>Em vull connectar al servidor $servername </p>';
 ?>
 
 </body>
</html>
