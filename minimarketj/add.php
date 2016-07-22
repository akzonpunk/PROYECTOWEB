<h2>Agregar nuevo producto</h2>
<div class="panel panel-default">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm">
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" placeholder="Introduce  Nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label>descripcion</label>
      <input type="text" class="form-control" placeholder="descripcion" name="descripcion">
    </div>
    <div class="form-group">
      <label>precio</label>
      <input type="number" class="form-control" placeholder="precio" name="precio">
    </div>
    <div class="form-group">
      <label>codigo</label>
      <input type="number" class="form-control" placeholder="codigo" name="codigo">
    </div>
    <div class="form-group">
      <label>envase</label>
      <input type="text" class="form-control" placeholder="envase" name="envase">
    </div>
    
    <div class="form-group">
      <label>tipo de producto</label>
      <select name="tipo" class="form-c
    $('#formulario').slideUp('slow');
  });ontrol">
        <option value="bebidas">bebidas</option>
        <option value="plastificados">plastificados</option>
        <option value="comestibles">comestibles</option>
        <option value="Otro">Otro</option>
      </select>
    </div>
    <input type="hidden" name="opt" value="add">
    <button type="button" class="btn btn-success" id="guardar">Guardar</button>
    <button type="button" class="btn btn-default" id="cerrar">Cerrar</button>
</form>
  </div>
</div>

<br>
<script>
  $('#cerrar').click(function(){

  $('#guardar').click(function(){
      $.post("crud.php", $("#frm").serialize(),function(data){
        $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
        $('#formulario').slideUp('slow');
        $('#listar').load("list.php").fadeIn('slow');
      });
  });
</script>