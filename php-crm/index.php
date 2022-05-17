<?php
include_once("header.php");
?>
<body>
<div class="container">
    <h2 class="text-center">Contac Form</h2>
	<div class="row left-content-center">
		<div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="save.php" method="post" enctype="multipart/form-data">
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                            <h3> Contact</h3>
                            <p class="m-0"></p>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-phone text-info" style="font-size:24px"></i></div>
                                </div>
                                    <input type="number" class="form-control" id="nombre" name="number" placeholder="Telephon" required>
                            </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <label for="grouptype">Group Type:</label><br>
                                            <select name="grouptype" id="grouptype">
                                            <option value="0">...</option>
                                            <option value="1">Family</option>
                                            <option value="2">Freind</option>
                                            <option value="3">colleague</option>
                                            <option value="4">partner</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Save" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>  
        <div class="col-md-4"></div>
    </div>
</div>
<?php
include_once('footer.php');
?>



