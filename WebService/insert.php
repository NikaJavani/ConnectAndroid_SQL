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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $rating = $_POST['rating'];

    if ($name == '' || $rating == '') {
        echo 'FAILURE';
    } else {
        $name = $dbConn->real_escape_string($name); //input sanitization
        $rating	= $dbConn->real_escape_string($rating);

        $query = "INSERT INTO ratings (name, rating) VALUES ('$name', '$rating')";
        $result = $dbConn->query($query);

        if ($result){
            echo "SUCCESS";
        }else{
            echo "FAILURE";
        }
    }
} else {
    echo 'ERROR';
}

$dbConn->close();
?>
