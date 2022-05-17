<?php
include_once("db.php");
include_once("header.php"); 
session_start();
?>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-12">
            <table class="table table-bordered">
            <h2 class="title"> Your new contact</h2>
                <thead>
                <tr>
                    <th scope="col" class="titel"> Name</th>
                    <th scope="col" class="titel">Telephon</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="titel"><?php echo  $_SESSION['name']; ?> <br></td>
                        <td class="titel"><?php echo  $_SESSION['number']; ?></td>

                        <td>
                            <form action="edit.php" method="post">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </form>
                            <br>
                            <form action="delet.php" method="post">
                                <button type="submit" class="btn btn-danger">Delet</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
                <form action="allcontacts.php" method="post">
                    <button type="submit" class="btn btn-primary">All contacts</button>
                </form>
                <br><br>
                <a href="index.php"><button type="submit" class="btn btn-primary">Home</button></a>
            </div>
        </div>
    </div>
<?php
include_once("footer.php");
?>
