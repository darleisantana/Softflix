<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Desing-entrar.css">
    <title>SoftFlix - entrar</title>

    <!--Responsividade-->
    <link rel="stylesheet" type="text/css" href="css/responsividade.css">

</head>
<body>
    <header>
        <div class="conteiner">
            <a href="index.php"><h2 class="logo">SOFTFLIX</h2></a>
        </div>
    </header>
    <main>
        <div class="fundo">
            <div class="container">
                <nav class="back"></nav>
               <form action="mysql/loginconnect.php" method="post" class="form-entrar">
                    <input type="email" name="email" id="email" class="formulario" placeholder="E-mail" required>
                    <input type="password" name="password" id="senha" class="formulario" placeholder="Senha" required>
                    <button type="submit">entrar</button>
               </form>
            </div>
        </div>
    </main>



    <script src="https://kit.fontawesome.com/b7a9451fee.js" crossorigin="anonymous"></script>
</body>
</html>