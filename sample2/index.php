<?php
    // Default values
    $name = "George";
    $age = 21;

    // Kapag pinindot ang submit button
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <form method="post">
        <h1>Details</h1>

        <!-- Input fields -->
        <input type="text" name="name" placeholder="Enter name" required>
        <input type="number" name="age" placeholder="Enter age" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <hr>

    <!-- Display submitted data -->
    <p>Name : <?= htmlspecialchars($name) ?></p>
    <p>Age : <?= htmlspecialchars($age) ?></p>

    </body>
</html>
