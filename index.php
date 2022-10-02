<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/estiloPoke.css">
   <title>API</title>
</head>

<body>
   <section>
      <table class="tablepok">
         <caption>Pokemons</caption>
         <tbody>

         <?php
               $url = "https://pokeapi.co/api/v2/pokemon";
               $file = file_get_contents($url, true);
               $jso = json_decode($file, true);
           ?>
   
           <tr>
                <th scope="rowgroup" colspan="6" style="background-color:gold;">poke</th>
           </tr>
            <tr >
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/1/"><?php print $jso['results'][0]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/2/"><?php print $jso['results'][1]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/3/"><?php print $jso['results'][2]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/4/"><?php print $jso['results'][3]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/5/"><?php print $jso['results'][4]['name']; ?></a></td>
            </tr>
            <tr>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/6/"><?php print $jso['results'][5]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/7/"><?php print $jso['results'][6]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/8/"><?php print $jso['results'][7]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/9/"><?php print $jso['results'][8]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/10/"><?php print $jso['results'][9]['name']; ?></a></td>
            </tr
            <tr>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/11/"><?php print $jso['results'][10]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/12/"><?php print $jso['results'][11]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/13/"><?php print $jso['results'][12]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/14/"><?php print $jso['results'][13]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/15/"><?php print $jso['results'][14]['name']; ?></a></td>
            </tr>
            <tr>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/16/"><?php print $jso['results'][15]['name']; ?></a<td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/17/"><?php print $jso['results'][16]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/18/"><?php print $jso['results'][17]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/19/"><?php print $jso['results'][18]['name']; ?></a></td>
               <td><a href="abilities.php?url=https://pokeapi.co/api/v2/pokemon/20/"><?php print $jso['results'][19]['name']; ?></a></td>
            </tr>
         </tbody>
      </table>
   </section>


</body>

</html>
