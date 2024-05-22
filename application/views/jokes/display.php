<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- My CSS -->
        <link rel="stylesheet" type="text/css" href=<?= base_url('assets/css/styles.css.php')?>>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>IT Jokes</title>
    </head>
    <body>  
        <h1 class="title"><?= $title ?></h1>
        <div class="delete-joke">
            <a href="http://vhedmyr/jokes/index.php/jokes/delete/<?= $id ?>">Delete joke</a>
        </div>
        <div class="container box">
            <p class="contents"><?= $content ?>😂🤣😅🤣😅</p>
        </div>
        <div class="add-joke">
            <a href="http://vhedmyr/jokes/index.php/new">Add new joke</a>
        </div>
    </body>
</html>