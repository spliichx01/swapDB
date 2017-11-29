<?php

	class MYSQLIConnection {

		private $_connection;
		private $_result;

		public function __construct() {

			require_once('dbconfig.php');

			extract($config);

			/*echo $user;
			exit();
*/
			$this->_connection = mysqli_connect($host, $user, $password, $dbname);

		}


		public function _query($sql) {

			$this->_result = new MYSQLIResult($this->_connection, $sql);

			return $this->_result;
		}

	}


?>