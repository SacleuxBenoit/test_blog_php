<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login / Register</title>
</head>
<body>
    <form action="./login_database.php" method="post">
        <div>
            <h3>Login</h3>
            <p>
                <label for="loginPseudo">Pseudo :</label>
                <input type="text" name="loginPseudo" id="loginPseudo">
            </p>

            <p>
                <label for="loginPassword">Mot de passe :</label>
                <input type="password" name="loginPassword" id="loginPassword">
            </p>

            <input type="submit" value="Sumbit">
        </div>
    </form>

    <form action="./register_database.php" method="post">
        <div>
            <h3>Register</h3>
            <p>
                <label for="registerPseudo">Pseudo :</label>
                <input type="text" name="registerPseudo" id="registerPseudo">
            </p>

            <p>
                <label for="registerPassword">Mot de passe :</label>
                <input type="password" name="registerPassword" id="registerPassword">
            </p>

            <p>
                <label for="confirmedRegisterPassword">confirmer le mot de passe :</label>
                <input type="password" name="confirmedRegisterPassword" id="confirmedRegisterPassword">
            </p>

            <input type="submit" value="Sumbit">
        </div>
    </form>
</body>
</html>