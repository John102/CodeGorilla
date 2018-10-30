
 <form action="handlers/handler_contact.php" method="POST">

    <label for="voornaam">Voornaam</label>
    <input type="text" name="voornaam" placeholder="Uw voornaam.." required />
    <br/>
    <br/>
    <label for="achternaam">Achternaam</label>
    <input type="text" name="achternaam" placeholder="Uw Achternaam.." required />
    <br/>
    <br/>
    <label for="telefoon">Tel.nr</label>
    <input type="text" name="telefoon" placeholder="Uw Tel. nr.." required />
    <br/>
    <br/>
    <label for="Email">Email</label>
    <input type="email" name="email" placeholder="Uw Email.." required />
    <br/>
    <br/>
    <label for="onderwerp">Onderwerp</label>
    <select name="onderwerp">
      <option value="klacht">Klacht</option>
      <option value="vraag">Vraag</option>
      <option value="afspraak">Afspraak</option>
    </select>
    <br/>
    <br/>
    <label for="opmerking">Opmerkingen</label>
    <textarea name="opmerking" required></textarea>
    <br/>
    <br/>
    <input type="submit" value="Verstuur">

  </form>



