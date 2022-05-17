<?php
include_once("db.php");
SESSION_start();
    $name=$_POST["name"];
    $number=$_POST["number"];
    $grouptype=$_POST["grouptype"];
    
    $sql="INSERT INTO contactslist (name, number, grouptype) value ('$name','$number','$grouptype') ";
    if($conn->query($sql) === TRUE){
        $_SESSION['name']=$name;
        $_SESSION['number']=$number;
        $SESSION['grouptype']=$grouptype;
        header("Location:http://localhost/php-crm/show.php");

    }
     else{
          echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
