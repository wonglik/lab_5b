<?php
include 'Database.php';  
include 'user.php';      
include 'session.php'; 

$database = new Database();
$db = $database->getConnection();  

$user = new User($db);

$result = $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">User List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Matric</th>
                    <th>Name</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["matric"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["role"]; ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='3'>No users found</td></tr>";
                }
                $db->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>