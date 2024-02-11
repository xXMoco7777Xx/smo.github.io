<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Google Style</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            margin-bottom: 20px;
            color: #4285f4;
        }

        .input-container {
            position: relative;
            margin-bottom: 20px;
        }

        input {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
            transition: 0.3s;
        }

        input:focus + label, input:not(:placeholder-shown) + label {
            top: 0;
            font-size: 12px;
            color: #4285f4;
        }

        button {
            padding: 10px;
            background-color: #4285f4;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2e64b7;
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h2>Iniciar sesión</h2>
            <div class="input-container">
                <input type="text" id="username" name="username" required>
                <label for="username">Nombre de usuario</label>
            </div>
            <div class="input-container">
                <input type="password" id="password" name="password" required>
                <label for="password">Contraseña</label>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Credenciales predefinidas
        $usuarios = array(
            "xXMoco7777Xx" => "contraseña",
            // Agregar más usuarios según sea necesario
        );

        // Obtener datos del formulario
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verificar las credenciales
        if (array_key_exists($username, $usuarios) && $usuarios[$username] == $password) {
            echo "<p>Inicio de sesión exitoso para el usuario: $username</p>";
        } else {
            echo "<p>Nombre de usuario o contraseña incorrectos. Por favor, intenta de nuevo.</p>";
        }
    }
    ?>
</body>
</html>
