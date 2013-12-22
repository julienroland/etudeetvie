<?php include('header.php');?>
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
        <h1 class="section" aria-level="1" role="heading">Contenu principal du site</h1>

        <div class="order">
            <ul class="orderSteps">
                <li class=" resume done"><a title="Revenir à l'étape 1" href="order1.php">
                        <span class="number">1</span>
                        <span class="title">Résumé</span>
                    </a></li>
                <li class="identifier done"><a title="Revenir à l'étape 2" href="order2.php">
                        <span class="number">2</span>
                        <span class="title">Identification</span>
                    </a></li>
                <li class="adresse done "><a title="Revenir à l'étape 3" href="order3.php">
                        <span class="number">3</span>
                        <span class="title">Adresse</span>
                    </a></li>
                <li class="paiement active"><a title="Rester à l'étape 4" href="order4.php">
                        <span class="number">4</span>
                        <span class="title">Paiement</span>
                    </a></li>
            </ul>
            <section class="order4">
                <h1 class="section" aria-level="1" role="heading">Choisissez votre moyen de paiement</h1>
                <div class="wrapper">
                    <span class="text">
                        Merci de choisir votre moyen de paiement afin de régler la somme de <b>824,84 €</b> TTC
                      </span>
                    <ul class="choixPaiement">
                        <li><a href="virement.php" title="Choisir le virement comme methode de paiement">
                                <div class="image"><img src="./img/framework/icon/paiement/check_128.png" alt="Icon affichant un virement/chèque"/></div>
                                <span class="text">Virement bancaire (plus long)</span></a></li>
                        <li><a href="virement.php" title="Choisir paypal comme moyen de paiement">
                                <div class="image"><img src="./img/framework/icon/paiement/paypal_128.png" alt="Icon affichant le logo de Paypal"/>
                                </div>
                                <span class="text">Paypal</span></a></li>
                    </ul>

                </div>
                <div class="wrapper navigationOrder">

                    <a class=" continuer btn" title="Revenir à l'étape précédente, l'étape n°3" href="order3.php"><span class="icon icon-chevron-left-little"></span>Revenir
                        en arrière</a>
                </div>
            </section>
        </div>
    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
