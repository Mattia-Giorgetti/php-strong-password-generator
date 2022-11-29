<?php
include __DIR__ . '/functions/functions.php';
$userInput = $_GET['numerocaratteri'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-white text-center">Genera una password sicura</h2>
        <div class="response p-4 rounded-3 w-75 m-auto my-4">

            <?php if (isset($userInput)) {
                if ($userInput >= 3 && $userInput <= 12) { ?>
            <div class="alert alert-success">
                <span class="text-secondary">La tua password è: </span>
                <span class="fw-bold ms-2">
                    <?php echo generaPsw($userInput) ?>
                </span>
            </div>
            <?php } else { ?>
            <div class="alert alert-danger">
                <h4>La password deve essere compresa tra 3 e 12 caratteri!</h4>
            </div>
            <?php }
            } ?>
        </div>
        <form action="index.php" method="GET" class="bg-white p-4 rounded-3 w-75 m-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p>Lunghezza Password:</p>
                <input type="number" name="numerocaratteri">
            </div>
            <button class="btn btn-primary" type="submit">Invia</button>
            <button class="btn btn-secondary" type="reset">Annulla</button>
        </form>

    </div>

</body>

</html>