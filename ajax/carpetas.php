<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="#">Páginas</a></li>
			<li><a href="#">Carpetas</a></li>
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
<div class="well">
	<p class="lead">Páginas de ejemplo de carpetas</p>
	<h3 id="grid-options">EN PRUEBAS</h3>
	<div class="row show-grid-forms">
		<div class="col-sm-12">
			<div id="mainCar" style="float:left">
                <a href="datos.php"name='datos'>
                    <div class="folder">
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>​
                </a>
            </div>
            <div id="mainCar"  style="float:left">
                <a href="datos.php"name='datos'name = "texto">
                    <div class="folder2"><h1>Resumen</h1>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>​
                </a>
            </div>
            <div id="mainCar"  style="float:left">
                <a href="datos.php"name='datos'>
                    <div class="folder3">
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>​
                </a>
            </div>       
           
<script type="text/javascript">
        $(function() {

            var folder = $("#main .folder"),
                front = folder.find('.front'),
                img = $("#main img"),
                droppedCount = 0;
           
            
        img.draggable();

        folder.droppable({
                drop : function(event, ui) {

                        // Remove the dragged icon
                        ui.draggable.remove();

                        // update the counters
                        front.text(++droppedCount);

                },

                activate : function(){
                        // When the user starts draggin an icon
                        folder.addClass('open');
                },

                deactivate : function(){
                        // Close the folder
                        folder.removeClass('open');
                }
        });
             
});
        </script>
		</div>
	</div>
	
</div>

<script type="text/javascript">
// Run Select2 on element
function Select2Test(){
	$("#el2").select2();
}
$(document).ready(function() {
	// Load script of Select2 and run this
	LoadSelect2Script(Select2Test);
	WinMove();
});
</script>
