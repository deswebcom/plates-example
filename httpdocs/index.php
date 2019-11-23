<?php
use League\Plates\Engine;

require "../vendor/autoload.php";

$templates = new Engine( '../templates');

echo $templates->render("home", [
  "title" => "Portada de mi sitio web",
  "creator" => "DesarrolloWeb.com",
]);