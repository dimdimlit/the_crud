<?php
//Checking if button is clicked
if (isset($_POST["btn_reg"])){
    //Start receiving data from the form
    $name = $_POST["u_name"];
    $email = $_POST["u_email"];
    $pass = $_POST["u_pass"];
    //Now proceed to connect to the database to save your data
    require_once "db_connection.php";
    //design pattern to make the system optimised
    //that's why we user require_once
    //Create the insert query to save the data
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) 
                VALUES (null,'$name','$email','$pass')";
    //Finally, save the data using mysqli_query()
    $save = mysqli_query($connection,$insertQuery);
    //Check if the saving was successful
    if(isset($save)){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }

}