<?php
require 'vendor/autoload.php';

use Faker\Factory;

// Cria uma instância do Faker
$faker = Factory::create();

// Gera dados falsos
$nome = $faker->name;
$email = $faker->email;
$endereco = $faker->address;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Falsos Gerados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #007BFF;
        }
        p {
            font-size: 1.1em;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dados Falsos Gerados</h1>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
    </div>
</body>
</html>
