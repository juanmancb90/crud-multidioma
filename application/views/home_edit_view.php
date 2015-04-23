<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=lang('home.titulo_editar') ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><?=lang('home.bienvenido')?></h1>
			</div>
		
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2><?=lang('home.titulo_editar') ?></h2>
				<br>
				<!--mostramos los errores si es que los hay al procesar el formulario-->
				<?= validation_errors(); ?>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
					$frmatr = array('role' => 'form',);
					?>
					<?=form_open(site_url('home/edit', $frmatr))?>
					<div class="form-group">
						<label for="id">ID:</label>
						<input type="text" class="form-control" value="<?=@$datos[0]->id_gift ?>" name="id" readonly />
					</div>
					<div class="form-group">
						<?=form_label(lang('home.label_titulo'))?>
						<input type="text" class="form-control" value="<?=@$datos[0]->title ?>" name="<?=lang('home.input_titulo')?>" />
					</div>
					<div class="form-group">
						<?=form_label(lang('home.label_descripcion'))?>
					<textarea class="form-control" row="2" name="<?=lang('home.textarea_descripcion')?>"><?=@$datos[0]->description ?></textarea>
					</div>
					<div class="form-group">
						<?=form_label()?>
						<input type="submit" class="btn btn-primary" value="<?=lang('home.boton_editar')?>">
						<input type="hidden" id="idioma" name="idioma" value="<?=$this->uri->segment(1)?>" />
					</div>
					
					<?=form_close()?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a class="btn btn-info" href="<?php echo base_url() ?>"><?=lang('home.boton_home') ?></a>
				</div>
			</div>
		</div>
		
</body>
</html>
