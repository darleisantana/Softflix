<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Desing-cadastro.css">
    <title>SoftFlix - Cadastro</title>

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
               <form action="db.php" method="get" class="form-entrar">
                    <input type="text" id="name" name="name" class="formulario" placeholder="Nome" required>
                    <input type="email" name="email" id="email" class="formulario" placeholder="E-mail" required>
                    <input type="password" id="senha" name="password" class="formulario" placeholder="Senha" required>
                    <button type="submit">CADASTRAR</button>
               </form>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/b7a9451fee.js" crossorigin="anonymous"></script>
</body>
</html>