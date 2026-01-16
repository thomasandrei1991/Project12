<?php
    // Default values
    $name;
    $age;

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
        <link rel="stylesheet" href="style.css">
        <title>Sample2</title>
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <form method="post" onsubmit="return errorMessage()">
                    <h1>Details</h1>
                    <!-- Input fields -->
                    <input type="text" id="name" name="name" placeholder="Enter name">
                    <input type="number" id="age" name="age" placeholder="Enter age">
                    <button type="submit" name="submit" onclick="errorMessage()">Submit</button>
                </form>
            </div> 
            <p id="error"></p>
            <div class="display-container">
                <!-- Display submitted data -->
                <p>Name : <?= htmlspecialchars($name) ?></p>
                <p>Age : <?= htmlspecialchars($age) ?></p>
            </div>
        </div>
    </body>
    <script src="script.js"></script>
</html>
