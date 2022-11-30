<?php
include __DIR__ . '/functions/functions.php';
include __DIR__ . '/partials/head.html';
$userInput = $_GET['numerocaratteri'];


?>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-white text-center">Genera una password sicura</h2>
        <div class="response p-4 rounded-3 w-75 m-auto my-4">

            <?php if (isset($userInput)) {
                if ($userInput >= 3 && $userInput <= 12) {
                    generaPsw($userInput);
                    header('Location: ./successPage.php');
                } else { ?>
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