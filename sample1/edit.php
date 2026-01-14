<?php
require "dbconnection.php";

// Kinukuha ang ID mula sa URL (?id=1)
$id = $_GET['id'];

// Kinukuha ang existing data ng user
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

// Kapag pinindot ang Update button
if (isset($_POST['update'])) {

    // Kinukuha ang bagong values mula sa form
    $username = $_POST['username'];
    $email = $_POST['email'];

    // SQL query para i-update ang user
    $sql = "UPDATE users SET username=?, email=? WHERE id=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $email, $id]);

    // Balik sa index page
    header("Location: index.php");
}
?>
<!-- Form na may existing values -->
<form method="POST">
    <input type="text" name="username" value="<?= $user['username'] ?>" required>
    <input type="email" name="email" value="<?= $user['email'] ?>" required>
    <button name="update">Update</button>
</form>
