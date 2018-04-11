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
 echo "<br>";
 echo "<p>Em vull connectar al servidor $servername</p>";
  
 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
  ?>
 
 </body>
</html>
