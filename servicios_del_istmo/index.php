<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios del Istmo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require __DIR__ . '/cabecera.php'; ?>

    <div id= "cont-port">
        <img id="img-port" src="portada.jpg" alt="">

                <div id="cont-text">
                    <h1>Servicisos del Istmo </h1>
                    <br>
                    <h2>Nos integramos a tu familia, <br>
                    para transformar el futuro</h2>
                    <br>
                    <?php echo '<p>¿Deseas saber como?</p>'; ?>
                    <br>
                    <br>
                    <?php echo '<a href="#servicios" id="bt">Explora nuestros servicios</a>'; ?>
                </div>
                
                
    </div>

    <br>

        <h1>Servicios</h1>
    <section id="servicios">
        <div class="card"> <img src="1_redes.svg" alt=""> 
        <h2>Redes</h2>
            <ul>
        <li>Instalación de redes Wi-Fi</li>
        <li>Configuración de routers y módems</li>
        <li>Cableado estructurado</li>
        <li>Seguridad de red</li>
        <li>Diagnóstico de conectividad</li>
            </ul>
        </div>
        <div class="card"> <img src="2_mantenimiento.svg" alt=""> 
        <h2>Matenimiento</h2>
        <ul>
        <li>Mantenimiento preventivo</li>
        <li>Reparación de hardware</li>
        <li>Optimización del sistema</li>
        <li>Eliminación de virus y malware</li>
        <li>Respaldo y recuperación de datos</li>
    </ul>
        </div>
        <div class="card"> <img src="3_desarrollo.svg" alt="">
        <h2>Desarrollo</h2>
         <ul>
        <li>Diseño de páginas web</li>
        <li>Aplicaciones web a la medida</li>
        <li>Aplicaciones móviles</li>
        <li>Bases de datos</li>
        <li>Mantenimiento de software</li>
        </ul>
        </div>


    </section>


    <?php include __DIR__ . '/pie.php'; ?>

</body>
</html>