<?php

function generaPsw($inputUtente)
{
    session_start();
    $inputUtente = $_GET['numerocaratteri'];

    if (isset($inputUtente) && !empty($inputUtente)) {
        $characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!?&%></()#@*+-_[]";
        $charactersLen = strlen($characters);
        $password = [];
        for ($i = 0; $i < $inputUtente; $i++) {
            $char = rand(0, $charactersLen);
            $password[] = $characters[$char];
            $_SESSION['psw'] = implode($password);

        }
        return implode($password);
    }

}