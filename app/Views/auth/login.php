<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login - CI 4</title>
</head>
<style>
    body{
        background-color: gray;
    }
</style>
<body>

<div class="container">
<h1>Login - CI 4</h1>
</div>

<div class="container">

    <div class="card">
        <div class="card-body">

            <form action="<?= site_url('/auth/postlogin') ?>" method="POST">

            <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label" for="username">
                        <b>Username</b>
                    </label>
                    <input class="form-control" type="text" name="username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">
                        <b>Password</b>
                    </label>
                    <input class="form-control" type="password" name="password" required>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-md btn-primary" value="Login">
                    <a href="/" class="btn btn-md btn-danger">Back</a>
                </div>

            </form>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>