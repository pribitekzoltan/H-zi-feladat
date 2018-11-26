
    <h1>Kapcsolat</h1>
    <form name="kapcsolat" action="index.php?action=urlap_elkuld" onsubmit="return ellenoriz();" method="post">
        <div>
          <table>
            <tr>
              <td>Név (minimum 5 karakter):</td>
              <td><input type="text" id="nev" name="nev" size="20" maxlength="40"></td>
            </tr>
            <tr>
              <td>E-mail (kötelező):</td>
              <td><input type="text" id="email" name="email" size="30" maxlength="40"></td>
            </tr>
            <tr>
              <td>Üzenet (kötelező):</td>
              <td><textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea></td>
            </tr>
            <tr>
              <td colspan="2">
                <input id="kuld" type="submit" value="Küld">
                <button onclick="ellenoriz();" type="button">Ellenőriz</button>
              </td>
            </tr>
          </table>
              
        
            
            
        </div>
    </form>

