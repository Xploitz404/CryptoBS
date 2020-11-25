<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoBS</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/buttons.css">
    <link rel="stylesheet" href="./styles/input.css">
    <link rel="stylesheet" href="./components/header.css">
    <link rel="stylesheet" href="./styles/misestilos.css">
</head>
<body class="bodycartera">
    <?php require_once "./components/header.php" ?>
    <div class= "titulo">
        <p class="title">MI CARTERA</p>
    </div>
    <p class="paragraph">
        <div class="monedas">
            <div class="montos">
                <img class ="logomoneda" src="./assets/img/logomxn.png" alt="logomxn">
                <input class="inputmonedas" type="text" disabled size="40px" name="cantidadmxn"> <br>
            </div>
            <div class="montos">
                <img class ="logomoneda" src="./assets/img/logobitcoin.png" alt="logobitcoin"> 
                <input class="inputmonedas" type="text" disabled size="40px" name="cantidadbitcoin"> <br>
            </div>
            <div class="montos">
                <img class ="logomoneda" src="./assets/img/logoethereum.png" alt="logoethereum"> 
                <input type="text" class="inputmonedas" disabled size="40px" name="cantidadethereum"> <br>
            </div>
            <div class="montos">
                <img class ="logomoneda" src="./assets/img/logolitecoin.png" alt="logolitecoin"> 
                <input type="text" class="inputmonedas" disabled size="40px" name="cantidadlitecoin"> <br>
            </div>
            <div class="montos">
                <img class ="logomoneda" src="./assets/img/logodecentraland.png" alt="logodecentraland"> 
                <input type="text" class="inputmonedas" disabled size="40px" name="cantidaddecentraland"> <br>
            </div>
            <div class="montos">
                <img class ="logomoneda" src="./assets/img/logotrueusd.png" alt="logotrueusd">
                <input type="text" class="inputmonedas" disabled size="40px" name="cantidadtrueusd"> <br>
            </div>
        </div>
        <div class="circulos"> 
            <a href="recarga.php" ><img class ="circulo" src="./assets/img/circulo.png" alt="Recargar"></a>
            <a href="recarga.php" ><img class ="circulo" src="./assets/img/circulo.png" alt="Vender"></a>
            <a href="recarga.php" ><img class ="circulo" src="./assets/img/circulo.png" alt="Comprar"></a>
        </div>
        <div>
            <input type="text" disabled size="60px" name="balance" id="balancetotal">
        </div>
        <div class="textocirculo">
            <label class = "textocirc" for="balance"><h1>Recarga</h1></label>
            <label class = "textocirc" for="balance"><h1>Vende</h1></label>
            <label class = "textocirc" for="balance"><h1>Compra</h1></label>
        </div>
    </p>
</body>
</html>