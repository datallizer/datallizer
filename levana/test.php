<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js' integrity='sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==' crossorigin='anonymous'></script>
    
</head>
<body>
    <h1>Hola Mundo</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita eius dolorem autem cum, reiciendis quam tempore facere architecto vel accusamus amet magni porro. Asperiores quam autem accusantium ea eveniet cumque.</p>
    <table>
        <tr>
            <th>HOla</th>
            <td><span>Uno</span></td>
            <td><span>Dos</span></td>
        </tr>
    </table>
    <p>
        <?php
        echo "Soy levana";
        ?> 
        <svg style="max-width:20vw;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
    </p>
    <script>
let miArray = [];

for (let i = 0; i < 10; i++) {
  let numeroAleatorio = Math.floor(Math.random() * 117) + 1;
  miArray[i] = numeroAleatorio;
}
console.log(miArray);

    </script>   
<?php
$sql = "SELECT * FROM lotes";
$result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));
//create an array
$techarray = array();
while($row =mysqli_fetch_assoc($result)){
    $techarray[] = $row;
}
echo json_encode($techarray);
?>




</body>
</html>