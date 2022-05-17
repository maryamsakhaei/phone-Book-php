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
                    <h2 class="title"> Contact List</h2>
                    <br><br>
                    <thead>
                        <tr>
                            <th class="titel">Firstname</th>
                            <th class="titel">Lastname</th>
                            <th class="titel">Group</th>
                        </tr>
                    </thead>
                    <?php
                        $sql = "SELECT name,number,grouptype  FROM contactslist LIMIT 50 ";
                    ?>
                    <?php
                        $result = $conn->query($sql); 
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                    ?>
                    <tbody>
                        <tr>
                            <td class="titel"><?php echo $row['name'];?></td>
                            <td class="titel"><?php echo $row['number'];?></td>
                            <td class="titel"><?php echo $row['grouptype'];?></td>
                    <?php
                            }
                                }
                    ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <a href="index.php"><button type="submit" class="btn btn-primary">Home</button></a>
    </div>
<?php
include_once("footer.php");
?>