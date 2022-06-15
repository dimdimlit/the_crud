<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js "></script>
    <script src="assets/bootstrap/js/popper.min.js "></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js "></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<a class="btn btn-outline-success btn-block" href="register.php">Add Users</a>
    <h1 class="text-center text-info">All Users</h1>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        // Connect to the database to fetch all the users
        require_once "db_connection.php";
        //Prepare the select query to fetch the users
        $selectQuery = "SELECT * FROM `users` WHERE 1";
        //Finally grab the users using mysqli_query()
        $users = mysqli_query($connection,$selectQuery);
        //Use a loop to display all the users
        foreach ($users as $user){
            $name = $user["jina"];
            $email = $user["arafa"];
            $password = $user["siri"];
            $id = $user["id"];
            echo "<tr>
                   <td>$name</td> 
                   <td>$email</td> 
                   <td><a class='btn btn-danger' href='delete.php?u_id=$id'>Delete</a></td> 
                   <td><a class='btn btn-info' href='update.php?u_id=$id&u_name=$name&u_mail=$email&u_pass=$password'>Update</a></td> 
                    </tr>";
        }
        ?>

    </table>
</body>
</html>
