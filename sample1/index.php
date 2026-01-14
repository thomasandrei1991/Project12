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
            <!-- Ipinapasa ang user ID sa edit at delete -->
            <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $user['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
