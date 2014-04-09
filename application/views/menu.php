<? $this->load->view("head")?>
    <style>
        #side{
        background-color:black;
        }
    </style>

<div class="ui sidebar" id="side"><div class="ui vertical menu">
  <a class="active teal item" href="<?=base_url()?>index.php/cargar_entrenadores/">
    Ir A Tabla
    <div class="ui teal label"></div>
  </a>
  
</div>

<div class="ui vertical pointing menu">
  <a class="active item">
    <i class="home icon"></i> Home
  </a>
  <a class="item">
    <i class="mail icon"></i> Messages
  </a>
  <a class="item">
    <i class="user icon"></i> Friends
  </a>
</div>

<div class="ui vertical menu">
  <div class="header item">
    <i class="user icon"></i>
    Communities
  </div>
  <div class="item">
    College
    <div class="menu">
      <a class="item">Baseball</a>
      <a class="item">Basketball</a>
      <a class="item">Golf</a>
    </div>
  </div>
</div>

</div>
<button class="ui button" id="btn">Mostrar</button>


<script>
			$('.sidebar').sidebar('attach events','#btn');
</script>

<style>
  #login{
    text-decoration: none;
    color: white;
  }
</style>
</body>

</html>