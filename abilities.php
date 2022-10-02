<?php


$ur = $_GET['url'];
$file = file_get_contents($ur);
$json = json_decode($file,true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/estiloPoke.css">
   <title>POKE'S</title>
</head>
<body>
   <section class="sec">
       <h1 class="h1">Abilities</h1>

       <ul type = "square">
          <li><?php echo $json['abilities'][0]['ability']['name']?></li>
          <li><?php echo $json['abilities'][1]['ability']['name']?></li>
       </ul>

       <img src="<?php echo $json['sprites']['front_default']?>" alt="pokemon">
       <img src="<?php echo $json['sprites']['back_default']?>" alt="pokemon">
   </section>
   <a class="a" href="index.php">Regresar</a>
</body>
</html>