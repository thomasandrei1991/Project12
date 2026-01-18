<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>Male</label>
            <input type="radio" name="gender" value="Male">
            <label>Female</label>
            <input type="radio" name="gender" value="Female">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['submit'])) {
        $gender = $_POST['gender'];
        echo "you selected: " . $gender;
    }
?>