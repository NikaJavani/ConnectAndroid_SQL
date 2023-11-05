<?php
 
$host = "localhost";
$dbUser = "id21377890_root";
$password = "Ab1234567*";
$database = "id21377890_rating";
 
$dbConn = new mysqli($host,$dbUser,$password,$database);
if($dbConn->connect_error)
{
	echo("Database Connection Error, Error No.: ".$dbConn->connect_errno." | ".$dbConn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    $query = "SELECT * FROM ratings WHERE 1";
    $result = $dbConn->query($query);
    $result = $result->fetch_all(MYSQLI_ASSOC);
    foreach($result as $index => $row) {
            echo "id: ".$row["id"].", name: ".$row["name"].", rating: ".$row["rating"];
            echo "<br>";
    }
} else {
    echo 'ERROR';
}

$dbConn->close();
?>
