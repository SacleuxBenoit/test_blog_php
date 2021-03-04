<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css"> <!-- for index.php -->
    <link rel="stylesheet" href="../css/style.css"> <!-- for every file in folder layouts -->

    <title>Document</title>
</head>
<body>

    <h1><a href="http://localhost:8888/test/test_blog_php/">Header</a></h1>

    <div>
        <ul>
            <li><a href="http://localhost:8888/test/test_blog_php/layouts/loginAndRegister.php">Login / register</a></li>
            <li><a href="http://localhost:8888/test/test_blog_php/layouts/createArticles.php">Create articles</a></li>
            <?php
                if(isset($_SESSION['loginPseudo'])){
                    ?>
                    <li><a href="http://localhost:8888/test/test_blog_php/database/logout_database.php">Log out</a></li>
                    <?php
                }
                ?>
        </ul>
    </div>

</body>
</html>