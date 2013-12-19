<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/screen.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<h1 class="section" role="heading" aria-level="1">Page d'accueil du site e-commerce etude et vie</h1>
<section class="container ">
<h1 class="section" role="heading" aria-level="1">Contenu de la page</h1>
<section class="banner" role="banner">
    <div class="wrapper">
        <?php include('logo.php'); ?>
        <?php include('what.php'); ?>
        <?php include('search.php'); ?>
        <?php include('panier.php'); ?>
        <?php include('connexion.php'); ?>
        <?php include('nav.php'); ?>
    </div>
</section>

<section role="main" class="main" id="main">
<h1 class="section">Contenu principal du site</h1>

<div class="order">
    <ul class="orderSteps">
        <li class="resume done"><a href="order1.php">
                <span class="number">1</span>
                <span class="title">Résumé</span>
            </a></li>
        <li class="identifier active"><a href="order2.php">
                <span class="number">2</span>
                <span class="title">Identification</span>
            </a></li>
        <li class="adresse"><a href="javascript:void()">
                <span class="number">3</span>
                <span class="title">Adresse</span>
            </a></li>
        <li class="paiement"><a href="javascript:void()">
                <span class="number">4</span>
                <span class="title">Paiement</span>
            </a></li>
    </ul>
    <div class="order2">
        <div class="creerCompte">
            <div class="wrapper">
                <form action="order3.php" class="login">
                    <div class="part1Inscription">
                        <fieldset>
                            <legend>Créer un compte</legend>
                            <p>Créez votre compte pour passer commande, mémoriser votre panier d'une visite à
                                l'autre et suivre l'expédition de vos achats.</p>


                            <p class="text inscription">
                                <label for="email">Votre adresse email</label>
                                <input type="email" required name="email" id="email"
                                       placeholder="email@email.be">
                            </p>
                            <button class="newsCompte">Inscrire</button>
                        </fieldset>
                </form>
            </div>
            <div class="part2Inscription">
                <form action="order3.php">
                    <fieldset>
                        <legend>Connexion</legend>

                        <p class="text">
                            <label for="emailCo">Votre adresse email</label>
                            <input type="email" required name="emailCo" id="emailCo"
                                   placeholder="email@email.be">
                        </p>

                        <p class="text">
                            <label for="passwordCo">Votre adresse email</label>
                            <input type="password" required name="passwordCo" id="passwordCo">
                        </p>
                        <input type="submit" value="Connexion"></input>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="wrapper">
            <div class="formInscription">
                <form action="order3.php" class="login">
                    <p class="requirement"><em>Les champs suivis d'une <sup>*</sup> sont obligatoire</em></p>
                    <fieldset>
                        <legend>Informations personnelles</legend>
                        <p class="text required civilite">
                            <span>Civilité</span>
                            <label for="civilite1">M.</label>
                            <input type="radio" name="civilite" id="civilite1">
                            <label for="civilite2">Mme.</label>
                            <input type="radio" name="civilite" id="civilite2">
                        </p>

                        <p class="text required">
                            <label for="prenom">Prénom</label>
                            <input type="text" required name="prenom" id="prenom">
                            <sup>*</sup>
                        </p>

                        <p class="text required">
                            <label for="nom">Nom</label>
                            <input type="text" required name="nom" id="nom">
                            <sup>*</sup>
                        </p>

                        <p class="text required">
                            <label for="email2">Email</label>
                            <input type="email" required name="email2" id="email2">
                            <sup>*</sup>
                        </p>

                        <p class="text required">
                            <label for="password">Mot de passe</label>
                            <input type="password" required name="password" id="password">
                            <sup>*</sup>
                        </p>

                        <p class="text required">
                            <label for="birthday">Date de naissance</label>
                            <select name="day" id="birthday" required>
                                <option value="0">-</option>
                                <option value="1">1</option>
                            </select>
                            <select name="month" id="birthday" required>
                                <option value="0">-</option>
                                <option value="1">Janvier</option>
                            </select>
                            <select name="year" id="birthday" required>
                                <option value="0">-</option>
                                <option value="1">1900</option>
                            </select>
                            <sup>*</sup>
                        </p>
                        <p class="text required newsletter">
                            <label for="newsletterF">S'inscrire à la newsletter</label>
                            <input type="checkbox" name="newsletter" id="newsletterF">

                            <label for="partenaires">Recevez les offres spéciales de nos partenaires</label>
                            <input type="checkbox" name="partenaires" id="partenaires">
                        </p>

                        <p class="text">
                            <a href="#adresse">Début du formulaire suivant</a>
                        </p>
                    </fieldset>
                    <fieldset id="adresse">
                        <legend>Votre adresse</legend>
                        <p class="text">
                            <label for="societe">Société</label>
                            <input type="text" name="societe" id="societe">
                        </p>

                        <p class="text">
                            <label for="prenom2">Prénom</label>
                            <input type="text" name="prenom2" required id="prenom2">
                            <sup>*</sup>
                        </p>

                        <p class="text">
                            <label for="nom2">Nom</label>
                            <input type="text" name="nom2" required id="nom2">
                            <sup>*</sup>
                        </p>

                        <p class="text">
                            <label for="adresse">Adresse</label>
                            <input type="text" name="adresse" required id="adresse">
                            <sup>*</sup>
                        </p>

                        <p class="text">
                            <label for="adresse2">Adresse (2)</label>
                            <input type="text" name="adresse2" id="adresse2">
                        </p>

                        <p class="text">
                            <label for="postal">Code Postal</label>
                            <input type="text" name="postal" required id="postal">
                            <sup>*</sup>
                        </p>

                        <p class="text">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" required id="ville">
                            <sup>*</sup>
                        </p>

                        <p class="text">
                            <label for="pays">Pays</label>
                            <select name="pays" id="pays" required>
                                <option value="0">-</option>
                                <option value="1">Belgique</option>
                            </select>
                            <sup>*</sup>
                        </p>
                        <p class="text">
                            <label for="telFix">Téléphone domicile</label>
                            <input type="tel" name="telFix" id="telFix">
                        </p>

                        <p class="text">
                            <label for="tel">Téléphone portable</label>
                            <input type="tel" name="tel" id="tel">
                        </p>


                    </fieldset>
                    <input type="submit" value="S'incrire">
                </form>
            </div>
        </div>
    </div>


</div>
</div>
</section>
<?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
