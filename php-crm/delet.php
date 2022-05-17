<?php
include_once("db.php");
SESSION_start();
$user=$_SESSION['name'];
$id="36";
if (isset($user)){
    $delete= "DELETE FROM contactslist  WHERE id='$id'";

        if ($conn->query($delete) === TRUE) {
            header('Location: http://localhost/php-crm/allcontacts.php') ;
        }
            else {
            echo "Error deleting record: " . $conn->error;
            }
}
?>

    