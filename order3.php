<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
                <li class="adresse active "><a href="order3.php">
                        <span class="number">3</span>
                        <span class="title">Adresse</span>
                    </a></li>
                <li class="paiement"><a href="javascript:void()">
                        <span class="number">4</span>
                        <span class="title">Paiement</span>
                    </a></li>
            </ul>
            <div class="order3 ">
                <div class="wrapper">
             <p class="text">
                 <label for="adresse">
                     Choisissez une adresse de livraison
                 </label>
                 <select name="adresse" id="adresse">
                     <option value="1">Adresse Personelle</option>
                 </select>
             </p>
                <p class="text">
                    <label for="sameAdresse">Utiliser la même adresse pour la facturation ?</label>
                    <input type="checkbox" name="sameAdresse" id="sameAdresse"/>
                </p>
                <div class="livraison">
                    <h2>Votre adresse de livraison</h2>
                    <ul>
                        <li class="nom">Julien Roland</li>
                        <li class="rue">Rue des pas content</li>
                        <li>5000 Namur</li>
                        <li class="pays">Belgique</li>
                        <li><a href="">Modifier</a></li>
                    </ul>
                </div>
                <div class="facturation">
                    <h2>Votre adresse de facturation</h2>
                    <ul>
                        <li class="nom">Julien Roland</li>
                        <li class="rue">Rue des pas content</li>
                        <li>5000 Namur</li>
                        <li class="pays">Belgique</li>
                        <li><a href="">Modifier</a></li>
                    </ul>
                </div>
                <a class="btn" href="">Ajouter une nouvelle adresse</a>
                <p class="text">
                    <label for="commentaire">Ecrire un commentaire à propos de votre adresse</label>
                    <textarea name="commentaire" id="commentaire" >Ex: Emprunter une route en terre</textarea>
                </p>
                    <a class="next btn" href="order4.php">Dernière étape<span class="icon icon-chevron-right-little-white"></étapespan></a>
                </div>

            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>