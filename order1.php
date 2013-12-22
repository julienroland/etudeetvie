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
                        <li class="active resume"><a title="Aller à l'étape 1" href="order1.php">
                                <span class="number">1</span>
                                <span class="title">Résumé</span>
                            </a></li>
                        <li class="identifier"><a href="javascript:void()">
                                <span class="number">2</span>
                                <span class="title">Identification</span>
                            </a></li>
                        <li class="adresse"><a href="javascript:void()">
                                <span class="number">3</span>
                                <span class="title">Adresse</span>
                            </a></li>
                        <li class="paiement"><a href="javascript:void()">
                                <span class="number">4</span>
                                <span class="title">Paiement</span>
                            </a></li>
                    </ul>
                <div class="order1 ">
                    <div class="wrapper">
                    <h3 aria-level="3" role="heading">Résumé de votre commande</h3>
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
                                <td class="action delete"><a title="Supprimer le produit de votre panier" href="javascript:void()">Supprimer</a></td>
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
                    <a href="order2.php" title="Valider votre commande et passez à l'étape suivante" class="btn commander">Valider la commande <span class="icon icon-chevron-right-little-white"></span></a>
                    <a href="index.php" title="Retourner à l'éccueil pour ajouter de nouveaux produits" class="btn continuer"><span class="icon icon-chevron-left-little"></span>Continuer mes achats</a>

                    </div>
                </div>
            </div>
        </section>
        <?php include('footer.php'); ?>
    </section>

    <?php include('bottom.php'); ?>
