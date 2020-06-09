 <?php

	class DataAccessHelper
	{
		private $conn;

		public function connect()
		{
			$servername = "localhost";
			$username = "root";
			$password = "Tuananh19022k";
			$dbname = "test";

			// Create connection
			$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($GLOBALS['conn']->connect_error) {
				die("Connection failed: " . $GLOBALS['conn']->connect_error);
			}
			return $GLOBALS['conn'];
		}

		public function executeNonQuery($sql)
		{
			if ($GLOBALS['conn']->query($sql) === TRUE) {
				return true;
			} else {
				echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
				return $GLOBALS['conn']->error;
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

	?> 