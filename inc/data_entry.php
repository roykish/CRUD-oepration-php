<?php

session_start();    //session is started

$mysqli = new mysqli('localhost', 'root', '', 'crud' ) or die (mysqli_error($mysqli));  //database connection 

if(isset($_POST['submit'])){      //checks whether the submit button is clicked or not and the method="POST" or not.

    $fullname = $_POST['fullname'];   //if checked and all right, then catch all the values from the form using $_POST['name']
    $username = $_POST['username'];
    $mysqli->query("INSERT INTO data(fullname, username) VALUES ('$fullname', '$username')") or die($mysqli->error);    // passes the data into the database. mysqli->query is an OOP style and mysqli_query() is a procedural style.
    
    $_SESSION['message'] = "record has been saved!";    //session message has been set.
    $_SESSION['msg_type'] = "success";  //message type has been set. This msg_type will basically pass value for bootstrap class (alert-success/alert-danger) on message.php file.

    header("location: ../index.php");   //Redirect the who page to index.php.

   }

?>