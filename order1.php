<div class="order1">
	<p>Résumé de votre commande</p>
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
	<a href="order2.php" class="btn commander">Passer Commande <span class="icon icon-chevron-right-little-white"></span>	</a>
	<a href="index.php" class="btn continuer">Continuer mes achats</a>
	

</div>