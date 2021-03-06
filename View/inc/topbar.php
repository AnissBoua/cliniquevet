<header>
	<nav class="red darken-4">
		<div class="container">
			<div class="nav-wrapper">

				<a href="<?= ROOT_URL ?>blog_index.html" class="brand-logo">Clinique</a>

				<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

				<ul class="right hide-on-med-and-down">

					<li class="<?php echo ($_GET['a'] == "index") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>blog_index.html">Accueil</a></li>
					<li class="<?php echo ($_GET['a'] == "chapters") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>blog_chapters.html">Animals</a></li>
					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])) : ?>
						<li class="<?php echo ($_GET['a'] == "edit") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>admin_add_post.html">Add animal</a></li>
					<?php endif ?>
					<?php if (!empty($_SESSION['is_admin'])) : ?>
						<li class="<?php echo ($_GET['a'] == "edit") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>admin_edit.html">Edit</a></li>
					<?php endif ?>

					<?php if (empty($_SESSION['is_admin']) && empty($_SESSION['is_user'])) : ?>
						<li><a href="<?= ROOT_URL ?>blog_login.html" class="btn green waves-effect waves-light">Connexion<i class="material-icons right">lock_open</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])) : ?>
						<li><a href="<?= ROOT_URL ?>?p=blog&amp;a=logout" class="btn red darken-1 waves-effect waves-light">Déconnexion<i class="material-icons right">lock_outline</i></a></li>
					<?php endif ?>
				</ul>

				<ul class="side-nav" id="mobile-menu">

					<li class="<?php echo ($_GET['a'] == "index") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>blog_index.html">Accueil</a></li>
					<li class="<?php echo ($_GET['a'] == "chapters") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>blog_chapters.html">Chapitres</a></li>
					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])) : ?>
						<li class="<?php echo ($_GET['a'] == "edit") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>admin_edit.html">Add animal</a></li>
					<?php endif ?>

					<?php if (empty($_SESSION['is_admin']) && empty($_SESSION['is_user'])) : ?>
						<li class="<?php echo ($_GET['a'] == "login") ? "active" : ""; ?>"><a href="<?= ROOT_URL ?>blog_login.html">Connexion</a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])) : ?>
						<li><a href="<?= ROOT_URL ?>?p=blog&amp;a=logout">Déconnexion</a></li>
					<?php endif ?>
				</ul>

			</div>
		</div>
	</nav>
</header>