<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=lang('home.titulo_lista')?></title>
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
			<h1><?=lang('home.titulo_lista')?></h1>
			<div id="col-xs-12">
				<p>
					<?php if(empty($resultado)) { ?>
						<h1><?=lang('home.titulo_info') ?></h1> 
					<?php } else { ?>
						<table class="table table-striped table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th>ID</th>
									<th><?=lang('home.label_titulo') ?></th>
									<th><?=lang('home.label_descripcion') ?></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($resultado as $data => $value) { ?>
								<tr>
									<td><?php echo $value->id_gift; ?></td>
									<td><?php echo $value->title; ?></td>
									<td><?php echo $value->description; ?></td>
									<td>
										<a class="btn btn-primary btn-sm"href="<?php echo base_url() ?><?=$this->uri->segment(1) ?>/home/editar/<?php echo $value->id_gift ?>/<?=$this->uri->segment(1) ?>" ><?=lang('home.titulo_editar') ?></a>
										<a class="btn btn-danger btn-sm"href="<?php echo base_url() ?><?=$this->uri->segment(1) ?>/home/eliminar/<?php echo $value->id_gift ?>/<?=$this->uri->segment(1) ?>" ><?=lang('home.titulo_eliminar') ?></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>	
					<?php }?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a class="btn btn-info" href="<?php echo base_url() ?>"><?=lang('home.boton_home') ?></a>
			</div>
		</div>
	</div>
</body>
</html>