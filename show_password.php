<?php
session_start();
if (isset($_SESSION['generated_password'])) {
    $password = $_SESSION['generated_password'];

    // Elimino la password dalla sessione dopo averla utilizzata
    unset($_SESSION['generated_password']); 
} else {
    // Se aggiorno la pagina, reindirizzo l'utente alla pagina principale
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class=" bg-black ">
    <div class="container-fluid d-flex flex-column align-items-center text-warning  ">
        <h1 class="mt-5">Password Generata</h1>
        <div class="row mt-3">
            <div class="col">
                <?php if (($password)): ?>
                    <div class="p-3 text-warning border border-3 border-warning-subtle "> <?php echo $password; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
