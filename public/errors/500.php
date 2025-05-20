<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>500 — Ошибка сервера</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background-color: #ffffff;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 30px;
      border-radius: 16px;
      max-width: 900px;
      width: 90%;
      background-color: #fff;
    }

    .image {
      flex: 1 1 300px;
      text-align: center;
    }

    .image img {
      width: 100%;
      max-width: 350px;
      height: auto;
    }

    .content {
      flex: 1 1 300px;
    }

    .content h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .content p {
      font-size: 15px;
      color: #555;
      margin-bottom: 20px;
    }

    .buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 15px;
    }

    .btn {
      padding: 10px 20px;
      font-size: 14px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
      background-color: #f2f2f2;
    }

    .btn:hover {
      background-color: #e0e0e0;
    }

    .error-details {
      font-size: 13px;
      color: #999;
    }

    @media (max-width: 600px) {
      .content h1 {
        font-size: 20px;
      }

      .content p {
        font-size: 14px;
      }

      .btn {
        width: 100%;
        text-align: center;
      }

      .buttons {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image">
      <img src="/errors/images/500.jpg" alt="Ошибка" />
    </div>
    <div class="content">
      <h1>Ошибка обращения к сервису</h1>
      <p>Мы уже устраняем неисправность. Попробуйте обновить страницу позже. Приносим извинения за временные неудобства.</p>
      <div class="buttons">
        <button class="btn" onclick="location.reload()">🔄 Обновить страницу</button>
        <button class="btn" onclick="window.location.href='/'">🏠 На главную</button>
      </div>
      <div class="error-details">
        <strong>Описание ошибки:</strong> <?= $errstr ?> 500<br/> INTERNATIONAL_SERVER_ERROR<br/>
      </div>
    </div>
  </div>
</body>
</html>
