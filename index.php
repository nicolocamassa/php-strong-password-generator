<?php
    require __DIR__.'/functions.php';

    $password = generatePassword();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="index.php" method="GET" class="mt-3 ms-0 p-0">
                <input class="form-control" id="passwordLength" name="passwordLength" type="number" placeholder="Lunghezza password">
                <button type="submit" class="btn btn-success mt-3 m-0">Success</button>
            </form>
        </div>
    </div>
    <div class="result">
        <?php
        echo $password;
        ?>
    </div>

    <!-- TODO: Milestone 3 (BONUS), Milestone 4 (BONUS) 
               Mostrare la password in un'altra finestra
               Dare all'utente la possibilità di filtrare e scegliere la generazione
    -->
</body>

</html>