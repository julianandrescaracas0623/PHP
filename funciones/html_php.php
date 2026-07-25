<?php

$arrays = array("https://randomfox.ca/images/23.jpg", "https://randomfox.ca/images/24.jpg", "https://randomfox.ca/images/25.jpg", "https://randomfox.ca/images/26.jpg", "https://randomfox.ca/images/27.jpg", "https://randomfox.ca/images/28.jpg", "https://randomfox.ca/images/29.jpg", "https://randomfox.ca/images/30.jpg", "https://randomfox.ca/images/31.jpg", "https://randomfox.ca/images/32.jpg");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Profundizando en los parámetros de las funciones</h1>

<h2>Zorritos</h2>


<?php foreach($arrays as $array){
    echo "<img src='$array' alt='Zorro'>";
}



?>
</body>
</html>