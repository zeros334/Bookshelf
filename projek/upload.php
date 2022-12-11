<?php
    session_start();
    if(isset($_POST["Login"]) != false){
        header("Location: ./login.html");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav>
        <div class="navbar">
            <ul class="navbar-ul">
                <li class="navbar-items"><a href="index.html" class="home">Home</a></li>
                <li class="navbar-items"><a href="login.html" class="login">Login</a></li>
            </ul>
        </div>
    </nav>
    <section>
    <form action="" method="post" enctype="multipart/form-data">
      <p>Upload <input type='file' name='foto' /></p>
      <input type='submit' name='tombol' value='Kirim' />
</form>
    </section>

</body>






</html>