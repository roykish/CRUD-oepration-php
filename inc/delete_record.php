<?php

$mysqli = new mysqli('localhost', 'root', '', 'crud' ) or die (mysqli_error($mysqli));  //connect to database

if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id = $id") or die($mysqli->error);   //SQL query for deleting a data form the database with the help of the id.
}

?>