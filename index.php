<?php
$salaire = "";
$age = "";
$verbe = "";
$taille=0;
if ( isset($_POST['salaire']) AND isset($_POST['date']) AND isset($_POST['verbe'])) // On a le nom et le prénom
{
	$salaire = $_POST['salaire'];
        $salaire = $salaire*0.82;
        $age = $_POST['date'];
        $age = substr($age, 0,4);
        $age= (date('Y')-$age)." ans";
        $verbe = $_POST['verbe'];
        $taille = strlen($verbe);
        $verbe = substr($verbe, 0, $taille-2); 
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>jeu</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet"/>
</head>
<body class="bg-dark">
	<header class="bg-dark" style="height: 60px; padding: 5px;">
		<h3 class="text-light" style="text-align: center;">PETIT JEU EN PHP ET JS</h3>
	</header>
	<div class="container_fluid bg-dark">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-2"></div>		
  <div class="col-sm-6 bg-light boxStyle">
       <form name="theform" onSubmit="validate()" method="post">
	<div class="form-group">
                <label>date de naissance:</label>
                <div class="width70 floatR"><input id="date" class="width100 form-control" name="date" type="date" value="" size="20">
                </div><br><br>
	<div class="form-group">
		<label>votre salaire brut:</label>
		<div class="width70 floatR"><input class="width100 form-control" id="salaire" name="salaire" type="text" value="" size="20"></div>
        </div><br><br>
	<div class="form-group">
		<label>le verbe:</label>
		<div class="width70 floatR"><input class="width100 form-control" id="verbe" name="verbe" type="text" value="" size="20" placeholder="verbe premier groupe"></div>
	</div>

            <div >
                <input class="btn btn-success " type="submit"  style="font-weight: bold" value="envoyer">
                <input class="btn btn-danger " type="reset" style="font-weight: bold"  value="mettre a zero">		
            </div>
        
        </div>
      </form>
                            <h1>age:  <?php echo $age; ?> </h1>
                            <h1>salaire net: <?php echo $salaire," €"; ?></h1>
                            <table class="table table-bordered">
                                <caption>si-tayeb sofiane</caption>
                                <tr>
                                    <th>je</th>
                                    <td><?php echo empty($verbe)?'':$verbe."e";?></td>
                                </tr>
                                <tr>
                                    <th>tu</th>
                                    <td><?php echo empty($verbe)?'':$verbe."es"; ?></td>
                                </tr>
                                 <tr>
                                    <th>il/elle</th>
                                    <td><?php echo empty($verbe)?'':$verbe."e"; ?></td>
                                </tr>
                                 <tr>
                                    <th>nous</th>
                                    <td><?php echo empty($verbe)?'':$verbe."ons"; ?></td>
                                </tr>
                                 <tr>
                                    <th>vous</th>
                                    <td><?php echo empty($verbe)?'':$verbe."ez"; ?></td>
                                </tr>
                                 <tr>
                                    <th>ils/elles</th>
                                    <td><?php echo empty($verbe)?'':$verbe."ent"; ?></td>
                                </tr>
                            </table>
                        </div>
	</div>      
	</div>

            <script src="script.js"></script>
        </body>
        </html>