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
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Are you sure you want to delete this joke?</h1>
            <div class="col-lg-6 mx-auto">
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <form action="" method="POST">
                        <input class="btn btn-danger" name="yes" type="hidden" value="yes">
                        <button class="btn btn-danger" type="submit">Yes</button>
                        <input class="btn btn-success" name="no" type="submit" value="No">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>