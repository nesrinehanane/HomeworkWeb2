<html>
<head>
	<title>INSCRIPTION</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
	<div id="contenant">
	<header>
		<h1>Formulaire d'Inscription</h1>
	</header>
	<section>
		<form name="formulaire" method="post" onsubmit=verifform() action="cible.php">
		    <fieldset>
		    	<legend class="couleur">Etat civil</legend>
		    	<h4>Civilité</h4>
		    	<select name="choix">
		    		<option value="mme">Madame</option>
		    		<option value="mr">Monsieur</option>
		    		<option value="melle">Mademoiselle</option>
		    	</select>
		    		<h4>Nom</h4>
		    		<input type="text" name="nom" placeholder="exemple : Sparrow" onblur="verifnom()">
		    		<h4>Prénom</h4>
		    		<input type="text" name="prenom" placeholder="exemple : Jack" onblur="verifpnom()">

		    </fieldset>
		    <fieldset>
		    	<legend class="couleur">Coordonnées</legend>
		    	<h4>N°Rue</h4>
		    		<input type="text" name="numrue" placeholder="exemple : SAINT GEORGES" onblur="verifnum()">
		    	<h4>Adresse</h4>
		    		<input type="text" name="adresse" placeholder="exemple :  villa 01 " onblur="verifadr()">
		    	<h4>Code postal</h4>
		    		<input type="text" name="codepost" placeholder="exemple : 31000" onblur="verifcodp()">
		    			<h4>Ville</h4>
		    		<input type="text" name="ville" placeholder="exemple : Oran" onblur="verifville()">
		    			<h4>Email</h4>
		    		<input type="text" name="mail" placeholder="exemple : exemple@exemple.fr" onblur="verifmail()">
		    </fieldset>

		    <a href="cible.php" target="_blank"><input class="bouton" type="submit" value="ENVOYER" ></a>
		    <input class="bouton" type="reset" value="ANNULER">



		</form>
	</div>

		<script type="text/javascript">
function verifform(){
					if(document.formulaire.nom.value=="")
				alert("Le champ Nom est vide!")
		
		
			if(document.formulaire.prenom.value=="")
				alert("Le champ Prenom est vide!")
		
					if(document.formulaire.numrue.value=="")
				alert("Le champ N°Rue est vide!")
		
					if(document.formulaire.adresse.value=="")
				alert("Le champ Adresse est vide!")
		
		
			if(document.formulaire.codepost.value=="")
				alert("Le champ Code postal est vide!")
		
			if(document.formulaire.mail.value=="")
				alert("Le champ Email est vide!")
		
			if(document.formulaire.ville.value=="")
				alert("Le champ Ville est vide!");
				document.formulaire.nom.focus();
				return false;

		}



		</script>

</body>
</html>