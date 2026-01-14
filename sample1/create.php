<?php
// Kinukuha ang database connection
require "dbconnection.php";

// Chine-check kung na-click ang Save button
if (isset($_POST['save'])) {

    // Kinukuha ang input galing sa form
    $username = $_POST['username'];
    $email = $_POST['email'];

    // SQL query na may placeholders (?) para iwas SQL Injection
    $sql = "INSERT INTO users (username, email) VALUES (?, ?)";

    // Ihahanda ang SQL query
    $stmt = $conn->prepare($sql);

    // I-eexecute ang query kasama ang actual values
    $stmt->execute([$username, $email]);

    // Message kapag successful
    echo "User added successfully!";
}
?>

<!-- Form para mag-input ng bagong user -->
<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <button name="save">Save</button>
</form>

