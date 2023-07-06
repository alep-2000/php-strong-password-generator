<!-- FUNCTION TO GENERATE RANDOM NUMBER -->
<?php
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
        $results = 'Password non adeguata. Si accettando da 8 a 32 caratteri';
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

?>