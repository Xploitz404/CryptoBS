<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./styles/main.css">
  <link rel="stylesheet" href="./components/header.css">
  <link rel="stylesheet" href="./login.css">
</head>

<body>
  <?php require_once "./components/header.php" ?>
  <h1> Iniciar Sesión <h1>
  <form action="" method="post">
    <input type="text" name="correo" placeholder="Ingresa tu correo">
    <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
    <input type="submit" value="Acceder →">
  </form>
  <h4> <a href="registro.php"> <p> ¿Aún no tienes una cuenta? </p> Registrate </a> </h4>

</body>

</html>