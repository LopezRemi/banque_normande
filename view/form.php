
<html>
<center>
  <h1>Création de compte</h1>

  <form action="../Model/insert.php" method="post">
    <p>
      <label for="amount">Montant : </label> 
      <input type="number" name="amount" id="amount"> 50 € mininum
    </p>

    <p>
      <label for="account_type">Type de compte : </label>
      <select name="account_type" id="account_type">
        <option value="">--Choisissez--</option>
        <option value="PEL">PEL</option>
        <option value="EPARGNE">EPARGNE</option>
        <option value="COURANT">COURANT</option>
        <option value="LIVRET A">LIVRET A</option>
        </select>
    </p>

    <input class="btn btn-lg btn-warning" type="submit" value="Créer">
  </form>
</center>

</html>