<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>Document</title>
</head>
<body>
        <header>
            <img src="ensakenitra_logo.jpg" alt="logo de lensa de kenitra">
            <h1>Incrivez vous dès maintenant!</h1>
        </header>
        <div class="flex">
            <form action="" method="post">
                <section>
                    <label for="Nom"><span class="texteduchamp">Nom</span></label>
                    <input class="champ" type="text" name="Nom" placeholder="Entrez  votre Nom..." pattern="[A-Za-z]+" maxlength="20" required="required" title="Veuillez entrer des lettres uniquement"  >
                    <br>
                    <br>
                    <label for="Prenom"><span class="texteduchamp">Prénom</span></label>
                    <input class="champ" type="text" name="Prenom" placeholder="Entrez votre Prénom..." pattern="[A-Za-z]+" maxlength="20" required="required" title="Veuillez entrer des lettres uniquement"  >
                    <br>
                    <br>
                    <label for="date"><span class="texteduchamp">Date de naissance</span></label>
                    <input type="date" id="entreedate" name="date" required="required">
                    <br>
                    <br>
                    <label for="filiere"><span class="texteduchamp">Filière</span></label>
                    <select name="filiere" id="filiere" required="required">
                        <option value="GI">Génie informaitque</option>
                        <option value="GIND">Génie industriel</option>
                        <option value="GM">Génie Mécatronique</option>
                        <option value="RST">Réseaux et systèmes de télécommunication</option>
                        <option value="GC">Génie civil</option>
                    </select>
                    <br>
                    <br>
                    <label for="apogee"><span class="texteduchamp">Apogée</span></label>
                    <input class="champ" type="number" name="apogee" placeholder="Entrez votre apogée" max="99999999" min="0" required="required" title="Veuillez entrer des chiffres uniquement"  >
                    <br>
                    <br>
                    <label for="ville"><span class="texteduchamp">Ville</span></label>
                    <select name="ville" id="ville" required="required">
                        <option value="casablanca">Casablanca</option>
                        <option value="kenitra">Kenitra</option>
                        <option value="rabat">Rabat</option>
                        <option value="salé">Salé</option>
                        <option value="mohammadia">Mohammadia</option>
                    </select>
                    <br>
                    <br>
                    <label for="login"><span class="texteduchamp">Login</span></label>
                    <input class="champ" type="text" name="login" placeholder="Choisissez votre Login"  maxlength="40"  required="required" pattern="[a-zA-Z0-9]+" title="Veuillez entrer des lettres et des chiffres uniquement">
                    <br>
                    <br>
                    <label for="mot_de_passe"><span class="texteduchamp">Mot de passe</span></label>
                    <input class="champ" type="password" name="mot_de_passe" placeholder="Choisissez un mot de passe"  maxlength="40"  required="required">
                    <br>
                    <br>
                    <label for="profil"><span class="texteduchamp">Je suis un</span></label>
                    <input class="champr" type="radio" name="profil" value="organisateur" required="required"><span class="radioo">Organisateur</span>
                    <span class="radioo"><input class="champr" type="radio" name="profil" value="organisateur" required="required"><span class="radioo">Visiteur</span>
                    <br>
                    <br>
                    <input type="submit" id="boutton_envoyer" name="envoyer" value="S'inscrire" class="champ">
                </section>
            </form>
            <div class="information">La platfrorme qui vous aide à découvrir et organiser vos futurs Evénements</div>
        </div>
</body>
</html>