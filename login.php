<?php
session_start();
require 'config.php';

// Processar o login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se o login é para o administrador
    if ($email === 'admin@exemplo.com' && hash('sha256', $senha) === hash('sha256', 'senha_admin')) {
        $_SESSION['user_id'] = 1; // ID do administrador
        header('Location: crud.php');
        exit();
    } else {
        // Buscar informações dos clienets normal
        $stmt = $pdo->prepare('SELECT id, perfil, senha FROM clientes WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Verificar se a senha está correta
        if ($user && hash('sha256', $senha) === $user['senha']) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: crud.php');
            exit();
        } else {
            $error = 'Email ou senha incorretos!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../sisUser/css/login.css" />
</head>

<body>
  <header>
    <!--Logo da página -->
    <a href="" class="logo">LudoFashion</a>

    <!--Seção de busca-->

    <form action="" id="form-buscar">
      <input type="search" name="buscar" id="buscar" placeholder="Pesquise por marca, produto ou categoria..." />

      <!--Lupa de busca-->

      <button type="submit" id="btn-buscar">
        <button class="img">
          <img src="../sisUser/imgs/searchwhite.png" alt="" width="30px" />
        </button>
      </button>
    </form>

    <!--Cadatrar ou fazer o login dos usuários -->
    <!--Tirar as dúvidas-->

    <form>

      <div>
        <a href="" class="icon-link">
          <img class="text1" src="../sisUser/imgs/person100.png" alt="" width="30px" />cadastre-se<br />ou faça login
        </a>



        <a href="" class="icon-link">
          <img class="text2" src="../sisUser/imgs/help.png" alt="" width="30px" />dúvidas
        </a>

      </div>

    </form>
  </header>

  <nav>
    <a href="" class="font">Catálogo</a>

    <a href="" class="font">Sobre a Loja</a>
  </nav>




    
      
      <div class="tela-login">

        <h1 class="login">Login</h1>

       <form method="post" action="">

        <div class="tela">
          <label class="tela-email">Email:</label>
          <input class="email"  type="email" name="email" placeholder="Digite seu email" required>
        </div>

        <div class="tela">
          <label class="tela-senha">Senha:</label>
          <input class="senha" type="password" name="senha" placeholder="Digite sua senha" required>
        </div>
        
        
        <button type="submit" id="botao">Entrar</button>
                
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
        </form>

        
        <!-- Formulário para login do administrador -->

        <div class="container-adm">

          <h2 class="adm">Administrador</h2>

          <form method="post" action="">

           <input type="hidden" name="email" value="admin@exemplo.com">
           <input type="hidden" name="senha" value="senha_admin">
           <button class="botao-adm" type="submit">Entrar como Administrador</button>

          </form>

        </div>     


      </div> 


 


  <footer class="footer_dad">
    <div id="footer_content">
      <div class="footer_contacts">
        <h1>LudoFashion</h1>
        <p>Venha realizar seus sonhos</p>

        <div id="footer_social_media">
          <a href="" class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="" class="footer-link" id="facebook">
            <i class="fa-brands fa-facebook-f"></i>
          </a>

          <a href="" class="footer-link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
          </a>

          <a href="" class="footer-link" id="twitter">
            <i class="fa-brands fa-x-twitter"></i>
          </a>
          <a href="" class="footer-link" id="tiktok">
            <i class="fa-brands fa-tiktok"></i>
          </a>
        </div>
      </div>

      <ul class="footer-list">
        <h2>Blog</h2>

        <li>
          <a href="#" class="footer-link">Tech</a>
        </li>

        <li>
          <a href="#" class="footer-link">Adventures</a>
        </li>

        <li>
          <a href="#" class="footer-link">Music</a>
        </li>
      </ul>

      <ul class="footer-list">
        <h2>Produtos</h2>

        <li>
          <a href="#" class="footer-link">App</a>
        </li>
        <li>
          <a href="#" class="footer-link">Desktop</a>
        </li>
        <li>
          <a href="#" class="footer-link">Cloud</a>
        </li>
      </ul>

      <div id="footer_subscribe">
        <h3>Inscreva-se</h3>

        <p>Digite seu e-mail para ser notificado das nossas promoções</p>

        <div id="input_group">
          <input type="email" id="email" />

          <button>
            <i class="fa-regular fa-envelope"></i>
          </button>
        </div>
      </div>
    </div>
    <div id="footer_copyright">
      <!-- &#169 -->
      <p>©️ 2024 LudoFashion. Todos os direitos reservados</p>
    </div>
  </footer>


</body>

</html>