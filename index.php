<html>
 <head>
  <title>PHP App del joaquim amb azure files</title>
 </head>
 <body>
 <?php 
 $servername = "ntv-az-testmysql01.mysql.database.azure.com";
 $username = "administrador@ntv-az-testmysql01";
 $password = ">Ir0Xb5Rk8Q\"";
 $dbname = "ncloadtest";
 $tablename= "connectionlog";
 $hostname= gethostname();
 //$clientip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDED_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);

 
 echo "<p>JoaquimPhpWebApp</p>";
  
 echo "Hola soc el servidor: $hostname<br>";
 echo "Em vull connectar al servidor $servername<br>";
  
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
  
  
  //$conn = mysqli_init();
  echo "0";
  mysqli_ssl_set($conn,NULL,NULL, "/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL) ; 
  echo "1";
  //mysqli_real_connect($conn, '$servername', '$username', '$password', '$dbname', 3306, MYSQLI_CLIENT_SSL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
  echo "2";
  //if (mysqli_connect_errno($conn)) {
  //die('Failed to connect to MySQL: '.mysqli_connect_error());
  //echo "3";
 // }
  //echo "4";
  
  
  
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
