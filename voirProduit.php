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
                <h1 class="section" role="heading" aria-level="1">Contenu principal du site</h1>

                <section class="produit wrapper" itemscope itemType="http://schema.org/Product">
                  <h1 role="heading" aria-level="1" itemProp="name">Montre de superman</h1>
                    <meta itemProp="manufacturer" content="Prisma"/>
                    <meta itemProp="weight" content="10G"/>
                    <meta itemProp="width" content="20cm"/>
                    <meta itemProp="height" content="5cm"/>
                  <div class="imagesProduit">
                    <div class="image">
                      <img src="./img/test1.jpg" itemProp="image" alt="Image des montres dans différents coloris">
                      <div class="carrousel">
                       <ul class="miniatures">
                         <li class="previous">
                           <a title="Revoir la précedente vignette" href="javascript:void()"><span class="icon icon-chevron-left-little"></span>Précédent</a>
                         </li>
                         <li>
                           <a href="javascript:void()" title="Voir l'image en grand">
                             <img src="./img/test1.jpg" itemProp="image" alt="Image de la montre fruitz posée et mélangée avec deux autres montres du même type">
                           </a>
                         </li>
                         <li>
                           <a href="javascript:void()" title="Voir l'image en grand">
                             <img src="./img/test1.jpg" itemProp="image" alt="Image de la montre fruitz posée et mélangée avec deux autres montres du même type" >
                           </a>
                         </li>
                         <li>
                           <a href="javascript:void()" title="Voir l'image en grand">
                             <img src="./img/test1.jpg" itemProp="image" alt="Image de la montre fruitz posée et mélangée avec deux autres montres du même type">
                           </a>
                         </li>
                         <li class="next">
                          <a href="javascript:void()" title="Voir la vignette suivante">
                            <span class="icon icon-chevron-right-little">
                              Suivant</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                    <footer class="footerProduit" role="contentinfo">
                      <section class="exerpt">
                        <h4 role="heading" aria-level="4">Description du produit</h4>
                        <p itemProp="description">
                          Le Geo-Scanner BPT 3010 mesure les variations (gradients) du champ magnétique terrestre et de la radioactivité gamma et permet ainsi la détection des anomalies géomagnétiques et radioactives en 3D d'un lieu associées aux maladies dégénératives.
                        </p>
                      </section>
                      <div class="buyContent" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span class="prix" itemProp="price">200€</span>
                        <span class="disponibilite" itemProp="availability">Disponible</span>
                          <meta itemProp="sku" content="10"/>
                        <span class="reference" >Référence: <span itemprop="productID">test4b23</span></span>
                        <div class="panierProduit">
                          <label for="quantite" class="quantite">Quantité:</label>
                          <select name="quantite" id="quantite">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                          <input type="submit"  class="achatProduit" value="ajouter au panier">
                        </div>
                        
                      </div>
                    </footer>
                    <section class="descriptionProduit" role="article">
                      <h1 role="heading" aria-level="1" class="section">Navigation sur différentes informations du produit</h1>
                      <ul class="tab" role="menubar">
                        <li class="active"><a href="javascript:void()" title="Plus d'information sur le produit" id="moreInfo" aria-haspopup="true" aria-controls="moreInfo-m" aria-expanded="true" aria-owns="moreInfo-m">En savoir plus</a></li>
                        <li><a href="javascript:void()" title="Voir les accesoires du produit" id="access" aria-haspopup="true" aria-controls="maccess-m" aria-expanded="false" aria-owns="access-m">Accessoires</a></li>
                      </ul>
                      <div itemprop="description" class="more active" id="moreInfo-m" role="group" aria-expanded="true" aria-hidden="false" aria-labelledby="moreInfo">
                        <p >
                          Le nec plus ultra des instruments de détection en biologie de l'habitat !

                          Le champ magnétique naturel et la radioactivité de la terre est pour l'homme un facteur fondamental dans la régulation des processus biologiques. Il joue un rôle important dans la stimulation et l'équilibre biologique des fonctions métaboliques cellulaires.
                          Toute perturbation de ce champ magnétique naturel homogène peut conduire à court ou à long terme à l'apparition de maladies chez l'individu qui y est soumis.
                          Le Geo-Scanner BPT 3010 mis au poit par le chercheur et génie Ludger Mersmann mesure les variations (gradients) du champ magnétique terrestre et de la radioactivité gamma et permet ainsi la détection des anomalies géomagnétiques et radioactives en 3D d'un lieu associées aux maladies dégénératives.
                        </p>
                        <p>
                          Introduction :
                          L'homme doit être considéré dans son ensemble. Il est absolument en interraction profonde avec son environnement qui peut entrainer la maladie au cours du temps.
                          Dans notre environnement, nous essayons de regarder les causes qui peuvent provoquer la maladie ou les facteurs biophysiques et les détecter plus tard.

                          Depuis quelques années les aspects de la bioconstruction, de la médecine alternative, etc. ont développé leur propre vision de la vie et de la compréhension de l'environnement qu'il est difficile d'imaginer de faire sans lui.

                          Normalement, les approches classiques et les méthodes provenant de la médecine ou de l'écologique et/ou du mode de vie écologique de nos ancêtres soutiennent ces limites qui sont tombées un peu dans l'oubli dans les prétendus temps modernes.

                          Dans une époque dans laquelle de plus en plus début de personnes se tournent vers des méthodes curatives naturelles, il est important de prêter une attention à de bonnes conditions de sommeil et de travail parce que dans les lieux de repos et au travail nous passons la majeure partie de notre vie.

                          Beaucoup de gens sentent un besoin accru de localisation des sources de perturbation influençant fondamentallement notre qualité de vie et de travail d'une manière négative à l'aide de méthodes et d'instruments appropriées. En utilisant les dispositifs de mesure développés par la firme Weis & Partners (Allemagne) et son étroite collaboration avec notre bureau Etudes & Vie (Belgique), les sources de perturbation qui influencent directement votre qualité de vie peuvent être mesurées, quantifiées et démontrées d'une manière fiable et tridimentionnelle. Après cela, tous les résultats et leur interprétation professionnelle vous seront révélés et vous serez capable de minimiser l'impact négatif des facteurs de stress géopathogènes grâce au calcul et à l'instrumentation.
                        </p>
                      </div>
                      <div itemprop="description" class="more" id="access-m" role="group" aria-expanded="false" aria-hidden="true" aria-labelledby="access">
                        <p>
                          Le nec plus ultra des instruments de détection en biologie de l'habitat !

                          Le champ magnétique naturel et la radioactivité de la terre est pour l'homme un facteur fondamental dans la régulation des processus biologiques. Il joue un rôle important dans la stimulation et l'équilibre biologique des fonctions métaboliques cellulaires.
                          Toute perturbation de ce champ magnétique naturel homogène peut conduire à court ou à long terme à l'apparition de maladies chez l'individu qui y est soumis.
                          Le Geo-Scanner BPT 3010 mis au poit par le chercheur et génie Ludger Mersmann mesure les variations (gradients) du champ magnétique terrestre et de la radioactivité gamma et permet ainsi la détection des anomalies géomagnétiques et radioactives en 3D d'un lieu associées aux maladies dégénératives.
                        </p>
                        <p>
                          Introduction :
                          L'homme doit être considéré dans son ensemble. Il est absolument en interraction profonde avec son environnement qui peut entrainer la maladie au cours du temps.
                          Dans notre environnement, nous essayons de regarder les causes qui peuvent provoquer la maladie ou les facteurs biophysiques et les détecter plus tard.

                          Depuis quelques années les aspects de la bioconstruction, de la médecine alternative, etc. ont développé leur propre vision de la vie et de la compréhension de l'environnement qu'il est difficile d'imaginer de faire sans lui.

                          Normalement, les approches classiques et les méthodes provenant de la médecine ou de l'écologique et/ou du mode de vie écologique de nos ancêtres soutiennent ces limites qui sont tombées un peu dans l'oubli dans les prétendus temps modernes.

                          Dans une époque dans laquelle de plus en plus début de personnes se tournent vers des méthodes curatives naturelles, il est important de prêter une attention à de bonnes conditions de sommeil et de travail parce que dans les lieux de repos et au travail nous passons la majeure partie de notre vie.

                          Beaucoup de gens sentent un besoin accru de localisation des sources de perturbation influençant fondamentallement notre qualité de vie et de travail d'une manière négative à l'aide de méthodes et d'instruments appropriées. En utilisant les dispositifs de mesure développés par la firme Weis & Partners (Allemagne) et son étroite collaboration avec notre bureau Etudes & Vie (Belgique), les sources de perturbation qui influencent directement votre qualité de vie peuvent être mesurées, quantifiées et démontrées d'une manière fiable et tridimentionnelle. Après cela, tous les résultats et leur interprétation professionnelle vous seront révélés et vous serez capable de minimiser l'impact négatif des facteurs de stress géopathogènes grâce au calcul et à l'instrumentation.
                        </p>
                      </div>
                    </section>
                  </section>

                </section>
                <?php include('footer.php'); ?>
              </section>

              <?php include('bottom.php'); ?>
