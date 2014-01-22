            <?php include('header.php');?>
            <h1 class="section" role="heading" aria-level="1">Page d'accueil du site e-commerce etude et vie</h1>
            <section class="container ">
                <h1 class="section" role="heading" aria-level="1">Contenu de la page</h1>
                <section class="banner">
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
                <?php include('intro.php'); ?>
                <?php include('populaires.php'); ?>
                <?php include('bestSales.php'); ?>

            </section>
            <?php include('footer.php'); ?>
        </section>

        <?php include('bottom.php'); ?>
