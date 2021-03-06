<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="icon" href="<?php echo site_url('assets/images/logo.png')?>"/>
	<?php $this->load->view("include/assets_css");?>
</head>
<body>

	<div class="contenu_global">

		<div id="navigation" class="navigation">
			<?php $this->load->view("include/navbar");?>
		</div>
	
		<div class="topbar">
			<?php $this->load->view("include/topbar");?>
		</div>

		<div class="contenu">
			<div class="p-2">
					<h4 align="center" class="mt-2 mb-3">Commandes<?php echo "<br>(".$titre_tarif['type_redacteur']." - ".$titre_tarif['type_text'].")" ;?></h4>
					<hr>
	      			<form class="container-fluid mt-4" method="post" action="<?php echo site_url('Admin/tarif_commandes/'.$id_tarif);?>">
					    <div class="form-row">
	      					<div class="form-group col-md-2">
							</div>
						    <div class="input-group form-group col-md-8">
						    	Recherche
							    <div class="input-group">     
							      	<input type="text" class="form-control" name="titre_commande" id="titre_commande" placeholder="Titre" aria-label="Titre" aria-describedby="basic-addon1">
							     	<button class="btn btn-outline-light pl-2 pr-2"><i class="fa fa-search" style="color:black;"></i></button>
							    </div>
						    </div>
						    <div class="form-group col-md-2">
							</div>
					    </div>
					</form>

					<form class="container-fluid mt-4" method="post" action="<?php echo site_url('Admin/tarif_commandes/'.$id_tarif);?>">
						<div class="form-row">
							<div class="form-group col-md-2">
							</div>
							<div class="form-group col-md-4">
								Filtrer par
								<select name="filtre" class="form-control">
								    <option value="id_commande">date de commande</option>
								    <option value="id_etat_commande">état de commande</option>
								</select>
							</div>						
							<div class="form-group col-md-4">
								ordre
								<select name="ordre" class="form-control">
								    <option value="desc">Décroissant</option>
								    <option value="asc">Croissant</option>
								</select>
							</div>	
							<div class="form-group col-md-2">
							</div>				
						</div>
						<div class="form-row">
							<div class="form-group col-md-2">
							</div>
							<div class="form-group col-md-2">
								<input type="submit" value="Afficher" name="afficher" class="btn btn-secondary"/>
							</div>
						</div>
					</form>

					<table class="table table-bordered mt-3">
						<thead class="table-secondary">
							<tr>
								<th scope="col" width="150">#</th>
								<th scope="col" width="300">Titre</th>
								<th scope="col" width="300">Rédaction</th>
								<th scope="col" width="150">Commande</th>
								<th scope="col" width="150">Commencement</th>
								<th scope="col" width="150">Livraison</th>
								<th scope="col" width="150">Etat</th>
								<th scope="col" width="150px"></th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=0 ; $i<count($commandes) ; $i++) {?>
							<tr>	
								<th><?php echo $commandes[$i]['id_commande'] ;?></th>
								<td><?php echo $commandes[$i]['titre_commande'] ;?></th>
								<td><?php echo $commandes[$i]['type_redacteur']."<br>".$commandes[$i]['type_text'] ;?></th>
								<td><?php echo $commandes[$i]['date_commande'] ;?></th>
								<td><?php echo $commandes[$i]['date_commencement'] ;?></th>
								<td><?php echo $commandes[$i]['date_livraison'] ;?></td>
								<td><?php echo $commandes[$i]['etat_commande'] ;?></td>
								<td>
									<a href="<?php echo site_url('Admin/details_commande/'.$commandes[$i]['id_commande']);?>" class="btn btn-outline-primary">
										Voir
									</a>
								</td>
							</tr>
							<?php }?>
						</tbody>
					</table>

					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<?php for($e=1 ; $e<=$nb_pages ; $e++) {?>	
							<li class="page-item"><a class="page-link" href="<?php echo site_url('Admin/tarif_commandes/'.$id_tarif.'/'.$e);?>"><?php echo $e; ?></a></li>
							<?php }?>
						</ul>
					</nav>

				</fieldset>	
			</div>
		</div>

		<div class="scroll_top bg-dark">
			<a class="nav-link text-white" onclick="scroll_top('navigation')">
            	<i class="fa fa-angle-double-up fa-2x"></i>
			</a>
		</div>
		
	</div>
</body>
<?php $this->load->view("include/assets_js");?>
</html>