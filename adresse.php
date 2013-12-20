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

        <div class="adresseChange">
                <div class="wrapper">
                    <form action="order3.php">
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
                        <input type="submit" value="Ajouter">
                        <a class="btn continuer" href="order3.php"><span class="icon icon-chevron-left-little"></span>Revenir</a>
                    </form>
                </div>
            </div>


</section>
<?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
