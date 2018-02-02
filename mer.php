<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi primera pagina</title>
        <link href="css/miEstilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.12.4.js" type="text/javascript"></script>
        <script src="js/miLibreria.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="contenedor">
            <header>
                <div id="enca">
                    <h1>Hola Mercurio</h1>
                </div>
            </header>
            <div>
                <h6>
                    <img src="img/mercurio.jpg" alt=""/>
                </h6>
            </div>
            <section>
                <div id="contenido">
                    <div id="menu">
                        <h4>El Mercurio</h4>
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="mer.php">Mercurio</a></li>
                            <li><a href="tierra.php">Tierra</a></li>
                            <li><a href="marte.php">Marte</a></li>
                            <li><a href="jupiter.php">Jupiter</a></li>
                        </ul>
                    </div>
                    <div id="contec">
                        
                        <div style="width: 100%;">
                        <div id="calc">
                            <input id="ventana" name="ventana" readonly="readonly" type="text">
                            <div class="numero">
                                <button type="none" class="btnNun">1</button>
                                <button type="none" class="btnNun">2</button>
                                <button type="none" class="btnNun">3</button>
                            </div>
                            <div class="operdores">
                                <button type="none">/</button>
                                <button type="none">*</button>
                                <button type="none">-</button>
                                <button type="none" id="misuma">+</button>
                                <button type="none" id="miRes">=</button>
                            </div>
                            <div class="numero">
                                <button type="none" class="btnNun">4</button>
                                <button type="none" class="btnNun">5</button>
                                <button type="none" class="btnNun">6</button>
                            </div>
                            <div class="numero">
                                <button type="none" class="btnNun">7</button>
                                <button type="none" class="btnNun">8</button>
                                <button type="none" class="btnNun">9</button>
                            </div>
                        </div>
                        
                        <div style="width: 100%;">
                            <div id="miCuadro"></div>
                        </div>
                        <button type="none" id="reducir">Reducir</button>
                        <button type="none" id="ampliar">Ampliar</button><br>
                        <button type="none" id="rojo">Rojo</button>
                        <button type="none" id="azul">Azul</button><br>
                        <button type="none" id="restaurar">Restaurar</button><br>
                        <button type="none"id="mostar">Mostar</button>
                        <button type="none" id="ocultar">Ocultar</button><br>
                        <div style="width: 100%;">
                            <div id="Respuesta"></div>
                            <label>Numero 1<input type="number" id="n1" name="n1" value=""></label><br>
                            <label>Numero 1<input type="number" id="n2" name="n2" value=""></label><br>
                            <label>Respuesta:<input type="text" id="rest" name="rest" value="" readonly="readonly"></label><br>
                        </div>




                        <button type="none" id="suma" class="opera">Suma</button>
                        <button type="none" id="resta" class="opera">Resta</button>
                        <button type="none" id="multi" class="opera">Multiplicación</button>
                        <button type="none" id="divi" class="opera">División</button>


                        <div style="width: 100%;">
                            <div id="Respuesta2"></div>
                            <label>Numero de tabla<input type="number" id="n3" name="n3" value=""></label><br>
                            <label>Hasta<input type="number" id="n4" name="n4" value=""></label><br>
                            <button type="none" id="tabla">Crear tabla</button>
                        </div>

                        <div style="width: 100%;">
                            <div id="miCuadro2"></div>                    
                        </div>
                        <button type="none" id="Iniciar">Start</button>
                        <button type="none" id="Parar">Parar</button>
                    </div>

                    
                    </div>








                </div>

            </section>
             <div id ="definicon">
                <div><h>Mercurio es el planeta del sistema 
                        solar más próximo al Sol y el más pequeño. 
                        Forma parte de los denominados planetas interiores 
                        o terrestres y carece de satélites naturales al igual que Venus.
                    </h>
                </div>
            </div>

            <footer>
                <div id="pie">
                    <div class="cuadro25"><h6>Contactos</h6></div>
                    <div class="cuadro25"><h6>Redes</h6></div>
                    <div class="cuadro25"><h6>Ubicación</h6></div>
                    <div class="cuadro25"><h6>Politicas</h6></div>
                </div>
            </footer>
        </div>
    </body>
</html>
