<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #444;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        .note {
            font-size: 12px;
            color: #888;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Форма регистрации</h1>
    <form method="post" action="http://localhost:8080/registration">
        <?= csrf_field() ?>

        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Введите ваш email" required>

        <button type="submit">Зарегистрироваться</button>
    </form>
    <p class="note">Все поля обязательны для заполнения.</p>
</div>
</body>
</html>
