<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Registration Form</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Registration Form</h2>
            </div>
            <div class="form-container">
                <div class="base">
                    <form action="index.php" method="post">
                        <div class="attributes">
                            <h2>Basic Information</h2>
                            <div class="information">
                                <label class="labeling">Name:</label>
                                <input type="text" name="name">
                                <label class="labeling">Age</label>
                                <input type="text" name="age">
                                <label class="labeling">Birthday</label>
                                <input type="text" name="birthday">
                            </div>
                        </div>
                    </form>
                    <form action="index.php" method="post">
                        <div class="gender">
                            <h2>Gender</h2><br>
                            <div class="gender-option">
                                <label >Male</label>
                                <input type="radio" name="sex" value="Male">
                                <label>Female</label>
                                <input type="radio" name="sex" value="Female">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-base">
                    <form action="index.php" method="post">
                        <div class="table-container">
                            <h2>Details</h2>
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Birthday</th>
                                    <th>Gender</th>
                                </tr>
                                <tr>
                                    <td>George</td>
                                    <td>35</td>
                                    <td>January 15, 1991</td>
                                    <td>Male</td>
                                </tr>
                            </table>
                            <div class="button-container">
                                <button>Add</button>
                                <button>Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
?>
 