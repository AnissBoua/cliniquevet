<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>
<main>
	<div class="container">
		<h1 class="page-title">List of animals</h1>
		<a href="<?= ROOT_URL ?>admin_add.html"><button class="btn blue darken-3 waves-effect waves-light">Add an animal</button></a>
		<?php if (!empty($this->idAnimal)) : ?>
		<?php foreach ($this->idAnimal as $idAnimal) : ?>
			<div class="row">
				<hr>
				<div class="col s12 m12 l12">
					<h4><?= $idAnimal->animalname ?></h4>
					<div class="row">
						<div class="col s12 m6 l8">
							<!-- On affiche les 1200 premiers caractères et on affiche pas les images -->
							<h6 class="grey-text">Born the <?= date('d/m/Y', strtotime($idAnimal->birthdate)); ?></h6>

							<br><br>
							<?php require 'inc/control_buttons.php' ?>
						</div>
						<div class="col s12 m6 l4">
							<img src="<?= ROOT_URL ?>static/img/posts/<?= $idAnimal->image ?>" class="materialboxed responsive-img" alt="<?= $idAnimal->animalname ?>" />
							<br /><br />
							<!--<a class="btn blue darken-3 waves-effect waves-light" href="<?= ROOT_URL ?>blog_post_<?= $idAnimal->id ?>.html">Lire le chapitre</a>-->
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		<?php endif ?>
	</div>
</main>
<?php require 'inc/footer.php' ?>