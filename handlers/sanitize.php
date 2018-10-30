<?php

	// OPSCHONEN INGEVOERDE DATA
	function testData($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}

?>