<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Tables</a></li>
			<li><a href="#">Beauty Tables</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-table"></i>
					<span>Listado clientes</span>
				</div>
				<div class="box-icons">
					<a class="beauty-table-to-json">
						COFIS
					</a>
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<!--<h4>This is table with hidden inputs in cell's and keyboard navigation in table, see below</h4>
				<ol>
					<li><kbd>SHIFT</kbd>+<kbd>arrow key</kbd>-Prev(Next) cell at row/col</li>
					<li><kbd>CTRL</kbd>+<kbd>arrow key</kbd>-First(End) cell at row/col</li>
					<li><kbd>PgUp/PgDown</kbd>-First(End) cell in table</li>
					<li><kbd>Enter/Tab</kbd>-Next cell in table</li>
					<li>Press link Table to JSON in box header and see result</li>
				</ol>
				<p>For basic styling add the base class <code>.beauty-table</code> to <code>&lt;table&gt;</code>.
				</p>-->
				<table class="table beauty-tables table-hover">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>Rank</th>
							<th>Mobile OS</th>
							<th>Home page</th>
							<th>First Release</th>
							<th>Last versions</th>
							<th>Base kernel</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Android</td>
							<td><input type="text" value="1"></td>
							<td><input type="text" value="46.6%"></td>
							<td><input type="text" value="http://android.com"></td>
							<td><input type="text" value="23/09/2008"></td>
							<td><input type="text" value="4.2.2"></td>
							<td><input type="text" value="linux"></td>
						</tr>

					</tbody>
				</table>
				<table class="table beauty-table table-hover">
				<thead>
                    <tr>
                       <th>&nbsp;</th>
                        <th>Empresa</th>
                        <th>Empresa visitada</th>
                        <th>Hora de inicio</th>
                        <th>Hora finalizacion</th>
                        <th>Tiempo trabajado</th>
                        <th>Caracteristicas</th>
                    </tr>
                </thead>
					<!---<tbody>
						<tr>
							<td>Android</td>
							<td><input type="text" value="1"></td>
							<td><input type="text" value="46.6%"></td>
							<td><input type="text" value="http://android.com"></td>
							<td><input type="text" value="23/09/2008"></td>
							<td><input type="text" value="4.2.2"></td>
							<td><input type="text" value="linux"></td>
						</tr>

					</tbody>-->
				</table>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	// Run beauty tables plugin on every table with class .beauty-table
	 var oTable = $('.beauty-table').dataTable({

       "dom": 'T<"clear">lfrtip',
        //"tableTools": {
          //  "sSwfPath": "./TableTools/swf/copy_csv_xls_pdf.swf"
        //},  
     
        "ajax": "listados/Liscofis.php",
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
    $('.beauty-table').each(function(){
		// Run keyboard navigation in table
		$(this).beautyTables();
		// Nice CSS-hover row and col for current cell
		$(this).beautyHover();
	});
	// Attach to click action for create JSON data from tables.
	$('.beauty-table-to-json').on('click', function(e){
		e.preventDefault();
		var table = $(this).closest('.box').find('table');
		Table2Json(table);
	});
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
