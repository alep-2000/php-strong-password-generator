<?php 
require __DIR__ .'/functions.php';


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