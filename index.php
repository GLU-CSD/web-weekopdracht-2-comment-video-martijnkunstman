<?php
include("config.php");
include("reactions.php");

$getReactions = Reactions::getReactions();
//uncomment de volgende regel om te kijken hoe de array van je reactions eruit ziet


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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube remake</title>
    <style>
#review{
    width:500px;
    height:300px;
}
    </style>
</head>
<body>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=twI61ZGDECBr4ums" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

   
   <h2>hier komt het formulier om een bericht te versturen</h2>
   <form action="" method="post">
        <input type="text" placeholder="..vul hier je naam in" name="naam">
        <br>
        <textarea id="review" placeholder="..vul hier je bericht in" name="message"></textarea>
        <br>
        <input type="submit" value="versturen">

    </form>
   
        <h2>Hieronder komen reacties</h2>
    <p>Maak hier je eigen pagina van aan de hand van de opdracht</p>

<?php
echo "<pre>".var_dump($getReactions)."</pre>";
echo ("<h2>".count($getReactions)."</h2>");
?>


</body>
</html>

<?php
$con->close();
?>