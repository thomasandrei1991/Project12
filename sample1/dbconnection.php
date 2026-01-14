<?php
// Database host (usually localhost kapag XAMPP)
$host = "localhost";

// Pangalan ng database na ginawa sa phpMyAdmin
$dbname = "sample_db1";

// Default username ng MySQL sa XAMPP
$username = "root";

// Default password (blank)
$password = "";

try {
    // Gumagawa ng PDO connection papunta sa MySQL database
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    // Para makita agad ang errors kung may problem sa SQL
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Kapag failed ang connection, titigil ang program
    die("Database connection failed: " . $e->getMessage());
}
?>
