<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Login Page</h1>

        <form action="authenticate.php" method="post" class="mt-3">
            <div class="form-group">
                <label for="matric">Matric:</label>
                <input type="text" class="form-control" name="matric" id="matric" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <p><a href="register.php" class="register-link">Register</a> here if you have not.</p>
        </form>
    </div>
</body>

</html>