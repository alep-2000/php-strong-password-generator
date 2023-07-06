<?php 
// FUNCTION TO GENERATE RANDOM NUMBER
function randomNumber($min, $max){
    return rand($min, $max);
}

// FUNCTION TO GENERATE RANDOM PASSWORD
function randomPassword ($lenght){
    // VARIABLES
    $password = '';
    $error = '';
    $minuscole = 'abcdefghijklmnopqrstuvwxyz';
    $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '1234567890';
    $special = '!?~@#-_+<>[]{}';

    $string = $minuscole.$maiuscole.$numbers.$special;

    if($lenght === ''){
        $error = 'Non hai inserito nulla';
    }
    else if($lenght < 8 || $lenght > 32){
        $results = 'Password troppo corta';
    }
    else{
        // CICLE WHILE
        while(strlen($password) < $lenght){
            $index = randomNumber(0, strlen($string) - 1);
            $characater = $string[$index];

            $password .= $characater;
        }
        return $password;
    }   
    return $results;
}


if(isset ($_GET['lenght'])){
    $results = randomPassword($_GET['lenght']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Strong Password Generator</title>
</head>
<body>
    <?php if(isset ($results)){ ?>
        <div>
            <?php echo $results; ?>
        </div>
    <?php } ?>
    <form action="index.php" method="GET">
        <input type="number" name="lenght" placeholder="Lenght password">
        <button type="submit">Invia</button>
    </form>
</body>
</html>