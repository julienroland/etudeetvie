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
                <section class="reservation">
                    <h2>Procédure de réservation</h2>

                    <p>Via le formulaire de ce site, vous pouvez commander un ou plusieurs produits de votre choix.
                        Dès réception de votre commande, nous vous confirmons la disponibilité, le prix et le délai
                        approximatif de livraison. Nous faisons le maximum pour que les produits soient toujours de
                        stock. Cependant à de rares occasions, certains d'entre eux sont momentanément en rupture chez
                        nos fournisseurs. </p>

                    <p>
                        Deux méthodes de paiement s'offrent à vous à la fin de la transaction: soit le paiement par
                        <a href="#virement">virement européen</a> soit par <a href="#carte">carte de crédit</a> via le
                        système très sécurisé de Paypal. Si vous optez
                        pour un virement européen, vous recevrez automatiquement par e-mail notre relevé
                        d'identification bancaire pour faire votre virement européen. Si vous optez pour un paiement par
                        carte de crédit via Paypal, votre commande sera traitée immédiatement. Ainsi, vous êtes libre de
                        choisir la méthode que vous préférez.
                    </p>

                    <h3>Pour les virements européens: </h3>
                    <h4>Pour la Belgique uniquement</h4>

                    <p>la méthode la plus simple consiste à effecter un virement sur notre compte banquaire:
                        Europabank Gent : 671-9423889-22</p>
                    <h4>Pour l'étranger</h4>

                    <p>La méthode la plus simple consiste à effectuer un SWIFT ou virement inernational dont voici les
                        références complètes :
                    </p>

                    <p>
                        SWIFT : EUROPABANK nv
                        Burgstraat, 170
                        9000 GENT
                        Belgique
                        Code IBAN : BE 06 6719 4238 8922
                        Code BIC : EURBBE99
                    </p>

                    <p>
                        <b> Attention, si il y a des frais liés au virement européen (de plus en plus rare), ceux ci
                            sont
                            entièrement à votre charge. Renseignez-vous avant auprès de votre institution financière.
                        </b>
                    </p>

                    <h3>Chèque:</h3>

                    <p> Sauf mention contraire, nous n'acceptions jamais de chèques étrangers. En cas d'envoi d'un
                        chèque étranger (ex: chèque français) une majoration liée aux frais bancaires peut être demandée
                        (variable suivant le montant). Elle se situe le plus souvent autour de 25 Euro.</p>

                    <p>
                        En effet, votre réservation sera pour nous enregistrée quand l'accompte ou la totalité de la
                        somme sera versée. A ce moment là, l'article sera préparé et selon votre choix, il vous sera
                        envoyé ou tenu à votre disposition à notre bureau.
                    </p>

                    <a href="index.php"><span class="icon icon-chevron-left-little"></span>Retour à l'accueil</a>
                </section>
            </div>
        </div>

    </section>
    <?php include('footer.php'); ?>
</section>

<?php include('bottom.php'); ?>
