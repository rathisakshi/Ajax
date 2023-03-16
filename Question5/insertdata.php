<?php include 'db.php';

// Connect to database

if (isset($_POST['submit'])) {

$MTitle = $_POST["MovieTitle"];
$MRating = $_POST["MRating"];

    $sql = "INSERT INTO items(movie_title,movie_rating ) VALUES ('$MTitle', '$MRating')";

    if ( $conn->query($sql) === true) {
        header("Location: display.php ");
        exit;
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
?>
