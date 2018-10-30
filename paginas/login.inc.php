<?php

	session_start();
	require_once('handlers/sanitize.php');

?>

<form action="handlers/handler_login.php" method="POST">
	
	<label for="email">E-mail:</label>
	<input type="text" name="email" placeholder="email" required/> 
    	
	<br/>
	<br/>
	
    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" id="password" name="wachtwoord" placeholder="Wachtwoord" required/>
	
	<br/>
	<br/>
	
	<span id="showhidepwd">Laat wachtwoord zien</span>
	<input type="checkbox" onchange="SHPassword(this);" />
    	
	<br/>
	<br/>
	
	<input type="submit" value="Aanmelden" />

  </form>

<script>
	function SHPassword(x)
	{
		var checkbox=x.checked;
		if(checkbox)
		{
			document.getElementById("password"). type="text";
			document.getElementById("showhidepwd"). textcontent="Hide"
		}
		else
		{   
			document.getElementById("password"). type="text";
			document.getElementById("showhidepwd"). textcontent="Hide"
		}
	}
</script>