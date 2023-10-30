<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div id="container">
		<h1>Dunno man it kinda worked</h1>
	</div>
	
	<?=form_open() ?>
		<?php if($this->session->flashdata('success')) : ?>
			<?= $this->session->flashdata('success')?>
        <?php endif;?>
		<?php if($this->session->flashdata('failed')) :?>
			<? $this->session->flashdata('failed')?>
        <?php endif;?>
		<?php if(validation_errors()) : ?>
			<?= validation_errors()?>
        <?php endif;?>
		<input type="text" name="name">
		<input type="text" name="password">
		<button type ="submit">Add</button>
	</form>
</body>
</html>
