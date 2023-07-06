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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5"><strong>GENERATOR RANDOM PASSWORD</strong></h1>
        <div class="row">
            <div class="col-12 d-flex justify-content-center bg-red rounded mb-3">
                <form class="form-group my-3" action="index.php" method="GET">
                    <input class="form-control" type="number" name="lenght" placeholder="Lenght password">
                    <button class="btn btn-sm btn-success my-2" type="submit">Invia</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center white ">
                <?php if(isset ($results)){ ?>
                    <div>
                        <?php echo $results; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>