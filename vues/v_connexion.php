﻿<div id="contenu">
      <h2>Identification utilisateur</h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label for="nom">Pseudo*</label>
       <input id="pseudo" type="text" name="pseudo"  size="30" maxlength="45">
      </p>
			<p>
				<label for="mdp">Mot de passe*</label>
			  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
      </p>
         <input type="submit" value="Valider" name="valider">
         <input type="reset" value="Annuler" name="annuler"> 
      </p>
</form>

</div>