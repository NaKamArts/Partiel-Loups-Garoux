<div id="contenu">
<h2>Identification utilisateur</h2>


<form method="POST" action="index.php?uc=connexion&action=valideInscription">


      <p>
 <label for="nom">Pseudo*</label>
 <input id="login" type="text" name="Pseudo"  size="30" maxlength="45">
</p>
      <p>
          <label for="mdp">Mot de passe*</label>
        <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
</p>
<p>
          <label for="mdp">Confirme mot de passe*</label>
        <input id="Cmdp"  type="password"  name="Cmdp" size="30" maxlength="45" onInput="verifPassword()">
</p>
<p>
          <label for="mdp">Mail*</label>
        <input id="mdp"  type="text"  name="mail" size="30" maxlength="75">
</p>
   <input type="submit" value="Valider" name="valider">
   <input type="reset" value="Annuler" name="annuler"> 
</p>
</form>

</div>