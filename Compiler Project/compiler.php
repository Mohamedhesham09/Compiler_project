<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>compiler </h2>
                    </div>
                    <form action="compilerCode.php" method="post">
                        <div class="form-group">
                            <label>Code</label>
                            <textarea name="area" id="input" class="form-control" rows="3" required="required"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>


                <div class="col-md-12">
                    <div class="page-header">
                        <h2>compiler file </h2>
                    </div>
                    <form action="compilerCode.php" method="post">
                        <div class="form-group">
                            <label>file path</label>
                            <input name="path" type="text"  class="form-control" required="required">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submitFile" value="submitFile">
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>
</html>
