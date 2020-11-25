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
<body>
    <?php require_once "./components/header.php" ?>
    <div class= "titulo">
        <p class="title">RECARGA</p>
    </div>
    <p class="paragraph">
        <div class = "contenido";>
        <div><img src="./assets/img/imagenrecarga.png" alt="Tarjeta"></div>
        <div>   
            <h1 class="fuenteazul" >Ingresa tu información de pago</h1>
            <form action="">
                <div class="button">
                    <label for="metodopago">Tarjeta de crédito</label> 
                    <input type="radio" name="metodopago" value ="" id="">
                    <label for="metodopago">Transferencia bancaria</label>
                    <input type="radio" name="metodopago" size ="35px" id="">
                </div>
                    <h3 class="fuenteazul">Número de tarjeta</h3>
                    <input type="text" placeholder="0123 0123 0123 0132"name="" id="">
                    <h3 class="fuenteazul">Fecha de expiración</h3>
                    <select class ="button primary" name="mes"  id="">
                        <optgroup label="Día">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </optgroup>
                    </select>
                    <select class ="button primary" name="anio" placeholder ="Día" id="">
                        <optgroup label="Día">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </optgroup>
                    </select>
                    <input type="text" name="cvv" placeholder ="CVV"id=""> <br>
                    <h3 class="fuenteazul" Cantidad a recargar:</h3>
                    <input type="text" name="cantidadarecargar" placeholder="$" id="">
                    <input class="button primary" value="Recargar" type="submit" name="recargar" id="">
            </form>
        </div>
        </div>
    </p>
</body>
</html>