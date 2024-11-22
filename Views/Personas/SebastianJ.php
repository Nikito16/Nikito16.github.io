
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <title>Tarjeta de Sebastián</title>

        
        
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .tarjeta {
            display: flex;
            flex-direction: row;
            background-color: #132238;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            width: 80vw; /* 80% del ancho de la ventana */
            height: 40vh; /* 40% de la altura de la ventana */
            max-width: 800px; /* Límite máximo */
            max-height: 400px; /* Límite máximo en altura */
        }

        .tarjeta .contenido {
            padding: 20px;
            flex: 2;
        }

        .tarjeta .contenido h1 {
            margin: 0;
            font-size: 1.8rem;
            color: #8BE9FD; /* Color azul claro */
        }

        .tarjeta .contenido p {
            margin: 10px 0;
            color: white;
            line-height: 1.5;
        }

        .tarjeta .contenido ul {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }

        .tarjeta .contenido ul li {
            margin: 5px 0;
            color: white;
            margin-top: 20px; /* Mueve todo el bloque de la lista hacia abajo */
        }

        .tarjeta .imagen {
            flex: 1;
            background-image: url('../../imgs/Person1.jpeg');
            background-size: cover;
            background-position: center;
        }

        .contacto {
            margin-top: 15px;
        }

        .contacto a {
            text-decoration: none;
            color: white;
            background-color:teal; /* Azul claro */
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 50px; /* Agrega espacio extra hacia arriba */
            display: inline-block; /* Asegura que el margen funcione */
        }

        .contacto a:hover {
            background-color: #0056b3; /* Azul más oscuro */
        }
        </style>

    </head>
<body>
    

    <div class="tarjeta">
        <!-- Sección de información -->
        <div class="contenido">
            <h1>Sebastián Jiménez Ciro</h1>
            <p>Es el encargado de consultoría, aportando su experiencia para guiar nuestras estrategias y asegurar un impacto positivo en el equipo.</p>
            <ul>
                <li><strong>Proyectos Trabajados:</strong> Estrategias de negocio, Consultoría tecnológica, Implementación de procesos</li>
                <li><strong>Tecnologías Conocidas:</strong> Análisis de datos, CRM, Herramientas de gestión</li>
                <li><strong>Habilidades:</strong> Liderazgo, Toma de decisiones, Comunicación efectiva</li>
            </ul>

            <div class="contacto">
                <a href="mailto:sebastian@example.com">Contactar</a>
                <a href="../../index.php">Volver al Inicio</a>
            </div>
        </div>
        <!-- Sección de imagen -->
        <div class="imagen">
        </div>
    </div>
</body>
</html>
