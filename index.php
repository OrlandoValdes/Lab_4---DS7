<?php

use App\User; // Aquí importamos la clase User del namespace App
use Database\Models\ProductModel; // Aquí importamos la clase ProductModel del namespace Database/Models

require 'vendor/autoload.php'; //Solicita el archivo autoload.php en la carpeta vendor que debe ser generada con composer install

$user= new User; //Se crea instancia de la clase User
echo $user->getName(); //Imprime el Nombre
echo "\n";

$product= new ProductModel; //Se crea instancia de la clase ProductModel
echo $product->getId(); //Imprime el ID

echo "\n";
?>
