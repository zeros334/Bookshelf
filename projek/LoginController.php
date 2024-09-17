<?php
require_once ('./connection.php')

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username']
    $email = $_POST['email']
    $password = $_POST['password']

    $query = "SELECT * FROM users WHERE (username = '$username' OR email = '$username') AND password = '$password';";
    $result = $connection->query($query);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
                
    $_SESSION['is_login'] = true;
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    
    header('Location: ../.php');

}
}

else {
    var_dump("Username/Email and Password is invalid")
}


