<?php
foreach ($grocery_crud->css_files as $file):
?>
   <link type="text/css" rel="stylesheet" href="<?=$file;?>" />
<?php endforeach; ?>
<?php
	foreach ($grocery_crud->js_files as $file):
?>
   <script src="<?=$file;?>"></script>
<?php endforeach; ?>
	<div class="mws-panel grid_8 mws-collapsible">
		<div class="mws-panel-header">
			<span><i class="icon-add-contact"></i> FORMULARIO DE USUARIOS</span>
		</div>
		<div class="mws-panel-body no-padding">
		<?php
			echo $grocery_crud->output;
		?>
		</div>
	</div>
