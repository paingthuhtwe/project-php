<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 border rounded py-5 shadow" style="max-width:400px;">
        <form action="_actions/login.php" method="post">
            <h3 class="text-center mb-3">Login Form</h3>

            <?php if (isset($_GET['incorrect'])) :?>
                <div class="alert alert-warning">
                    Incorrect email or password!
                </div>
            <?php endif ?>
            
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <div class="text-center">
                <button class="btn btn-primary mt-2" type="submit">Login</button>
            </div>
        </form>
        <br>
        <div class="text-center">
            <a href="register.php">Register</a>
        </div>
    </div>
</body>
</html>