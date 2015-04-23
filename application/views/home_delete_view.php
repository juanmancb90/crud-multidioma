<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=lang('home.titulo_eliminar')?></title>
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
		<h1><?=lang('home.titulo_eliminar')?></h1>
		<div class="col-xs-12">
			<p><?=lang('home.info_delete') ?>: <b><?php echo $datos[0]->title; ?></b></p>
			<form role="form" method="POST" action="<?=site_url('home/delete')?>">
				<div class="form-group">
					<label for="titulo">ID: </label>
					<input type="text" class="form-control" value="<?=@$datos[0]->id_gift ?>" name="id" id="id" readonly />
				</div>
				<div class="form-group">
					<label for="descripcion"><?=lang('home.label_descripcion') ?></label>
					<textarea class="form-control" row="2" name="<?=lang('home.textarea_descripcion')?>" disabled><?=@$datos[0]->description ?></textarea>
				</div>
				<div class="form-group">
					<?=form_label()?>
					<input type="submit" class="btn btn-warning" value="<?=lang('home.boton_eliminar')?>">
					<input type="hidden" id="idioma" name="idioma" value="<?=$this->uri->segment(1)?>" />
				</div>
			</form>	
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="list-group"`>
	         <a class="btn btn-info" href="<?php echo base_url() ?>"><?=lang('home.boton_home') ?></a>
			</div>
		</div>
	</div>
	
</div>

</body>
</html>
