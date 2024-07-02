<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login</title>
</head>

<body>
    <div class="container mt-4 text-center" style="max-width: 600px">
        <h1 class="h4 mb-4">Log In</h1>
        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Email or Password incorrect
            </div>
        <?php endif ?>

        <?php if (isset($_GET['register'])) : ?>
            <div class="alert alert-info">
                Account created. Please LogIn.
            </div>
        <?php endif ?>

        <?php if (isset($_GET['suspended'])) : ?>
            <div class="alert alert-danger">
                Account suspended.
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post">
            <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
            <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
            <button class="w-100 btn btn-lg btn-primary">login</button>
        </form>
        <a href="register.php">Register</a>
    </div>
</body>

</html>