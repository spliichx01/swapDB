<?php

	include "dbconn.php";
	include "result.php";


	$conn = new MYSQLIConnection();


	$result = $conn->_query("SELECT * FROM books");

	while($row = $result->fetch(MYSQLIResult::FETCH_ARRAY)) {


		echo $row[2];

	}



?>