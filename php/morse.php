<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trad en morse</title>
</head>
<body>
    <form method='POST'>
    <label for='trad'>Saisisser le mot/la phrase que vous souhaiter traduire en morse(ne prend pas en charge les caractére spéciaux) : </label>
    <input type=textarea cols='50' row='2' name='trad' id='trad'>
</form>
    <?php 
    // Récupère la chaîne d'entrée à partir de la requête POST
    $string = $_POST['trad'];

    // Appelle la fonction stringToMorse pour convertir la chaîne en code Morse
    stringToMorse($string);

    function stringToMorse($string)
    {
         // Définit un tableau qui mappe chaque caractère à son code Morse correspondant
        $morsetrad = array("A" => ".-",
        "B" => "-...",
        "C" => "-.-.",
        "D" => "-..",
        "E" => ".",
        "F" => "..-.",
        "G" => "--.",
        "H" => "....",
        "I" => "..",
        "J" => ".---",
        "K" => "-.-",
        "L" => ".-..",
        "M" => "--",
        "N" => "-.",
        "O" =>"---",
        "P" => ".--.",
        "Q" => "--.-",
        "R" => ".-.",
        "S" => "...",
        "T" => "-",
        "U" => "..-",
        "V" => "...-",
        "W" => ".--",
        "X" => "-..-",
        "Y" => "-.--",
        "Z" =>"--..",
        "0" => "-----",
        "1" => ".----",
        "2" => "..---",
        "3" => "...--",
        "4" =>"....-",
        "5" => ".....",
        "6" => "-....",
        "7" => "--...",
        "8" => "---..",
        "9" => "----.",
        " " => " " );// espace est mappé à un seul espace dans le code Morse

        
        // Supprime tous les caractères non alphanumériques de la chaîne d'entrée
        $string = preg_replace('/[^a-zA-Z0-9 ]/', '', $string);//ça vire les caractere pas connu.
        
         // Initialise une variable pour stocker la traduction en code Morse
        $phrasetraduite = '';

        $i = 0;
        
        while($i != strlen($string)){
            // Récupère le caractère actuel et le convertit en majuscule
            $N = strtoupper(substr($string,$i,1));
            
            // Recherche le code Morse du caractère actuel dans le tableau $morsetrad
            $phrasetraduite = $phrasetraduite.$morsetrad[$N];
            
            // Affiche le caractère actuel et son code Morse correspondant
            echo substr($string,$i,1).'=>'.$morsetrad[$N].'<br>';
            
            // Incrémente le compteur
            $i++;
            
        }
        
        // Affiche la chaîne d'entrée et son code Morse correspondant
        if($string!=null){
    echo    '<br>'.$string.' : traduit en morse ça donne : '.$phrasetraduite;
            }}
    
    ?>
</body>
</html>