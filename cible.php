<html>
<head>
	<title>Informations</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <header>
<h1>INFORMATIONS</h1>
    <nav>
        <ul>
<li><a href="formulaire.php">Formulaire</a></li>
            </ul>
        </nav>
        </header>
    <section class="bloque">
<h2 class="titre">Etat Civil</h2>
<p>Civilité <?php echo $_POST['choix']; ?></p>
<p>Nom <?php echo $_POST['nom']; ?> !</p>
<p>Prenom <?php echo $_POST['prenom']; ?> !</p>
        </section>
    <section class="bloque">
<h2 class="titre">Coordonées</h2>
<p>N°Rue :  <?php echo $_POST['numrue']; ?> !</p>   
<p>Adresse :<?php echo $_POST['adresse']; ?> !</p>
<p>Code postal :<?php echo $_POST['codepost']; ?> !</p>
<p>Ville :<?php echo $_POST['ville']; ?> !</p>
<p>Email :<?php echo $_POST['mail']; ?> !</p>
    </section>
    

</body>
</html>



