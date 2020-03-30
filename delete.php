<?php
  // Database inloggegevens
  $hostname = '127.0.0.1';
  $username = 'c4996WallDBUser';
  $password = 'RubenDuneya';
  $database = 'c4996TheWallDB';

$connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);


try {
    $connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM post";
    $statement = $connection->query($query);
} catch(PDOException $e) {
    echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
    echo 'Fout bij SQL query:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
   
}
$connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
$query = "DELETE FROM post WHERE id = $id";
$statement = $connection->query($query);
header('location: ingelogd.php');

?>
