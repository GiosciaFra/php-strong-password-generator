<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
</body>

<?php
$password = '';

if(isset($_GET['generate_password'])) {
    $characters ='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
    $characters_lenght = strlen($characters);
    for ($i = 0; $i < 12; $i++) {
        $password .= $characters[rand(0, $characters_lenght -1)];
    }
}
?>

<div class="container d-flex flex-column align-items-center  ">
        <h1 class="mt-5">Generatore di Password "Sicure"</h1>
        <div class="row mt-3">
            <div class="col">
                <form method="GET">
                    <button type="submit" name="generate_password" class="btn btn-primary">Genera Password</button>
                </form>
                <?php if (($password)): ?>
                    <div class="mt-3 d-flex flex-column align-items-center "><strong>Password generata:</strong> <?php echo $password; ?></div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>