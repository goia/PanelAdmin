<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Tables</a></li>
			<li><a href="#">Data Tables</a></li>
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
					<i class="fa fa-linux"></i>
					<span>Listado base de datos SQL </span>
				</div>
				<div class="box-icons">
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
			<div class="box-content no-padding table-responsive">
				<table class="table beauty-tabletable-bordered table-striped table-hover table-heading table-datatable" id="datatable-SQL">
					<thead>
						<tr>
							<th><label><input type="text" name="search_rate" value="Id" class="search_init" /></label></th>
							<th><label><input type="text" name="search_name" value="Search distro" class="search_init" /></label></th>
							<th><label><input type="text" name="search_votes" value="Search votes" class="search_init" /></label></th>
							<th><label><input type="text" name="search_homepage" value="Search homepage" class="search_init" /></label></th>
							<th><label><input type="text" name="search_version" value="Search versions" class="search_init" /></label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Ubuntu</td>
							<td>16%</td>
							<td><i class="fa fa-home"></i><a href="http://ubuntu.com" target="_blank">http://ubuntu.com</a></td>
							<td>13.10</td>
						</tr>
						
					</tbody>
					<tfoot>
						<tr>
							<th>Rate</th>
							<th>Distro</th>
							<th>Votes</th>
							<th>Homepage</th>
							<th>Version</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable4();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>

<?php
                    //require ('../assets/conexion.php');
                ?>