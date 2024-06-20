<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trad en morse</title>
</head>
<body>
    <form method='GET'>
    <label for='trad'>Saisisser le mot/la phrase que vous souhaiter traduire en morse(ne prend pas en charge les caractére spéciaux) : </label>
    <input type=textarea cols='50' row='2' name='trad' id='trad'>
</form>
    <?php 
    $string = $_GET['trad'];
    
    stringToMorse($string);

    function stringToMorse($string)
    {
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
        " " => " " );
        $i = 0;
        $string = preg_replace('/[^a-zA-Z0-9 ]/', '', $string);//ça vire les caractere pas connu.
         while($i != strlen($string)){
            $N = strtoupper(substr($string,$i,1));
            $michel =  $michel.$morsetrad[$N];
            echo substr($string,$i,1).'=>'.$morsetrad[$N].'<br>';
            $i++;
            }
    echo    '<br>'.$string.' : traduit en morse ça donne : '.$michel;
            }
    
    ?>
</body>
</html>