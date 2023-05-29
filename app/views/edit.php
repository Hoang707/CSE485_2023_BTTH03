<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="edit-user">
            <h3 style="color: blue">Edit Article</h3>
            <form action="" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><b>Title:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="<?php echo $chosenArticle->getTitle();?>" placeholder="Edit Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><b>Author:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="author" value="<?php echo $chosenArticle->getAuthor();?>" placeholder="Edit Author">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><b>Publish:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="publish" value="<?php echo $chosenArticle->getPublish();?>" placeholder="Edit Publish">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Include Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
