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

        <div class="contact">
            <div class="wrapper">
                <h2>Contactez-nous !</h2>

                <p>N'hésitez pas à nous poser des questions à propos d'une commande ou des informations sur nos
                    produits.</p>

                <form action="contactResponse.php">
                    <fieldset>
                        <legend>Formulaire de contact</legend>
                        <label for="objet">Objet du message</label>
                        <select name="objet" id="objet">
                            <option value="1">Service client</option>
                            <option value="2">Support technique</option>
                        </select>

                        <label for="email">Votre adresse email</label>
                        <input type="email" name="email" required id="email" placeholder="vous@hotmail.com"/>

                        <label for="message">Votre message</label>
                        <textarea required name="message" id="message"></textarea>

                        <input type="submit" value="Envoyer le message"/>
                    </fieldset>
                </form>

            </div>
        </div>

    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
