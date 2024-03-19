<?php
 include './functions.php' ;
 
 if (isset($_GET['generate_password'])) {
    $password = generate_password();
    session_start();
    $_SESSION['generated_password'] = $password;
    header('Location: show_password.php');
    exit();
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
</body>



<div class="container-fluid d-flex flex-column align-items-center  ">
        <h1 class="mt-5">Generatore di Password "Sicure"</h1>
        <div class="row mt-3">
            <div class="col">
                <form method="GET">
                    <button type="submit" name="generate_password" class="btn btn-primary">Genera Password</button>
                </form>
                
                
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>