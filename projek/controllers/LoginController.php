<?php
session_start();
require_once ('./connection.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
    $result = $conn->query($query);


    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
                
        $_SESSION['Login'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        

        header('Location: ../library.php');

    }
}

else {
    echo "Username or Password is invalid";
}


