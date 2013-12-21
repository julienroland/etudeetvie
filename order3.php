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
                <div class="wrapper yourAdresse">
                    <h3>Votre adresse</h3>

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
                    <a class="btn" href="adresse.php">Ajouter une nouvelle adresse</a>

                    <div class="comm">
                        <label for="commentaire">Ecrire un commentaire à propos de votre adresse</label>
                        <textarea name="commentaire" id="commentaire">Ex: Emprunter une route en terre puis rouler 300 mètres</textarea>
                    </div>
                </div>
                <div class="wrapper fraisPort">
                    <h3>Frais de port</h3>
                    <ul>
                        <li><input type="radio" name="livreur1" id="livreur1"/><label for="livreur1"><img
                                    src="./img/framework/icon/livreurs/ups.jpg" alt=""/></label><span class="timing">1 à 2 jours ouvrables</span><span
                                class="price"><b>13€</b> TTC</span></li>

                    </ul>
                </div>
                <div class="wrapper navigationOrder">
                    <a class="next btn" href="order4.php">Dernière étape<span
                            class="icon icon-chevron-right-little-white"></span></a>
                    <a class=" continuer btn" href="order2.php"><span class="icon icon-chevron-left-little"></span>Revenir
                        en arrière</a>
                </div>
            </div>

        </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
