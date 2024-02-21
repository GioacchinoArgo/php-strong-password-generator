<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="container-fluid text-center pt-5">
            <div class="color-black">
                <h1 class="pt-5 text-white fs-1">Strong Password Generator</h1>
                <h2 class="pt-2 text-white fs-2">Genera una password sicura</h2>
                <div class="container-fluid w-50 bg-white rounded pt-0 ciccio d-flex align-items-center justify-content-center">
                    <form class="row g-5 align-items-center">
                        <div class="col-auto">
                            <label>Lunghezza Password:</label>
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden">Password</label>
                            <input type="number" id="password-length" name="password-length" min="1">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Generate Password</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </main>
</body>
</html>