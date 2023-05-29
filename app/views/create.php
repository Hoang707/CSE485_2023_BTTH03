<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new article</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="add-new-user">
            <h3 style="color: blue">Add New Article</h3>
            <form action="" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><b>Title:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Input Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><b>Author:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="author" placeholder="Input Author">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><b>Publish:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="publish" placeholder="Input Publish">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <input type="submit" class="btn btn-primary" name="add" value="Add">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Include Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
