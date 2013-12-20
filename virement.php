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
                <li class=" resume done"><a href="order1.php">
                        <span class="number">1</span>
                        <span class="title">Résumé</span>
                    </a></li>
                <li class="identifier done"><a href="order2.php">
                        <span class="number">2</span>
                        <span class="title">Identification</span>
                    </a></li>
                <li class="adresse done "><a href="order3.php">
                        <span class="number">3</span>
                        <span class="title">Adresse</span>
                    </a></li>
                <li class="paiement active"><a href="order4.php">
                        <span class="number">4</span>
                        <span class="title">Paiement</span>
                    </a></li>
            </ul>
            <div class="order4 virement">
                <div class="wrapper">
                    <p class="success"> Votre commande sur Études et vie a bien été enregistrée.</p>

                    <p> Merci de nous envoyer un virement bancaire avec : </p>
                    <ul>

                        <li> - Un montant de <b>251,23 €</b></li>

                        <li>- A l'ordre de <em>Etudes et Vie</em></li>

                        <li> - Suivant ces détails Pays européens:
                            Code IBAN : <b>BE 06 6719 4238 8922</b>
                            Code BIC : <b>EURBBE99</b>
                        </li>


                        <li> - A cette banque EUROPABANK nv
                            Burgstraat, 170
                            9000 GENT
                        </li>

                        <li>- N'oubliez pas d'indiquer votre numéro de commande <em>1620</em> dans le sujet de votre virement
                        </li>

                    </ul>
                  <p>  Tous les frais de transfert bancaire sont entièrement à votre charge.
                    Un email contenant ces informations vous a été envoyé.

                    Votre commande sera expédiée dès <b>réception</b> de votre virement.

                    Pour toute question ou information complémentaire merci de contacter notre support client.

                    </p>
                </div>
                <div class="wrapper navigationOrder">

                    <a class=" continuer btn" href="order4.php"><span class="icon icon-chevron-left-little"></span>Revenir
                        en arrière</a>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
