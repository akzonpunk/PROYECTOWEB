<?php  
  mysql_connect('localhost','root','');
  mysql_select_db("minimarketj");
  $id=$_REQUEST['id'];
  $sql=mysql_query("SELECT * FROM producto WHERE id=$id");
  $rs=mysql_fetch_array($sql);
?>
<h2>Actualizar producto</h2>
<div class="panel panel-default">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm">
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?=$rs['nombre']?>">
    </div>
    <div class="form-group">
      <label>descripcion</label>
      <input type="text" class="form-control" name="descripcion" value="<?=$rs['descripcion']?>">
    </div>
    <div class="form-group">
      <label>precio</label>
      <input type="number" class="form-control" name="precio" value="<?=$rs['precio']?>">
    </div>
    <div class="form-group">
      <label>codigo</label>
      <input type="number" class="form-control" name="codigo" value="<?=$rs['codigo']?>">
    </div>
    <div class="form-group">
      <label>envase</label>
      <input type="text" class="form-control" name="envase" value="<?=$rs['envase']?>">
    </div>
    <div class="form-group">
      <label>marca</label>
      <input type="text" class="form-control" name="marca" value="<?=$rs['marca']?>">
    </div>
    
    
    <div class="form-group">
      <label>tipo de producto</label>
      <select name="tipo" class="form-control">
        <option value="bebidas" <?=($rs['tipo']=='bebidas')?'selected':''?>>bebidas</option>
        <option value="plastificados" <?=($rs['tipo']=='plastificados')?'selected':''?>>plastificados</option>
        <option value="comestibles" <?=($rs['tipo']=='comestibles')?'selected':''?>>comestibles</option>
        <option value="otro" <?=($rs['tipo']=='otro')?'selected':''?>>otro</option>
        
      </select>
    </div>
    <input type="hidden" name="opt" value="edit">
    <input type="hidden" name="id" value="<?=$id?>">
    <button type="button" class="btn btn-success" id="guardar">Actualizar</button>
    <button type="button" class="btn btn-default" id="cerrar">Cerrar</button>
</form>
  </div>
</div>

<br>
<script>
  $('#cerrar').click(function(){
    $('#formulario').slideUp('slow');
  });
  $('#guardar').click(function(){
    $.post( "crud.php", $("#frm").serialize(),function(data){
      $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
      $('#formulario').slideUp('slow');
      $('#listar').load("list.php").fadeIn('slow');
    });
  });
</script>