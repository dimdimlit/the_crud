<?php
//Checking if the update button has been clicked
if(isset($_POST["btn_update"])){
    //Recieve the updated data from the form
    $userId = $_POST["u-id"];
    $updatedName = $_POST["u_name"];
    $updatedEmail = $_POST["u_mail"];
    $updatedPassword = $_POST["u_pass"];
    //Connect to the database to return the data
    require_once "db_connection.php";
    //Create the update query
    $updatedQuery = "UPDATE `users` SET `jina`=' $updatedName ',`arafa`='$updatedEmail',
                   `siri`='$updatedPassword' WHERE id='$userId'";
    //Finally execute the update query by use of mysqli_query () method
    $update = mysqli_query($connection, $updatedQuery);
    //Check whether the update was successful
    if (isset($update)){
        //Redirect the user to users.php to see changes
        header("location:users.php");
    }else{
        echo "Updating failed";
    }

}






























