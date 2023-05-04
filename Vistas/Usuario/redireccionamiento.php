<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sesión cerrada</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            text-align: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0069d9;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .button-container a {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sesión cerrada</h1>
        <p>Has cerrado sesión exitosamente.</p>
        <div class="button-container">
            <a href="login.php">Volver al inicio de sesión</a>
            <a href="../Usuario/principal.php">Volver al inicio de la página</a>
        </div>
    </div>
</body>
</html>