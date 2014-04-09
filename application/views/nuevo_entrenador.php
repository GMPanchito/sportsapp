<?$this->load->view('head');
?>
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('/nuevo_ent'); ?>
		<div id="frm_entrenadores" class="ui form segment">
			<form action="" id="form_entrenadores" method="POST" enctype="multipart/form-data" onsubmit="return true">
		<div class="five fields">

			<div class="field">
				<label for="nombre">Nombre:</label>
				<input type="text" placeholder="Nombre" name="nombre" id="nombre" title="Nombre" value="<?=(isset($entrenadores))?$entrenadores->nombre:''?>"/>
			</div>
			
			<div class="field">
				<label for="direccion">Dirección:</label>
				<input type="text" placeholder="Dirección" name="direccion" id="direccion" title="Direccion" value="<?=(isset($entrenadores))?$entrenadores->direccion:''?>"/>
			</div>

			<div class="field">
				<label for="telefono">Teléfono:</label>
				<input type="text" placeholder="Teléfono" name="telefono" id="telefono" title="Telefono" value="<?=(isset($entrenadores))?$entrenadores->telefono:''?>"/>
			</div>
			
			<div class="field">
				<label for="email">Email:</label>
				<input type="text" placeholder="Email" name="email" id="email" title="Email" value="<?=(isset($entrenadores))?$entrenadores->email:''?>"/>
			</div>
		</div>
			<button class="ui blue submit button">Guardar</button>
		</form>
		</div>
</body>
<style>
		body{
				font-family: "Roboto";
			}
		input{
			font-size:14pt;
		}
		
		div label {
			display:block;
			margin-top:5px;
		}
		
		div input,
		div select{
			padding:5px;
			width:250px;
			min-width:250px;
			max-width:250px;
		}
		
		button{
			padding: 5px 10px;
		}
		
		 img{
			width: 300px; 
			height: 200px;
		}			
	</style>
</html>

