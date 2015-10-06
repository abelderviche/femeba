<?php
$this->load->view('vwHeader');
?>
<style type="text/css">
    table.dataTable tbody td {
 padding: 8px 5px; 
}
select{
  display: block;
}
</style>
<link rel="stylesheet" href="<?php echo HTTP_CSS_PATH; ?>datatables.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo HTTP_JS_PATH; ?>chosen/chosen.css" type="text/css" />

  <div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row left">
         <h5 class="header col s12 black-text">Cartilla</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?=HTTP_IMAGES_PATH;?>asesor.jpg"></div>
  </div>

<div class="container" style="width:90%; padding-top:10px;">


Buscar por especialidad:
<select data-placeholder="Choose a Country..." class="chosen-select" id="especialidad" >
  <option value="">Todos</option>
  <?php foreach ($especialidades as $key => $value) { ?>
    <option value="<?=$value['especialidad'];?>"><?=$value['especialidad'];?></option>
    <?php } ?>
</select>
<table class="striped" id="table"  >
    <thead>
          <tr>
              <th style="width:25%" data-field="nombre">Nombre</th>
              <th style="width:25%" data-field="especialidad">Especialidad</th>
              <th data-field="direccion">Direcci&oacute;n</th>
              <th data-field="ciudad">Ciudad</th>
              <th data-field="telefono">Telefono</th>
          </tr>
    </thead>

    <tbody>
        <?php foreach ($cartilla as $key => $value) { ?>
          <tr style="max-height:30px;">
            <td style="text-transform:lowercase;"><?=$value['nombre'];?></td>
            <td><?=$value['especialidad'];?></td>
            <td style="text-transform:lowercase;"><?=$value['direccion'];?></td>
            <td><?=$value['ciudad'];?></td>
            <td><?=$value['telefono'];?></td>
          </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<?php
$this->load->view('vwFooter');
?>
<script src="<?php echo HTTP_JS_PATH; ?>datatables.min.js"></script>
<script src="<?php echo HTTP_JS_PATH; ?>chosen/chosen.jquery.js"></script>
<script>
  $(document).ready(function() {

    var oTable = $('#table').dataTable({
      "oLanguage" : {
          "sLengthMenu" : "Mostrar _MENU_",
          "sZeroRecords" : "No hay doctores con ese filtro",
          "sInfo" : "Mostrando _START_ a _END_ de _TOTAL_ ",
          "sInfoEmpty" : "Mostrando 0 a 0 de 0 usuarios",
          "sInfoFiltered" : "(filtrados de _MAX_ totales)",
          "oPaginate" : {
            "sNext" : "Siguiente",
            "sLast" : "Ultima p&aacute;gina",
            "sFirst" : "Primer p&aacute;gina",
            "sPrevious" : "Previo"
          },
          "sSearch" : "Buscar:"
        }
    });

    $('select#especialidad').change( function() { oTable.fnFilter( $(this).val() ); } );

    $('.chosen-select').chosen({width: "95%"}); 
} );
</script>