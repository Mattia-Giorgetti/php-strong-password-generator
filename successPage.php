<?php
include __DIR__ . '/functions/functions.php';
include __DIR__ . '/partials/head.html';
session_start();
?>

<body>
    <div class="alert alert-success w-50 m-auto text-center mt-5">
        <span class="text-secondary">La tua password è: </span>
        <span class="fw-bold ms-2">
            <?php echo ($_SESSION['psw']) ?>
        </span>
    </div>
    <button class="text-center d-block m-auto mt-5 btn btn-primary"><a class="text-white text-decoration-none"
            href="index.php">Torna alla
            home</a></button>

</body>

</html>

<?php
?>