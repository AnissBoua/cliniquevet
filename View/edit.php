<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<div class="container">
  <?php if (empty($this->idAnimal)) : ?>
    <h1>You didn't added any animal yet.</h1>
    <p><button type="button" onclick="window.location='<?= ROOT_URL ?>admin_add.html'" class="btn waves-effect waves-light">Add your first animal!</button></p>
  <?php else : ?>
    <h1>Your animals</h1>
    <a href="<?= ROOT_URL ?>admin_add.html"><button class="btn blue darken-3 waves-effect waves-light">Add an animal</button></a>
    <br>
    <br>
    <hr>

    <table class="striped">
      <thead>
        <tr>
          <th>Titre</th>
          <th>Date</th>
          <th>Owner</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($this->idAnimal as $idAnimal) : ?>
          <tr>
            <td><?= $idAnimal->animalname ?></td>
            <td>Born the <?= date('d/m/Y', strtotime($idAnimal->birthdate)); ?></td>
            <td><?= $idAnimal->idowner ?></td>
            <td>
              <?php require 'inc/control_buttons.php' ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
</div>
<?php endif ?>