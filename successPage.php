<?php
include __DIR__ . '/functions/functions.php';
session_start();

// if (isset($_SESSION['userInput'])) {
// if ($_SESSION['userInput'] >= 3 && $_SESSION['userInput'] <= 12) { ?>
<div class="alert alert-success">
    <span class="text-secondary">La tua password è: </span>
    <span class="fw-bold ms-2">
        <?php echo generaPsw($_SESSION['userInput']) ?>
</span>
</div>
<?php
?>