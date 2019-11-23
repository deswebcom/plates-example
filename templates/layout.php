<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="container">
    <header>
        <h1><?= $title ?></h1>
    </header>
    <?=$this->section('content')?>
    <footer>
        <a href="/">Home</a> | <a href="/contacto.php">Contacto</a>
    </footer>
  </div>
</body>
</html>