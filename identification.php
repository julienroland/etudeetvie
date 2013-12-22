<?php include('header.php'); ?>
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
            <div class="order2">
                <div class="creerCompte">
                    <div class="wrapper">
                        <section class="part1Inscription">
                            <h1 class="section" aria-level="1" role="heading">Inscrivez-vous !</h1>
                            <form action="identification.php" class="login">

                                <fieldset>
                                    <legend>Créer un compte</legend>
                                    <p>Créez votre compte pour passer commande, mémoriser votre panier d'une visite à
                                        l'autre et suivre l'expédition de vos achats.</p>


                                    <p class="text inscription">
                                        <label for="email">Votre adresse email</label>
                                        <input type="email" required name="email" id="email"
                                               placeholder="email@email.be">
                                    </p>
                                    <button class="newsCompte">Inscrire</button>
                                </fieldset>
                            </form>
                        </section>
                        <section class="part2Inscription">
                            <h1 class="section" aria-level="1" role="heading">Connectez-vous à votre compte</h1>
                            <form action="index.php">
                                <fieldset>
                                    <legend>Connexion</legend>

                                    <p class="text">
                                        <label for="emailCo">Votre adresse email</label>
                                        <input type="email" required name="emailCo" id="emailCo"
                                               placeholder="email@email.be">
                                    </p>

                                    <p class="text">
                                        <label for="passwordCo">Votre adresse email</label>
                                        <input type="password" required name="passwordCo" id="passwordCo">
                                    </p>
                                    <input type="submit" value="Connexion"/>
                                </fieldset>
                            </form>
                        </section>
                    </div>
                    <div class="wrapper">
                        <div class="formInscription">
                            <form action="order3.php" class="login">
                                <p class="requirement"><em>Les champs suivis d'une <sup>*</sup> sont obligatoire</em>
                                </p>
                                <fieldset>
                                    <legend>Informations personnelles</legend>
                                    <p class="text required civilite">
                                        <span>Civilité</span>
                                        <label for="civilite1">M.</label>
                                        <input type="radio" name="civilite" id="civilite1">
                                        <label for="civilite2">Mme.</label>
                                        <input type="radio" name="civilite" id="civilite2">
                                    </p>

                                    <p class="text required">
                                        <label for="prenom">Prénom</label>
                                        <input type="text" required name="prenom" id="prenom">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text required">
                                        <label for="nom">Nom</label>
                                        <input type="text" required name="nom" id="nom">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text required">
                                        <label for="email2">Email</label>
                                        <input type="email" required name="email2" id="email2">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text required">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" required name="password" id="password">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text required">
                                        <label for="birthday">Date de naissance</label>
                                        <select name="day" id="birthday" required>
                                            <option value="0">-</option>
                                            <option value="1">1</option>
                                        </select>
                                        <select name="month" id="birthday" required>
                                            <option value="0">-</option>
                                            <option value="1">Janvier</option>
                                        </select>
                                        <select name="year" id="birthday" required>
                                            <option value="0">-</option>
                                            <option value="1">1900</option>
                                        </select>
                                        <sup>*</sup>
                                    </p>
                                    <p class="text required newsletter">
                                        <label for="newsletterF">S'inscrire à la newsletter</label>
                                        <input type="checkbox" name="newsletter" id="newsletterF">

                                        <label for="partenaires">Recevez les offres spéciales de nos partenaires</label>
                                        <input type="checkbox" name="partenaires" id="partenaires">
                                    </p>

                                    <p class="text">
                                        <a title="Revenir au début du formulaire" href="#adresse">Début du formulaire suivant</a>
                                    </p>
                                </fieldset>
                                <fieldset id="adresse">
                                    <legend>Votre adresse</legend>
                                    <p class="text">
                                        <label for="societe">Société</label>
                                        <input type="text" name="societe" id="societe">
                                    </p>

                                    <p class="text">
                                        <label for="prenom2">Prénom</label>
                                        <input type="text" name="prenom2" required id="prenom2">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text">
                                        <label for="nom2">Nom</label>
                                        <input type="text" name="nom2" required id="nom2">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" name="adresse" required id="adresse">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text">
                                        <label for="adresse2">Adresse (2)</label>
                                        <input type="text" name="adresse2" id="adresse2">
                                    </p>

                                    <p class="text">
                                        <label for="postal">Code Postal</label>
                                        <input type="text" name="postal" required id="postal">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text">
                                        <label for="ville">Ville</label>
                                        <input type="text" name="ville" required id="ville">
                                        <sup>*</sup>
                                    </p>

                                    <p class="text">
                                        <label for="pays">Pays</label>
                                        <select name="pays" id="pays" required>
                                            <option value="0">-</option>
                                            <option value="1">Belgique</option>
                                        </select>
                                        <sup>*</sup>
                                    </p>
                                    <p class="text">
                                        <label for="telFix">Téléphone domicile</label>
                                        <input type="tel" name="telFix" id="telFix">
                                    </p>

                                    <p class="text">
                                        <label for="tel">Téléphone portable</label>
                                        <input type="tel" name="tel" id="tel">
                                    </p>


                                </fieldset>
                                <input type="submit" value="S'incrire">
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
