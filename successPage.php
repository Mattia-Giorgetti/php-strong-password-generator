<?php
session_start();

if (isset($_SESSION['userInput'])) {
    if ($_SESSION['userInput'] >= 3 && $_SESSION['userInput'] <= 12) { ?>
<div class="alert alert-success">
    <span class="text-secondary">La tua password è: </span>
    <span class="fw-bold ms-2">
        <?php echo generaPsw($_SESSION['userInput']) ?>
    </span>
</div>
<?php } else { ?>
<div class="alert alert-danger">
    <h4>La password deve essere compresa tra 3 e 12 caratteri!</h4>
</div>
<?php
        header('Location: ./index.php');
    }
} ?>