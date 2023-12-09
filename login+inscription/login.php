<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>  
        <header>
            <img src="ensakenitra_logo.jpg" alt="logo de lensa de kenitra">
            <h1>Bienvenue dans votre espace!</h1>
        </header>
        <div class="flex">
            <form action="" method="post">
                <section>
                    <label for="login"><span class="textduchamp"><strong>Login</strong></span></label>
                    <br>
                    <br>
                    <input class="champ" type="email" name="login" placeholder="Entrez votre Login..." required="required" >
                    <br>
                    <br>
                    <br>
                    <label for="mot_de_passe"><span class="textduchamp"><strong>Mot de passe</strong></span></label>
                    <br>
                    <br>
                    <input class="champ" type="password" name="mot_de_passe" placeholder="Entrez votre mot de passe..." required="required">
                    <br>
                    <br>
                    <br>
                    <span id="compte">Nouveau sur notre site?</span><a href="inscription.php">Créer votre compte</a>
                    <br>
                    <br>
                    <input type="submit" id="boutton_envoyer" name="envoyer" value="Connexion" class="champ">
                </section>
            </form>
        </div>
</body>
</html>