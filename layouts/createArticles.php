<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Create Articles</title>
</head>
<body>
    <h3>Création d'article :</h3>

    <form action="../database/addArticles_database.php" method="post">
    
    <div>
        <p>
            <label for="titleArticle">Titre :</label>
            <input type="text" id="titleArticle" name="titleArticle">
        </p>

        <p>
            <label for="descArticle">Description :</label>
            <input type="text" id="descArticle" name="descArticle">
        </p>

        <p>
            <label for="contentArticle">Contenu :</label>
            <input type="text" id="contentArticle" name="contentArticle">
        </p>

        <input type="submit" value="Submit">
    </div>

    </form>
</body>
</html>