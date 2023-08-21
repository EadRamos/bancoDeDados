<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto Banco Dados</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        *:visited, *:link {
            color: black;
        }
        .divcantois {
            justify-self: right;
            align-self: flex-start;
        }
        .divgrande {
            width: 800px;
            height: auto;
            padding: 15px;
            margin: 10px;
        }
        .divmedio {
            width: 450px;
            height: auto;
            padding: 10px;
            margin: 5px;
        }
        .divpequeno {
            width: 200px;
            height: auto;
            padding: 10px;
            margin: 5px;
        }
        .divcenter {
            flex-direction: column;
            display: flex;
            align-items: center;
            justify-content: center
        }
        .divcanto {
            flex-direction: column;
            display: flex;
            align-items: flex-start;
            justify-content: space-around;
        }
        .color1 {
            background-color: rgb(36, 166, 253);
            color: rgb(14, 14, 14);
        }
        .color2 {
            background-color: rgb(4, 46, 75);
            color: white;
        }
        .color3 {
            background-color: rgb(30, 32, 32);
            color: rgb(36, 166, 253);
        }
        .aredon {
            border-radius: 5px;
        }
        .linha {
            border: 1px solid rgba(19, 21, 22, 0.568);
        }
        .titulo {
            padding: 10px;
            text-align: center;
        }
        .font1 {
            font-size: 2rem;
        }
        .font2 {
            font-size: 1.2rem;
        }
        .font3 {
            font-size: 3rem;
        }
    </style>
</head>
<body style="width: 100%" class="divcenter">
    @yield('sessao');
</body>
</html>
