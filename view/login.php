<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="image">

            </div>
            <div class="login">
                <h1>Faça login!</h1>

                <label for="email">E-mail: </label>
                <input type="email">

                <label for="senha">Senha: </label>
                <input type="password">

                <br><br>

                <button class="btn-entrar"><a href="dashboard.php">Entrar</a></button> &nbsp; &nbsp;
            </div>
        </div>
    </div>

    <style>

        h1{
            color: white;
            text-align: center;
            font-family: "Krona One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        
        .container{
            background-color: #232946;
            width: 50%;
            flex-direction: column;
            margin-left: 50%;
            display: flex;
            position: fixed;
            height: -webkit-fill-available;
        }

        .content{
            border-radius: 8px;
            color: black;
            padding: 40px;
            flex-direction: column;
            display: flex;
            justify-content: space-between;
            margin: 135px;
            margin-bottom: 90px;
        }

        label {
            color: white;
            display: block;
            margin-top: 15px;
            font-size: 22px;
            
        }

        input{
            margin-top: 5px;
            border: 1px solid #bbb;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-entrar{
            width: 100%;
            background-color: #F2E0A6;
            color: #000;
         }


    </style>
</body>
</html>