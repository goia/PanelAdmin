<script type="text/javascript" language="javascript">
 
    
$(document).ready(function() {
 var oTable = $('#tablaEnlaces').dataTable({

       "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "./TableTools/swf/copy_csv_xls_pdf.swf"
        },  
     
        "ajax": "./ajax/partes.php",
	    "sPaginationType": "full_numbers",
    	"oLanguage": {
      	"sEmptyTable": "No hay datos",//tabla vacia
	      "sInfo": "Mostrando  (_START_ - _END_) de _TOTAL_ registros",
        "sLengthMenu": 'Mostrar <select>'+
        '<option value="10">10</option>'+
        '<option value="20">20</option>'+
        '<option value="30">30</option>'+
        '<option value="40">40</option>'+
        '<option value="50">50</option>'+
        '<option value="-1">Todo</option>'+
        '</select> registros',
	      "sLoadingRecords": "Espere un momento, cargando...",
	      "sSearch": "Buscar:",
	      "sZeroRecords": "No hay datos con esa busqueda",
      	 "oPaginate": {
         "sFirst": "Primero",
	       "sLast": "Ultimo",
	       "sNext": "Siguiente",
	       "sPrevious": "Anterior",
      	}
    	},     

	});
    
 
    $('#tablaEnlaces tbody').on('click', 'tr', function () {
        var descripcion = $('td', this).eq(5).text();
        alert( 'Descripcion '+ descripcion +'\'' );
    } );
} );
    
 $(document).ready(function() {
    var table = $('#tablaEnlaces').DataTable();
 
    $("#tablaEnlaces tfoot th").each( function ( i ) {
        var select = $('<select><option value=""></option></select>')
            .appendTo( $(this).empty() )
            .on( 'change', function () {
                table.column( i )
                    .search( $(this).val() )
                    .draw();
            } );
 
        table.column( i ).data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
    } );
} );

 </script>    
 
<!------------------------------------------------------------------------------------------------------------------------->
<div class="partes">
    <table id="create_table" cellSpacing="0" cellPadding="0" width="960" align="center" summary ="datos empresas">
         <tr height="40">
				<td class="nombre_formulario">Empresa :</td>
				<td class="campo_formulario">
<!--				
                    <select name="empresa" onChange="cambiaReferencia(this.value)" style="text-align: center;width:200px;height: 30px">
						<option value="*" >--- Seleccione Una ---</option>
					
                    <?php
/*
						$sql = "select * FROM empresa ORDER BY nombre ";
						$result = $db->query($sql);			
						

									while(($row = $db->fetch_array($result))){
										if ($row['id_categoria']==$id_categoria){
											echo "<option value='". $row['nombre'] ."' selected>". $row['nombre'] ."</option>";
										}else{
											echo "<option value='". $row['nombre'] ."'>". $row['nombre'] ."</option>";
										}
									}
/*
						while(($row = $db->fetch_array($result))){
                            echo "<option value='". $row['id_categoria']. $row['nombre'] ."'>". $row['nombre'] ."</option>";
						}*/
					?>
					</select>
-->
				</td>
			</tr>	
        
    </table>
 
							
<!--
    <a href="./nuevoEnlace.php" class="create">Nuevo</a>
-->
<table id="tablaEnlaces" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Empresa visitada</th>
                <th>Hora de inicio</th>
                <th>Hora finalizacion</th>
                <th>Tiempo trabajado</th>
                <th>Caracteristicas</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Empresa</th>
                <th>Empresa visitada</th>
            </tr>
        </tfoot>
    </table>