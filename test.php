<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #naam{
            color: red;
        }
    </style>
</head>
<body>
    
<h1>Hello world!</h1>
<?php

for($i = 0; $i < 10; $i++){
   echo "<p>De waarde van i is: $i</p>";
}

?>
<div id="naam">Martijn</div>

</body>
</html>