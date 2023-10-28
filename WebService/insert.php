<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $rating = $_POST['rating'];

    if ($name == '' || $rating == '') {
        echo 'FAILURE';
    } else {
        //$sql = "INSERT INTO ratings (name, rating) VALUES ('$name', '$rating')";

        //if (mysqli_query($con, $sql)) {
        //    echo 'Successfully inserted';
        //} else {
        //    echo 'Oops! Please try again!';
        //}
        echo 'SUCCESS';
    }
} else {
    echo 'ERROR';
}

//mysqli_close($con);
?>
