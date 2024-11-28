<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href='/css/style.css' rel='stylesheet'>
    <link href='/css/formulario.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <header>
            <?php include 'components/header.php'; ?>
        </header>
        <nav>
            <?php include 'components/navigation.html'; ?>
        </nav>
        <main>
            <section>
                <h2>Contacto</h2>
                <form id="formulario-contacto" action="procesar_formulario.php" method="post">
                    
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="destinatario">Destinatarix:</label>
                    <select id="destinatario" name="destinatario">
                        <option value="brian">Brian</option>
                        <option value="dionys">Dionys</option>
                    </select>

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>

                    <button type="submit">Enviar</button>
                </form>
            </section>
        </main>
        <footer>
            <?php include 'components/footer.php'; ?>
        </footer>
    </div>
</body>
</html>