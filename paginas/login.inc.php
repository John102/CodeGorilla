<form action="#" method="POST">
	<label for="naam">Naam:</label>
    <input type="text" name="naam" placeholder="Naam" required/> 
    <br/><br/>
    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" id="password" name="wachtwoord" placeholder="Wachtwoord" required/>
    <input type="checkbox" onchange="SHPassword(this);"><span id="showhidepwd">Laat wachtwoord zien</span>
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