<div class="row">
    <div id="breadcrumb" class="col-xs-12">
        <a href="#" class="show-sidebar">
            <i class="fa fa-bars"></i>
        </a>
        <ol class="breadcrumb pull-left">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="#">Páginas</a></li>
            <li><a href="#">Pruebas</a></li>
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

            <code>jk
                <?php
                    require ('../assets/conexion.php');
                ?>
                abajo
            </code>
        </div>
    </div>

</div>

<script type="text/javascript">
    // Run Select2 on element
    function Select2Test() {
        $("#el2").select2();
    }
    $(document).ready(function() {
        // Load script of Select2 and run this
        LoadSelect2Script(Select2Test);
        WinMove();
    });
</script>