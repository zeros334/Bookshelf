<?php
    session_start();
if ($_SERVER['REQUEST_METHOD']=== "POST"){
    if (isset($_POST['Insert_book'])){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content_link'];

        // $has_error = false;

        if (empty($booktitle)){
            echo 'Title should not be empty!';
            // $has_error = true;
        }
        if (empty($author)){
            echo 'Author should not be empty!';
            // $has_error = true;
        }
        if (empty($contentlink)){
            echo 'Content should not be empty!';
            // $has_error = true;
        }
        // if ($has_error = true){
        //     header('location: ../send.php');
        //     die;
        // }
        $userid = $_SESSION['userid'];
        $query = "INSERT INTO library VALUES(NULL, $userid,'$booktitle','$author',$content, NOW());";

        $result = $connection->query($query);
        header('location: ../no.php');
    }
}
?>