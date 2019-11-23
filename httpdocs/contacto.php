<?php
use League\Plates\Engine;

require "../vendor/autoload.php";

$templates = new Engine( '../templates');

echo $templates->render("contacto", [
  "title" => "Página de contacto",
  "email" => "usuarios@desarrolloweb.com",
]);