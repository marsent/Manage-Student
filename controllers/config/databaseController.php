<?php

class DataAccessHelper
{
	private $conn;

	public function connect()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "newcnpm";

		// Create connection
		$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($GLOBALS['conn']->connect_error) {
			die("Connection failed: " . $GLOBALS['conn']->connect_error);
		}
		//echo "Connected successfully";
		return $GLOBALS['conn'];
	}

	public function executeNonQuery($sql)
	{
		if ($GLOBALS['conn']->query($sql) === TRUE) {
			echo "Your query has been executed successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
		}
	}

	public function executeQuery($sql)
	{
		$result = $GLOBALS['conn']->query($sql);
		return $result;
	}

	public function close()
	{
		mysqli_close($GLOBALS['conn']);
	}
}
