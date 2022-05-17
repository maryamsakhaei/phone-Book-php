<?php
include_once("db.php");
SESSION_start();
$name=$_POST['name'];
$number=$_POST['number'];
$id="35";

$sql = "UPDATE contactslist SET name='$name', number='$number' WHERE id='$id'";

  var_dump($sql);
if ($conn->query($sql) === TRUE) {
   header("Location:http://localhost/php-crm/allcontacts.php");
} else{
         echo "Error updating record: " . $conn->error;
      }
            
?>

