<?php
include_once('pp.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="canalesdig.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="icon" type="img" href="img/banco-falabella.svg"/>
    <title>Canales Digitales</title>
</head>

<body>
    <div class="wrapper">
        <div class="collapsible">
            <input type="checkbox" id="collapsible-head">
            <label for="collapsible-head">CANALES DIGITALES</label>
            <div class="collapsible-text">
                <p>Acá podrán visualizar todo lo relacionado
                    con los canales digitales. App, Web y WhatsApp.
                </p>
            </div>
        </div>
    </div>
    <header>
        <div class="contenedor">
            <a href="inicio.html" class="logo"><img src="img/logofalabella.png" width="290" height="100"></a>
            <nav>
                <a href="inicio.html"><img src="img/nps,log.png" height="150" width="220">
                    <a href="inicio.html"><img src="img/banderacol.png" height="150" width="">
                    </a>
                </a>
            </nav>
        </div>
        <br>
        <div class="imagen-principal">
            <div class="contenedor">
            </div>
        </div>
    </header>
    <main>
        <div class="contenedorr">
            <div class="contenedorr">
                <h1>Canales Digitales</h1><br>
                <h2>App, Web y WhatsApp</h2>
                <input type="radio" id="1" name="imagen-slide" hidden>
                <input type="radio" id="2" name="imagen-slide" hidden>
                <input type="radio" id="3" name="imagen-slide" hidden>
                <div class="slider">
                    <div class="item-slider">
                        <img src="img/app_3.jpg" height="550">
                    </div>
                    <div class="item-slider">
                        <img src="img/web-linea.jpg" height="550">
                    </div>
                    <div class="item-slider">
                        <img src="img/wp.jpg" height="550">
                    </div>
                </div>
                <div class="paginacion-hover">
                    <label class="item-paginacion" for="1">
                        <img src="img/app.png">
                    </label>
                    <label class="item-paginacion" for="2">
                        <img src="img/web-linea.jpg">
                    </label>
                    <label class="item-paginacion" for="3">
                        <img src="img/wp.jpg">
                    </label>
                </div>
            </div>
    </main>
    <br>
    <h1 class="titulo-des">Información general</h1>
    <div class="contenedor-des">
        <!--<h1 class="titulo-des">Banco Falabella</h1>-->
        <video class="video" width="600" height="400" controls src="videos/videoapp.mp4">
            <style>
                .video {
                    padding-top: 0%;
                    padding-left: 60px;
                    padding-bottom: 3%;
                }
            </style>
        </video>
        <p class="descripcion"><span>¡De Gennial a </span><br><span>Gennials!</span>
        </p>
    </div>
    <section class="servicios">
        <div class="contenedor">
            <h4 class="titulo-suc">A detalle...</h4>
            <style>
                .titulo-suc {
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                    text-align: center;
                    color: #000;
                    font-size: 25px;
                    text-decoration: none;
                }
            </style>
            <br>
            <div class="servicio-cont">
                <div class="servicio-individual">
                    <a href="npsapp.html"><img src="img/APPBFCO.png">
                        <h3>App</h3>
                    </a>
                </div>
                <div class="servicio-individual">
                    <a href="npsweb.html"><img src="img/canaldig.png">
                        <h3>Web</h3>
                    </a>
                </div>
                <div class="servicio-individual">
                    <a href="npswhatsapp.html"><img src="img/whatsapp.jpg">
                        <h3>WhatsApp</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <div style="text-align:center">
        <h2 style="color:#000">¿Que puede hacer el cliente en la App?</h2>
        <p style="color:#000">Múltiples beneficios desde la App, te contamos algunos:</p>
    </div>
    <br>
    <div class="container" style="background-color:#008f39; border-radius: 20px; padding: 5px;
     margin: 10px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     text-align: center; align-items: center;">
        <div class="row">
            <div class="column-66"> <br><br><br>
                <!--<h1 class="xlarge-font" style="color:#BDECB6;"><b>Ingreso a la App</b></h1><br><br>-->
                <p1 style="font-size: 25px;color: #BDECB6;">En la App de Banco Falabella
                    encontrarán una interfaz muy intuitiva, desde la parte principal del ingreso, con diferentes
                    opciones en la parte de abajo. Como: <span>Clave Dinámica, Oportunidades Unicas, Asesoría por
                        WhatsApp
                        y por último ubicación de las oficinas a nivel nacional.</span></p1>
                <!-- <button class="button">Download Application</button> -->
            </div>
            <div class="column-33">
                <img class="img1" src="img/app2.gif" width="335" height="471">
            </div>
        </div>
    </div>
    <div class="container"
        style="background-color:#008f39; border-radius: 20px; padding: 5px; 
    margin: 10px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <div class="row">
            <div class="column-33">
                <img class="img1" src="img/app.gif" alt="App" width="335" height="471">
            </div>
            <div class="column-66"><br><br><br>
                <!--<h1 class="xlarge-font"><b>Manejo de sus tarjetas</b></h1><br>-->
                <p1 style="font-size: 25px; color: #BDECB6;">Manejar los productos que tenga en el Banco, ya sea
                    <span>Tarjetas de Crédito, Débito, PAC, CDT, CDAT, etc.</span> En la que puede realizar sus pagos,
                    transferencia,
                    etc.
                </p1>
                <!--<button class="button" style="background-color:red">Read More</button> --->
            </div>
        </div>
    </div>
    <div class="container" style="background-color:#008f39; border-radius: 20px; padding: 5px; 
    margin: 10px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-align: center; align-items: center;">
        <div class="row">
            <div class="column-66"><br><br><br><br><br>
                <!--<h1 class="xlarge-font"><b>Activar sus productos</b></h1><br><br>-->
                <p1 style="font-size: 25px;color: #BDECB6;">Podrán activar y desactivar sus tarjetas, ya sea por posible
                    fraude o situación externa.</p1>
                <!-- <button class="button">Download Application</button> -->
            </div>
            <div class="column-33">
                <img class="img1" src="img/app_tarj_act.gif" width="335" height="471">
            </div>
        </div>
    </div>
    <br>
    <h1 class="titulo-des">Comentarios de algunos clientes</h1><br>
    <div class="containers">
        <div class="card">
            <div class="card-header">
                <img src="img/icontriste.jpg" alt="rover" />
            </div>
            <div class="card-body">
                <span class="tag tag-red">Detractor</span><br>
                <p> 
                    <?php 
                    $def_1 = "Atención: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' OR TIPO = 'RED OFICINAS'
					 AND Comentario_Cliente != '' OR Comentario_Cliente IS NOT NULL
                     AND Tipo_Respuesta = 'DETRACTOR'  OR NIVEL_1 = 'ATENCION'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?> 
                    </p>
                <p> 
                    <?php 
                    $def_2 = "Venta: ";
                     $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' OR TIPO = 'RED OFICINAS'
					 AND Comentario_Cliente != '' OR Comentario_Cliente IS NOT NULL
                     AND Tipo_Respuesta = 'DETRACTOR'  OR NIVEL_1 = 'VENTA'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_2, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?> 
                </p>
                <div class="user">
                    <img src="img/users.png" alt="user" />
                    <div class="user-info">
                        <p>Clientes<br>
                            BFCO</p>
                        <small>
                        <?php 
                     $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
					 where PERIODO_EXPERIENCIA = '202412'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?> 
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="img/iconneutral.png" alt="ballons" />
            </div>
            <div class="card-body">
                <span class="tag tag-yellow">Neutro</span><br>
                <p> 
                    <?php 
                    $def_1 = "Atención: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' OR TIPO = 'RED OFICINAS'
					 AND Comentario_Cliente != '' OR Comentario_Cliente IS NOT NULL
                     AND Tipo_Respuesta = 'NEUTRO'  OR NIVEL_1 = 'ATENCION'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?> 
                    </p>
                <p> 
                    <?php 
                    $def_2 = "Venta: ";
                     $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' OR TIPO = 'RED OFICINAS'
					 AND Comentario_Cliente != '' OR Comentario_Cliente IS NOT NULL
                     AND Tipo_Respuesta = 'NEUTRO'  OR NIVEL_1 = 'VENTA'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_2, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?> 
                <div class="user">
                    <img src="img/users.png" alt="user" />
                    <div class="user-info">
                        <p>Clientes <br>
                            BFCO</p>
                        <small>
                        <?php 
                     $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
					 where PERIODO_EXPERIENCIA = '202412'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?> 
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="img/iconfeliz.png" alt="city" />
            </div>
            <div class="card-body">
                <span class="tag tag-green">Promotor</span><br>
                <p>
                <?php 
                    $def_1 = "Atención: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' OR TIPO = 'RED OFICINAS'
					 AND Comentario_Cliente != '' OR Comentario_Cliente IS NOT NULL
                     AND Tipo_Respuesta = 'PROMOTOR'  OR NIVEL_1 = 'ATENCION'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?> 
                    </p>
                <p> 
                    <?php 
                    $def_2 = "Venta: ";
                     $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' OR TIPO = 'RED OFICINAS'
					 AND Comentario_Cliente != '' OR Comentario_Cliente IS NOT NULL
                     AND Tipo_Respuesta = 'PROMOTOR'  OR NIVEL_1 = 'VENTA'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_2, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?> 
                <div class="user">
                    <img src="img/users.png" alt="user" />
                    <div class="user-info">
                        <p>Clientes <br>
                            BFCO</p>
                        <small>   
                        <?php 
                     $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA 
                     FROM REPORTING_NPS_DETALLE tablesample ('1')
					 where PERIODO_EXPERIENCIA = '202412'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        echo 'Error';
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?> 
                    </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <h3>Experiencia del Cliente Banco Falabella Colombia</h3>
    </footer>
    <style>
        .footer {
            background: #008f39;
            text-align: center;
            border-radius: 25px;
            padding: 15px;
        }

        .footer h3 {
            color: #BDECB6;
        }
    </style>
</body>

</html>