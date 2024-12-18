<?php
include 'Database.php';  
include 'user.php';      
include 'session.php'; 

if (isset($_GET['matric']) && $_SERVER["REQUEST_METHOD"] == "GET") {
    $matric = $_GET['matric'];

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    $userDetails = $user->getUser($matric);

    if ($userDetails) {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update User</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>

        <body>
            <div class="container">
                <h1 class="mt-5">Update User</h1>
                <form action="update.php" method="post" class="mt-3">
                    <div class="form-group">
                        <label for="matric">Matric:</label>
                        <input type="text" class="form-control" id="matric" name="matric" value="<?php echo htmlspecialchars($userDetails['matric']); ?>"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($userDetails['name']); ?>"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <select name="role" id="role" class="form-control" required>
                            <option value="">Please select</option>
                            <option value="lecturer" <?php echo ($userDetails['role'] == 'lecturer') ? 'selected' : ''; ?>>Lecturer</option>
                            <option value="student" <?php echo ($userDetails['role'] == 'student') ? 'selected' : ''; ?>>Student</option>
                        </select><br><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="read.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </body>

        </html>
        <?php
    } else {
        echo "User not found.";
    }

    $db->close();
} else {
    echo "Invalid request.";
}
?>