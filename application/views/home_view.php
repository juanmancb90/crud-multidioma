<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=lang('idioma.bienvenido')?></title>
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
				<h2><?=lang('home.titulo_form') ?></h2>
				<br>
				<?=$cambia_idioma?>
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
					<?=form_open(site_url('home/insertar', $frmatr))?>
					<div class="form-group">
						<?=form_label(lang('home.label_titulo'))?>
						<input type="text" class="form-control" name="<?=lang('home.input_titulo')?>" />
					</div>
					<div class="form-group">
						<?=form_label(lang('home.label_descripcion'))?>
					<textarea class="form-control" row="2" name="<?=lang('home.textarea_descripcion')?>"></textarea>
					</div>
					<div class="form-group">
						<?=form_label()?>
						<input type="submit" class="btn btn-primary" value="<?=lang('home.boton_enviar')?>">
						<input type="hidden" id="idioma" name="idioma" value="<?=$this->uri->segment(1)?>" />

					</div>
					
					<?=form_close()?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
		      	<div class="col-xs-12">
			        <div class="list-group">
			         	 <input type="button" id="btn_listar" name="btn_listar" class="btn btn-info" value="<?=lang('home.boton_listar') ?>" />
			        </div>
		     	 </div>
	    	</div>
		</div>
</body>
</html>
