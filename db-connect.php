<?php

// use below code to connect

/*
			require_once("db-connect.php");
			$database = new DatabaseConn("localhost", "root", "", "nirogaDB");

*/


class DatabaseConn {
	private $host, $database, $username, $password, $connection;
	private $port = 3306;
	// 3306 is default port for the classic MySQL

	function __construct($host, $username, $password, $database, $port = 3306, $autoconnect = true) {
	  $this->host = $host;
	  $this->database = $database;
	  $this->username = $username;
	  $this->password = $password;
	  $this->port = $port;
	  if($autoconnect) $this->open();
	}
	/*
	 Open connection to  database.
	*/
	function open() {
	  $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
	}
	/*
	Close connection 
	*/
	function close() {
	  $this->connection->close();
	}
	/*
	
	 Execute your query
	
	@param string $query - your sql query
	@return the result of the executed query 

	*/
	function query($query) {
	  return $this->connection->query($query);
	}
	/*
	 Escape your parameters to prevent SQL Injections!
	
	@param string $string - your parameter to escape
	@return the escaped string 
	*/
	function escape($string) {
	  return $this->connection->escape_string($string);
	}
  }


// use below code to connect

/*
			require_once("db-connect.php");
			$database = new DatabaseConn("localhost", "root", "", "nirogaDB");

*/

?>


