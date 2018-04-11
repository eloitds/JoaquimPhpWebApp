<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
 $servername = "joaquimphpwebapp-mysqldbserver.mysql.database.azure.com";
 $username = "mysqldbuser@joaquimphpwebapp-mysqldbserver";
 $password = "Webapp1234";
 $dbname = "joaquimphpwebapp";
 $tablename= "connectionlog";
 $hostname= gethostname();
 //$clientip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDED_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);

 
 echo "<p>JoaquimPhpWebApp</p>";
  
 echo "Hola soc el servidor: $hostname<br>";
 echo "Em vull connectar al servidor $servername<br>";
  
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
  
$sql = "INSERT INTO $tablename (server, ip)
VALUES ('$hostname', '".$_SERVER['REMOTE_ADDR']."')";

if ($conn->query($sql) === TRUE) {
    echo "Registrat correctament al connection log<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
 $sql = "SELECT count(*) FROM $tablename"; 
 $result = $conn->query($sql);
  
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> connexions registrades: "
         . $row["count(*)"]
         . "<br>";
    }
} else {
    echo "0 results";
}
  
  
 $conn->close();
 
  ?>
 
 </body>
</html>
