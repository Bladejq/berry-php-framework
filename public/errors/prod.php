<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            background: #f9fafb;
            font-family: 'Inter', sans-serif;
            color: #1f2937;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .card h2 {
            font-size: 24px;
            color: #ef4444;
            margin-bottom: 16px;
        }

        .card p {
            font-size: 16px;
            color: #4b5563;
            margin-bottom: 24px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>⚠️ Что-то пошло не так</h2>
        <p>Мы уже работаем над решением этой проблемы.<br>Если вам срочно нужно завершить заказ — свяжитесь с продавцом. Приносим извинения за временные неудобства</p>
        <a href="mailto:support@example.com" class="btn">Связаться с продавцом</a>
    </div>
</body>
</html>
