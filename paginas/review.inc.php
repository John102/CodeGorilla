 <form action="action_page.php" method="POST">
    
    <label for="naam">Naam:</label>
    <input type="text" name="Naam" placeholder="Naam" required/>
    
    <br/><br/>

    <label for="tevredenheid">Tevredenheid:</label>
    <select name="tevredenheid">
      <option value="ontevreden">Ontevreden</option>
      <option value="tevreden">Tevreden</option>
    </select>

    <br/><br/>

    <label for="bericht">Bericht:</label>
    <textarea name="bericht" 
     style="height:200px"></textarea>

    <br/><br/>

    <input type="submit" value="Delen" required/>

  </form>