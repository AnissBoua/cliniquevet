<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<div class="container">
  <h1>Add an animal</h1>
  <?php require 'inc/msg.php' ?>
  <form method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="input-field col s12">
			<input type="text" name="animalname" id="animalname" required="required">
			<label for="animalname">Animal name</label><!-- changed from article title to animal name -->
		</div>
		
		<div class=" col s12">
			<label for="birthdate">Animal birth date</label>
			<input type="date" name="birthdate" id="birthdate" placeholder="">
		</div>

		<div class="col s12">
			<div class="input-field file-field">
				<div class="btn">
					<span>Animal photo</span>
					<input type="file" name="image">
				</div>
				<div class="file-path-wrapper">
					<input type="text" class="file-path validate" readonly>
				</div>
			</div>
		</div>

		<div class="col s12 right-align">
			<br><br>
			<button class="btn waves-effect waves-light" type="submit" name="add_submit">Add animal</button> <!-- submit button to send to animal table-->
		</div>

	</div>
</form>
</div>
