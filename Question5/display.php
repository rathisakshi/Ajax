<?php
include 'connect1.php';
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>

<title>Display</title>
</head>
<body>
<div >
<center><button class ="insert-btn"><a href = 'insert.html'>Insert records</a></button></center>
<table>
<thead>
<tr>
<th scope = 'col'>Id</th>
<th scope = 'col'>Movie Title</th>
<th scope = 'col'>Movie Rating</th>
</tr>
</thead>
<tbody>

<?php
$sql = 'Select * from `items`';
$result = mysqli_query( $conn, $sql );
if ( $result ) {
    while( $row = mysqli_fetch_assoc( $result ) ) {
        $id = $row[ 'id' ];
        $movie_title = $row[ 'movie_title' ];
        $movie_rating= $row[ 'movie_rating' ];
        echo '
        <tr>
        <th scope="row">' .$id.'</th>
        <td>'.$movie_title.'</td>
        <td>'.$movie_rating.'</td>
        <td>
    <button class ="delete"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
  </tbody>
</td>
        </tr>';
    }
}
?>

</table>
</div>
</body>
<style>
table {
    margin: 5% 0% 0% 30%;
    font-size: large;
    border: 1px solid black;
}

h1 {
    text-align: center;
    color: #006600;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT',
    ' Calibri', 'Trebuchet MS', 'sans-serif';
}

td {
    background-color: #E4F5D4;
    border: 1px solid black;
}

th,
td {
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

td {
    font-weight: lighter;
}


h2 {
    text-align: center;
    font-family: sans-serif;
    margin: 3% 0% 4% 0%;

}
.insert-btn{
  margin-top:5%;
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
}
.update{
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
 
  display: inline-block;
  font-size: 16px;
}
.delete{
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
}
a{
  text-decoration: none;
  color:black;
}
</style>
</html>
