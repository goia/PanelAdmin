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
	//ini_set('mysqli.default_socket', '/tmp/mysql5.sock');
	//le pongo este para que funcione
	ini_set('mysqli.default_socket', '/Applications/MAMP/tmp/mysql/mysql.sock');
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
}
?>
