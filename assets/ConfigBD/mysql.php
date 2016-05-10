<?php
class MySQL5 {
    var $db_host;
    var $db_user;
    var $db_pwd;
    var $db_name;
    var $queries = 0;
    var $connections = 0;
    var $link;
    

		
    function set($db_host, $db_user, $db_pwd, $db_name)
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_name = $db_name;
    }

    function connect()
    {
	//ini_set('mysqli.default_socket', 'tmp/mysql5.sock'); //Habilitar para 1&1
	ini_set('mysqli.default_socket','');		       //Deshabilitar para 1&1
		// connect to mysql
        $this->link = mysqli_connect($this->db_host, $this->db_user, $this->db_pwd, $this->db_name)
        or die("Could not connect to mysql server: " . mysqli_connect_error());
       $this->connections++;
	   $this->query('SET NAMES utf8');
        // return $db_link for other functions
        // return $link;
    }

    function query($sql)
    {
        //echo $sql . "<br>";
        if (!isset($this->link)) {
            $this->connect();
        }
        $result = mysqli_query($this->link, $sql)
        or die("Invalid query: " . mysqli_connect_error()."<br>SQL".$sql);
        // used for other functions
        $this->queries++;
        return $result;
    }

    function fetch_array($result)
    {
        // create an array called $row
        $row = mysqli_fetch_array($result);
        // return the array $row or false if none found
        return $row;
    }

    function num_rows($result)
    {
        // determine row count
        $num_rows = mysqli_num_rows($result);
        // return the row count or false if none foune
        return $num_rows;
    }

    function insert_id()
    {
        // connect to the database
        // $link = $this->connect();
        // Get the ID generated from the previous INSERT operation
        $last_id = mysqli_insert_id($this->link);
        // return last ID
        return $last_id;
    }

    function num_fields($result)
    {
        $result = mysqli_num_fields($result);
        return $result;
    }
	
    function fetch_assoc($result)
    {
        // create an array called $row
        $row = mysqli_fetch_assoc($result);
        // return the array $row or false if none found
        return $row;
    }	
    const 		_TOKEN_KEY					= 'date("Y-m-d H:i:s", $_SERVER["REQUEST_TIME"]);';
		var			$_ENCODED_TOKEN				= "";			// Contiene el útimo token generado.
		
		var 		$_IGNORE_ERRORS				= '1062';		// Lista de Nº de error de MySQL separados por coma que se manejarán de manera especial. Para manejar los errores consultar la página http://dev.mysql.com/doc/refman/5.0/es/error-handling.html
		var 		$_WARNING_COLOR 			= 'orange';		// Color de los errores de tipo WARNING
		var 		$_ERROR_COLOR 				= 'red';		// Color de los errores de tipo ERROR
		var 		$_SHOW_WARNING_ERROR 		= true;			// Si esta establecida a TRUE se muestran los mensajes WARNING.
		var			$_SHOW_IGNORED_ERRORS		= false;		// Si está a FALSE No se mostrarán los mensajes ignorados. Si está establecido a TRUE se mostrarán por pantalla al igual que los demás.
		var			$_SHOW_CONTROL_MESSAGES		= true;			// Si esta establecida a TRUE se muestran los mensajes de ERROR.
		var 		$_STOP_WARNING_ERROR	 	= false;		// Para la ejecución de la página si está establecida a TRUE.
		
		const 		_SEPARADOR_SQL 			= ";\n";			// Separador para la ejecución de múltiples sentencias. Se separan por este valor y luego se ejecutan una a una.
		var 		$_FORMAT_DATETIME_DB	= "Y-m-d H:i:s";	// Formato de fecha que tiene configurada la BBDD. Por defecto configurada a FORMATO AMERICANO 1970-01-01 01:00:00.
		var 		$_FORMAT_DATE_DB 		= "Y-m-d";			// Formato de fecha que tiene configurada la BBDD. Por defecto configurada a FORMATO AMERICANO 1970-01-01.
		var 		$_FORMAT_DATETIME_FRMWRK= "d-m-Y H:i:s";	// Formato de fecha que se quiere usar dentro de la clase. Por defecto configurada a FORMATO 31-12-1970 00:00:00.
		var 		$_FORMAT_DATE_FRMWRK	= "d-m-Y";			// Formato de fecha que se quiere usar dentro de la clase. Por defecto configurada a FORMATO 31-12-1970.
		
		public 		$_EMPTY_FIELD_BY_DEFAULT = "";				// Si la query no da ningún resultado se devolverá el valor establecido por esta variable. Normamente será NULL o "".
		public 		$_UTF8_ENCODE			= true;				// Los resultados extraidos de MySQL se convertirán por defecto a UTF-8 si está establecida a true. Si no no hace nada. 
		
		var 		$selected_rows 	= 0;						// Número de filas seleccionadas para un select dado
		var 		$affected_rows 	= 0;						// Número de filas afectadas para un UPDATE, INSERT o DELETE
		var 		$last_insert_id = 0;						// Número del último id insertado.
		var 		$last_query 	= "";						// La última query que se ejecutó.
		var			$last_error_id	= 0;						// El último código de error que dió MySQL. Va asociado a $last_error_msg.
		var			$last_error_msg	= "";						// El último mensaje de error que dió MySQL. Va asociado a $last_error_id.
		
		protected 	$execStartTime 	= 0;						// Guarda el inicio de la ejecución de la query o queries de MySQL.
		protected 	$execEndTime   	= 0;						// Guarda el final de la ejecución de la query o queries de MySQL.
		var       	$completedIn   	= 0;						// Guarda el tiempo transcurrido en la ejecución de la query o queries de MySQL.
		
		// -------------------------------
		// VARIABLES DEL LOG DE EVENTOS
		// -------------------------------
		var			$_ENABLED_LOG			= true;				// Si está TRUE se guarda en la base de datos una entrada de log que cada página a la que se acceda. Si es FALSE, no hace nada.
		private		$_LOG_TABLE_CREATE_AUTO	= true;				// Indica si hay que crear la tabla automáticamente en la base de datos si no está creada en el momento de la llamada o ejecución.
		private		$_LOG_TABLE_NAME		= "blog_log";		// Es el nombre de la tabla que tiene la configuración de la tabla de LOG's.
		var			$_SIZE_LOG_IN_DAYS		= 30;				// Tamaño del LOG en días. Por defecto es 30 días. Si se establece a CERO se entiende que no se quiere eliminar ninguna entrada del log.
		var			$_SAVE_QUERIES_IN_LOG	= false;			// Si está establecido a TRUE, se guardan todas las consultas que envíen a MySQL automáticamente. Si es FALSE, sólo guarda los eventos que se soliciten directamente a través de la función insertEntryLog(...)
		private		$_LOG_TABLE_DEF 		= "DROP TABLE IF EXISTS `<table_log>`; CREATE TABLE IF NOT EXISTS `<table_log>` ( `Id` bigint(20) NOT NULL auto_increment, `fecha` datetime NOT NULL default '0000-00-00 00:00:00', `evento` longtext collate utf8_bin NOT NULL, `pagina` varchar(255) collate utf8_bin default NULL, `ip` varchar(15) collate utf8_bin default NULL, `so` varchar(50) collate utf8_bin default NULL, `browser` varchar(255) collate utf8_bin default NULL, `host` varchar(255) collate utf8_bin default NULL, PRIMARY KEY  (`Id`) ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;";
		
		
				
		var			$_NAMES_MONTH = array('JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER',
						 'ENERO', 'FEBBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE',
						 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC', 
						 'ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC', 
					 );
					 
		// ************************************************************************************************************************************************************
		// ************************************************************************************************************************************************************
		// FUNCIONES PARA EL CONTROL DE TRANSFERENCIA DE DATOS.
		// SE USARÁ PARA CONTROLAR QUE NO SE ENVÍE A LA BBDD 2 VECES LA MISMA SENTENCIA SQL.
		// TAMBIÉN SE PUEDE USAR PARA EL GESTIONAR LA SEGURIDAD DE LAS TRANSFERENCIAS ENTRE EL SERVIDOR Y MYSQL.
  		//
    // -----------------------------------------------------------------------------------------------------------------
		// FUNCIÓN QUE CREA LA TABLA DE LOG's. 
		// -----------------------------------------------------------------------------------------------------------------
		
		public function createTableLog(){
			$query = $this->_LOG_TABLE_DEF;
			$query = ereg_replace('<table_log>', $this->_LOG_TABLE_NAME, $query);
			$result = mysql_query($query);
			$this->last_query = $query;
			
			return $result;
		}
		
		// -----------------------------------------------------------------------------------------------------------------
		// FUNCIÓN QUE INSERTA EVENTOS EN LA TABLA DE LOG's. 
		// -----------------------------------------------------------------------------------------------------------------
		
		public function insertEntryLog($event){
			if($this->_ENABLED_LOG){
				$result = mysql_query("SHOW TABLES LIKE '".$this->_LOG_TABLE_NAME."';");
				$this->last_query = "SHOW TABLES LIKE '".$this->_LOG_TABLE_NAME."';";
				$row = mysql_fetch_row($result);
				$row = $row[0];

				if($row == $this->_EMPTY_FIELD_BY_DEFAULT){
					$resultCreate = $this->createTableLog();
				}
				
				if($this->_SIZE_LOG_IN_DAYS != 0){
					$result = mysql_query("DELETE FROM ".$this->_LOG_TABLE_NAME." WHERE fecha < DATE_SUB(NOW(),INTERVAL ".$this->_SIZE_LOG_IN_DAYS." DAY)");
					$this->last_query = "DELETE FROM ".$this->_LOG_TABLE_NAME." WHERE fecha < DATE_SUB(NOW(),INTERVAL ".$this->_SIZE_LOG_IN_DAYS." DAY)";
				}

				$aux = $this->getInfo();
				$token = $this->encodeToken($event);
				if(!$this->existsToken($token)){
					$result = mysql_query("INSERT INTO ".$this->_LOG_TABLE_NAME." (fecha, browser, so, ip, pagina, added_info, token, evento) VALUES ('".date("Y-m-d H:i:s", $_SERVER["REQUEST_TIME"])."', '".$aux['browser'].' '.$aux['version']."', '".$aux['so']."', '".$aux['ip']."', '".$aux['page']."', '".$aux['added_info']."', '".$token."', '$event')");
					$this->last_query = "INSERT INTO ".$this->_LOG_TABLE_NAME." (fecha, browser, so, ip, pagina, added_info, token, evento) VALUES ('".date("Y-m-d H:i:s", $_SERVER["REQUEST_TIME"])."', '".$aux['browser'].' '.$aux['version']."', '".$aux['so']."', '".$aux['ip']."', '".$aux['page']."', '".$aux['added_info']."', '".$token."', '$event')";
				}
			}
		}
}
?>