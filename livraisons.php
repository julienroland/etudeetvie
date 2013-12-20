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

        <div class="cms">
            <div class="wrapper">
                <h2>Livraisons et retours</h2>
                <section class="transport">
                    <h3>Le transport de votre colis</h3>

                    <p>
                        Les colis sont généralement expédiés en <em>48h</em> après réception de votre paiement. Le mode
                        d'expédidition standard est:
                        Pour des colis <em>inférieurs à 2Kg</em>, le recommandé postal pour la France et pour l'étranger ou le
                        Kilpost sécure pour la Belgique
                        Pour des colis <em>supérieurs à 2Kg</em>, en général, nous choisissons le Kilopost Secure en Belgique et
                        un transporteur pour la France, la Suisse, le Luxembourg et pour l'étranger.
                        Les frais d'expédition comprennent l'emballage, la manutention et les frais postaux. Ils peuvent
                        contenir une partie fixe et une partie variable en fonction du prix ou du poids de votre
                        commande. Nous vous conseillons de <em>regrouper vos achats</em> en une unique commande. Nous ne pouvons
                        pas grouper deux commandes distinctes et vous devrez vous acquitter des frais de port pour
                        chacune d'entre elles. Votre colis est expédié à <em>vos propres risques</em>, un soin particulier est
                        apporté au colis contenant des produits fragiles.
                    </p>
                    <a href="index.php"><span class="icon icon-chevron-left-little"></span>Retour à l'accueil</a>
                </section>
            </div>
        </div>

    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
