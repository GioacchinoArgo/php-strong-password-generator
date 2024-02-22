<?php

//# Funzione per generare una password casuale
//? (Da fixare / cambiare)
function generate_random_password($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*-_+.?';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

//* Variabili per gestire gli alert
$alert_class = '';
$alert_message = '';

//* Verifico se è stato inviato il parametro password-length tramite GET
if (isset($_GET['password-length'])) {
    $password_length = $_GET['password-length'];

    //# Logica degli alert
    //? (Probabilmente da cambiare / eliminare)

    //* Creo una condizione if / else per decidere se stampare il messaggio di successo o fallimento.
    if ($password_length > 4) {

        //* Riassegno la password generata in una variabile
        $generated_password = generate_random_password($password_length);

        //* Stampo il messaggio di successo con la password generata se la password è valida
        $alert_class = 'alert-success px-5';
        $alert_message = "La tua password è stata generata con successo: $generated_password";
    } else {
        
        //* Stampo il messaggio di errore se i caratteri sono inferiori a 4
        $alert_class = 'alert-danger px-5';
        $alert_message = 'Generazione della password fallita. Perfavore inserisci un numero di caratteri superiore a 4.';
    }
}  
?>



<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password Forti</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
    <body>
    <main>
        <div class="container text-center pt-5 px-5">
            <div class="color-black">
                <h1 class="pt-5 text-white fs-1">Generatore di Password Forti</h1>
                <h2 class="pt-2 text-white fs-2">Genera una password sicura</h2>
                <?php if ($alert_class && $alert_message): ?>
                    <div class="alert <?= $alert_class; ?>" role="alert">
                        <?= $alert_message; ?>
                    </div>
                <?php endif; ?>
                <div class="container-fluid w-50 bg-white height rounded pt-0 d-flex align-items-center justify-content-center">
                    <form class="row g-5 align-items-center" method="GET">
                        <div class="col-auto">
                            <label>Lunghezza Password:</label>
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden">Password</label>
                            <input type="number" id="password-length" name="password-length">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Genera Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>