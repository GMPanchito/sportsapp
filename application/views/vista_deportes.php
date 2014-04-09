<!DOCTYPE HTML>
<?	$this->load->helper('url');
	$this->load->view("head");
?>
	<div id="deportes">
		
	 <table	 id="mi_tabla" class="ui padded table segment">
	 		<nav class="ui center aligned purple header">
    		Listado de entrenadores
  			</nav>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Acciones</th>
				</tr>
			</thead>
		<tbody id="cuerpo">
		<? foreach($entrenadores as $ent){ ?>
			<tr>
				<td><?= $ent->nombre?></td>
				<td><?= $ent->direccion?></td>
				<td><?= $ent->telefono?></td>
				<td><?= $ent->email?></td>
				<td><a href="<?=base_url()?>nuevo_ent/<?=md5($ent->identrenadores)?>">Editar</a></td>
			</tr>
		<? } ?>
		</tbody>
	 </table>
	
	 <nav id="menu">
			<a href="<?=base_url()?>nuevo_ent">
			<div class="ui blue labeled icon button"><i class="user icon"></i>Nuevo</div>
			</a>
	</nav>

	<div id="espacio">
		
	</div>

		<div  class="ui pagination menu" id="paginacion">
			<? echo $this->pagination->create_links();?>
		</div>
		
	</div>
		<style>
			body{
				margin:0px;
				font-family: "Roboto";
			}
			body a{
				text-decoration: none;
				font-style: normal; 
			}
			#paginacion a{
				font-size: 14pt;
			}
			#espacio{
				margin-bottom: 15px;
			}
			#deportes{
				padding: 15px 340px;
			}
			#mi_tabla{
				color:black;
				width:100%;
			}
			#mi_tabla tbody{
				color:black;
			}
			#mi_tabla thead tr{
				padding-left: -20px;
			}
			#mi_tabla tbody tr td:last-child{
				color:gray;
			}
			#deportes{
				width:50%;
				float:left;
			}
		</style>
		<script>
		$('#paginacion').delegate('a','click',function(event){
				event.preventDefault();
				var url = $(this).attr('href');
				$.ajax({			
					url:url,
					success:function(respuesta){
						respuesta = $.parseJSON(respuesta);
						var html = "";
						if (respuesta.entrenadores.length) {					
							$.each(respuesta.entrenadores,function(){
								html+= "<tr>";
								html+= "<td>"+this.nombre+"</td>";
								html+= "<td>"+this.direccion+"</td>";
								html+= "<td>"+this.telefono+"</td>";
								html+= "<td>"+this.email+"</td>";
								html+= "<td>"+"<a href="+"<?=base_url()?>nuevo_ent/<?=md5($ent->identrenadores)?>"+">Editar</a>"+"</td>";
								html+= "</tr>";		
							});
						}
						$('#cuerpo').html(html);
						$('#paginacion').html(respuesta.links);
					}
				});				
			});
		</script>
	</body>
</html>