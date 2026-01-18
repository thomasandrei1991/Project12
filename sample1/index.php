<?php
// Kinukuha ang database connection
require "dbconnection.php";

// SQL query para kunin lahat ng records sa users table
$stmt = $conn->query("SELECT * FROM users");

// Kinukuha lahat ng rows bilang array
$users = $stmt->fetchAll();
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <!-- Loop para ipakita bawat user -->
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <!-- EDIT BUTTON -->
            <form action="edit.php" method="GET" style="display:inline;">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <button type="submit">Edit</button>
            </form>
            <!-- DELETE BUTTON -->
            <form action="delete.php" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <button type="submit" name="delete"
                    onclick="return confirm('Are you sure you want to delete this user?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
