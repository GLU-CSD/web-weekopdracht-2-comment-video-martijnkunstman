<?php
include("config.php");
include("reactions.php");


if(!empty($_POST)){
    //dit is een voorbeeld array.  Deze waardes moeten erin staan.
    $postArray = [
        'name' => $_POST['naam'],
        'email' => "ieniminie@sesamstraat.nl",
        'message' => $_POST['message']
    ];

    $setReaction = Reactions::setReaction($postArray);

    if(isset($setReaction['error']) && $setReaction['error'] != ''){
        prettyDump($setReaction['error']);
    }
}

$getReactions = Reactions::getReactions();
//uncomment de volgende regel om te kijken hoe de array van je reactions eruit ziet


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube remake</title>
    <style>
#review{
    width:100px;
    height:100px;
}
body{
    background: black;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}
.bericht{
    background: grey;
    box-shadow: 2px 2px 2px black;
    border-radius: 10px;
    padding: 10px;
    margin:10px;
    display: inline-block;
}
    </style>
</head>
<body>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/vfN2rN9P3CI?si=bUlIdHZUCg0fy4SR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

   
   <h2>hier komt het formulier om een bericht te versturen</h2>
   <form action="" method="post">
        <input required type="text" placeholder="..vul hier je naam in" name="naam">
        <br>
        <textarea required id="review" placeholder="..vul hier je bericht in" name="message"></textarea>
        <br>
        <input type="submit" value="versturen">

    </form>
   
        <h2>Hieronder komen reacties</h2>
    <p>Maak hier je eigen pagina van aan de hand van de opdracht</p>

<?php
//echo "<pre>".var_dump($getReactions)."</pre>";

echo ("<h2>Er zijn ".count($getReactions)." reactie</h2>");

for ($i=0; $i < count($getReactions); $i++) { 
    echo("<div class='bericht'>");
    echo($getReactions[$i]['name']." -- ");
    echo($getReactions[$i]['message']."<br>");
    echo("</div>");    
}
?>


</body>
</html>

<?php
$con->close();
?>