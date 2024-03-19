<?php
$password = '';

if(isset($_GET['generate_password'])) {
    $characters ='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
    $characters_lenght = strlen($characters);
    for ($i = 0; $i < 12; $i++) {
        $password .= $characters[rand(0, $characters_lenght -1)];
    }
}