<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Home</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>List of articles</h1>
        <div class="danhsach">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article){?>
                    <tr>
                        <td><?=$article->getId()?></td>
                        <td><?=$article->getTitle()?></td>
                        <td><?=$article->getAuthor()?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$article->getId()?>" class="btn btn-primary">Edit</a>
                            <a href="index.php?action=delete&id=<?=$article->getId()?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <!-- Add the Create button outside the table -->
        <a href="index.php?action=create" class="btn btn-success">Create</a>
    </div>
    
    <!-- Include Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
