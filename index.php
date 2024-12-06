<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <title>EVALUACION</title>
    <link rel="stylesheet" href="css/problemaStem.css" />

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calculaSteam.js"></script>
</head>

<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnologia, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <main>
            <section id="contenedor">
                <section class="problema">
                    <h2>PROBLEMA A RESOLVER</h2><br>
                    <p>Una hélice de turbina de motor a reacción de un avión
                    Un colector solar plano, que se va a utilizar como medio de calefaccion en Andalucia mide 4 m^2
                        y vale 2600 euros, incluida la instalacion. determinar el tiempo qie se tardara en amortiazar
                        (pagar lo que ha costado) si K=0,8 cal/min*cm2 y esta funcionando a una media de 6 horas al dia,
                        durante 150 dias al año. este colector seria una alternativa ala radiador electrico. un KWh vale 0,08 euros.</p>
                </section>
                <section class="esquemaProblema">
                    <h2>ESQUEMA</h2>
                    <!--Buscar o crear una impagen que represente el problema jpg o png-->
                    <center>
                        <img class="imgProblema" src="images/solar.jpg">
                    </center>
                </section>
                <section class="formulas">
                    <h2>Fórmulas</h2>
                    <br>
                    <h3>Q = K*t*S*R en Kcal.</h3>
                </section>
                <section class="datos">
                <h2>DATOS:</h2>
                    <p>Q= energia generada</p>
                    <p>K= coeficiente de radiacion</p>
                    <p>t= tiempo en minutos</p>
                    <p>S= area cm2</p>
                    <p>r= rendimiento</p>
                    <!--A partir del enunciado del problema, ecribir una lista de los datos proporcionados para calcular en las unidades de Sistema Internacional de medidas. Incluir valores de constantes y datos de otras fuentes-->
                </section>
                <section class="calculos">
                    <p>Q = k*t*s</p>

                    <?php
                    $k = (0.8*54*10*4-10)/10;
                    echo "0.8 cal/min * cm^2 * 54 * 10^4 cm^2 = $k";
                    
                    echo "<br><br> en 150 dias durante 6 horas al dia se obtienen 160.512 euros, para amortizar el capital invertido necesitamos que colerctor este funcinando durante";
                    $x = 2600*(150/160.512);
                    $a = $x/365;
                    echo "<br><br> 2600E* (150/160.512) = $x dias, $a años"
                    ?>
                </section>

                <section class="resultado">
                    <h3>resultados</h3>
                    <?php
                    echo "<br><br><br><br>";
                    echo "150 dias durante 6 horas son 160.512 euros";
                    echo "<br><br> para amotizar lo invertido 6.6 años ";
                ?>
                </section>
            </section>
        </main>
        <footer class="pie">
            <label>Alexis Paolo Carvajal Mejia - 21090981</h3></label>
        </footer>
    </section>
</body>

</html>