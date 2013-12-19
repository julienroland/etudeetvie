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
                    <li class="active"><a href="order1.php">
                        <span class="number">1</span>
                        <span class="title">Résumé</span>
                    </a></li>
                    <li><a href="">
                        <span class="number">2</span>
                        <span class="title">Identification</span>
                    </a></li>
                    <li><a href="">
                        <span class="number">3</span>
                        <span class="title">Adresse</span>
                    </a></li>
                    <li><a href="">
                        <span class="number">4</span>
                        <span class="title">Frais de port</span>
                    </a></li>
                    <li><a href="">
                        <span class="number">5</span>
                        <span class="title">Paiement</span>
                    </a></li>
                </ul>
                <div class="order1 wrapper">
                    <h3>Résumé de votre commande</h3>
                    <table class="headerTableCommande">
                        <thead>
                            <tr>
                                <th>Article</th>
                                <th class="optionnal">Prix unitaire TTC</th>
                                <th>Quantité</th>
                                <th>Total TTC</th>
                                <th class="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunette Prisma</td>
                                <td class="optionnal">200€</td>
                                <td>
                                    <select name="quantite" id="quantite">
                                        <option value="1" selected>1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>
                                    </select>
                                </td>
                                <td>200€</td>
                                <td class="action delete"><a href="">Supprimer</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="totalProduit">
                        <span class="title">Total produit TTC</span>
                        <span class="number">1000 €</span>
                    </div>
                    <div class="fraisPort">
                        <span class="title">Frais de port</span>
                        <span class="number">13.63 €</span>
                    </div>
                    <div class="total">
                        <span class="title">Total TTC</span>
                        <span class="number">1013.63 €</span>
                    </div>
                    <a href="order2.php" class="btn commander">Valider la commande</a>
                    <a href="index.php" class="btn continuer"><span class="icon icon-chevron-left-little"></span>Continuer mes achats</a>
                    

                </div>
            </div>
        </section>
        <?php include('footer.php'); ?>
    </section>

    <?php include('bottom.php'); ?>
