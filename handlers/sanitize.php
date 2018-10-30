<?php

	// OPSCHONEN INGEVOERDE DATA
	function testData($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}

	// CHECK FOR PERMISSIONS
	function verifyLevel($level) {
		if(isset($_SESSION['vlag'])) {
			if($level <= $_SESSION['vlag']) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

?>