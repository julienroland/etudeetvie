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
                <?php include('introCategorie.php'); ?>
               <?php include('categorie.php'); ?>
               <?php include('itemsCategories.php'); ?>

           </section>
           <?php include('footer.php'); ?>
       </section>

       <?php include('bottom.php'); ?>
