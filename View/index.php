<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<main>
  <div class="container">
    <?php if (empty($this->idAnimal)) : ?>
      <h1>To see your animals you have to login.</h1>
      <p><button type="button" onclick="window.location='<?= ROOT_URL ?>admin_add.html'" class="btn waves-effect waves-light">Ajoutez votre premier article!</button></p>
    <?php else : ?>
      <h1 class="page-title">Clinique veterinarian</h1>
      <div class="row">
        <!-- <?php
        foreach ($this->idAnimal as $idAnimal) : ?>
          <div class="card hoverable grey darken-3">
            <div class="card-content">
              <h5 class=" text-darken-2"><?= htmlspecialchars($idAnimal->animalname) ?></h5>
              <h6 class="grey-text">Born the <?= date('d/m/Y', strtotime($idAnimal->birthdate)); ?></h6>
            </div>

            <div class="card-image waves-effect waves-block waves-light">
              <img src="<?= ROOT_URL ?>static/img/posts/<?= $idAnimal->image ?>" class="activator" alt="<?= $idAnimal->animalname ?>">
            </div>
          </div>
        <?php endforeach ?> -->
        <!-- ARTICLES-->
        <?php foreach ($this->idAnimal as $key => $idAnimal) : ?>
          <?php if ($key == 0) : ?>
            <div class="col l12 m6 s12">
              <div class="blog_articles card hoverable">
                <div class="card-content">
                  <h5><a class=" text-darken-2" href="<?= ROOT_URL ?>blog_post_<?= $idAnimal->id ?>.html"><?= htmlspecialchars($idAnimal->animalname) ?></a></h5>
                  <h6 class="grey-text">Born the <?= date('d/m/Y', strtotime($idAnimal->birthdate)); ?></h6>
                </div>
                <div class="card-image waves-effect waves-block waves-light">
                  <img src="<?= ROOT_URL ?>static/img/posts/<?= $idAnimal->image ?>" class="activator" alt="<?= $idAnimal->animalname ?>">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                  <p><a href="<?= ROOT_URL ?>blog_post_<?= $idAnimal->id ?>.html">Voir le chapitre au complet</a></p>
                </div>
              </div>
            </div>
          <?php else : ?>
            <div class="col l6 m6 s12">
              <div class="blog_articles card hoverable">
                <div class="card-content">
                  <h5><a class=" text-darken-2" href="<?= ROOT_URL ?>blog_post_<?= $idAnimal->id ?>.html"><?= htmlspecialchars($idAnimal->animalname) ?></a></h5>
                  <h6 class="grey-text">Born the <?= date('d/m/Y', strtotime($idAnimal->birthdate)); ?></h6>
                </div>
                <div class="card-image waves-effect waves-block waves-light">
                  <img src="<?= ROOT_URL ?>static/img/posts/<?= $idAnimal->image ?>" class="activator" alt="<?= $idAnimal->animalname ?>">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                  <p><a href="<?= ROOT_URL ?>blog_post_<?= $idAnimal->id ?>.html">Voir le chapitre au complet</a></p>
                </div>
              </div>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      </div>
  </div>
</main>
<?php endif ?>
<?php require 'inc/footer.php' ?>