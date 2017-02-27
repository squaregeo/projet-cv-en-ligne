<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8" />
		<title>mon cv</title>
	    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	    <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
		<link href="../css/style.css" rel="stylesheet"> <!-- Inclusion css general -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>	
		<body>
			<div class="container"> 
				
			
				<?php include("../include/header.php") ?>
			
		
						<div class="col-lg-offset-1 col-md-offset-1 col-lg-7 col-md-7">	
							<h2>Formulaire de contact</h2>

								<p style="color: red"> 
									<?php
										try
										{
											$bdd = new PDO('mysql:host=localhost;dbname=cv', 'root', '');
										}
											catch (Exception $e)
										{
											die('Erreur : ' . $e->getMessage());
										}

										if (isset($_POST['Nom']) AND isset($_POST['Telephone']))
										{
											$Nom= ($_POST['Nom']);
											$Prenom= ($_POST['Prenom']);
											$DateDeNaissance= ($_POST['DateDeNaissance']);
											$LieuDeNaissance= ($_POST['LieuDeNaissance']);
											$Adresse= ($_POST['Adresse']);
											$Email= ($_POST['Email']);
											$Url= ($_POST['Url']);
											$Telephone= ($_POST['Telephone']);
											$Semestre= ($_POST['Semestre']);
											$NiveauHtml= ($_POST['NiveauHtml']);
											$Connaissance= implode(', ', $_POST['Connaissance']);

											echo "données enregistrées <br>
											Votre nom est $Nom <br> 
											Votre prenom est $Prenom <br>
											Votre date de naissance est $DateDeNaissance <br>
											Votre lieu de naissance est $LieuDeNaissance <br>
											votre email est $Email <br>
											votre site est $Url <br>
											votre telephone est $Telephone <br>
											votre semestre est $Semestre <br> 
											votre niveau est $NiveauHtml <br>
											vos connaissances sont $Connaissance <br>";

											$req = $bdd -> prepare ('INSERT INTO contact(Nom, Prenom, DateDeNaissance, LieuDeNaissance, Adresse, Email, Url, Telephone, Semestre, NiveauHtml, Connaissance) VALUES(:Nom, :Prenom, :DateDeNaissance, :LieuDeNaissance, :Adresse, :Email, :Url, :Telephone, :Semestre, :NiveauHtml, :Connaissance)');
													$req -> execute (array(
														'Nom' => $Nom,
														'Prenom' => $Prenom,
														'DateDeNaissance' => $DateDeNaissance,
														'LieuDeNaissance' => $LieuDeNaissance,
														'Adresse' => $Adresse,
														'Email' => $Email,
														'Url' => $Url,
														'Telephone' => $Telephone,
														'Semestre' => $Semestre,
														'NiveauHtml' => $NiveauHtml,
														'Connaissance' => $Connaissance));
										}
										else
										{
											echo "N'hésitez pas à donner votre avis sur nos produits et sur notre site!";
										}
									?>
								</p>
												

								<fieldset class="field">
									<legend>vos données personnelles :</legend>
										<form  action="formulaire_contact.php" method="post">
										<p><label>nom</label>
											<input type="text" name="Nom"><br \><br \></p>
										<p><label>prénom</label>
											<input type="text" name="Prenom"><br \><br \></p>
										<p><label>date de naissance</label>
											<input name="DateDeNaissance"><br \><br \></p>
										<p><legend>lieu de naissance :</legend>
											<fieldset>
												<input type="radio" name="LieuDeNaissance" VALUE = "est">est
												<input type="radio" name="LieuDeNaissance" VALUE = "ouest">ouest
												<input type="radio" name="LieuDeNaissance" VALUE = "nord">nord
												<input type="radio" name="LieuDeNaissance" VALUE = "sud">sud
											</fieldset>
										</p>
										<p><label>adresse postale</label>
											<textarea name="Adresse" rows= "2"  cols = "80"  >adresse postale</textarea><br \><br \></p>
										<p><label>email</label>
											<input type="email" name="Email"><br \><br \></p>
										<p><label>url</label>
											<input type="url" name="Url"><br \><br \></p>
										<p><label>téléphone</label>
											<input type="num" name="Telephone"  c><br \><br \></p>
										<p><label>semestre</label>
											<select name="Semestre"> 
												<option value= 1>1</option>
												<option value= 2>2</option>
												<option value= 3>3</option>	
												<option value= 4>4</option>
											</select><br \><br \></p>
										<p><label>niveau en html</label>
											<input name="NiveauHtml" type="range" value "" max="10" min"0" step="1" ><br \><br \></p>
										<p><legend>connaissances :</legend>
										<fieldset>
											<input type="checkbox" name="Connaissance[]" value="html">html
											<input type="checkbox" name="Connaissance[]" value="css">css
											<input type="checkbox" name="Connaissance[]" value="formulaires">formulaires
											<input type="checkbox" name="Connaissance[]" value="javascript">javascript
										</fieldset>
										</p>
										<input type="submit" name="Submit" value="envoyer">
										</form>
								</fieldset>
						</div>
					<?php include("../include/footer.php");	?>
				</div>
			</div>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
				<script src="../assets/js/jquery-1.11.3.min.js"></script>

			<!-- Include all compiled plugins (below), or include individual files as needed --> 
				<script src="../assets/js/bootstrap.js"></script>
		</body>
</html>


				