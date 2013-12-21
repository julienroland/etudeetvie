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
