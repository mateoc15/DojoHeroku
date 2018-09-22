<html>
<head>
<title> Prueba de PHP MATEO </title>
</head>
<body>
<?php echo 'Ejemplo: /?nombre=Mateo'?>
<br>
<?php echo '¡Hola ' . htmlspecialchars($_GET["nombre"]) . '!'; ?>
</body>
</html>
