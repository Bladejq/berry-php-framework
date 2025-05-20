<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ece9e6, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .error-container {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .error-container h1 {
            font-size: 24px;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        .error-container p {
            margin: 8px 0;
            font-size: 16px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #222;
        }

        @media (max-width: 600px) {
            .error-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>🚫 Произошла ошибка: <span class="value"><?= $response ?></span></h1>
        <p><span class="label">Код ошибки:</span> <span class="value"><?= $errno ?></span></p>
        <p><span class="label">Текст ошибки:</span> <span class="value"><?= $errstr ?></span></p>
        <p><span class="label">Файл:</span> <span class="value"><?= $errfile ?></span></p>
        <p><span class="label">Строка:</span> <span class="value"><?= $errline ?></span></p>
    </div>
</body>
</html>
