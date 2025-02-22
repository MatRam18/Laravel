<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
    body {
        background-image: url('https://64.media.tumblr.com/8c0654899e89f9271f4f1bc60c54446d/0e83f722703cc997-20/s1280x1920/19505d3ea5b609a1ce32a89b45c683076a45251c.jpg');
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
    }

    .form-container {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        width: 400px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
        margin-right: 15px;
        background-color: #f5f5f5;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button[type="submit"] {
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    .button1 {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: rgb(20, 226, 100);
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-self: center;
        }
        .button1 a {
            text-decoration: none;
            color: #000000;
        }
</style>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Formulário</h1>
            <form action="/form" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Enviar</button>
                <button class="button1"><a href="/">Voltar</a></button>
            </form>
        </div>

    </div>
</body>
</html>