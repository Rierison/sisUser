<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Perfil</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../sisUser/css/perfil.css"/>
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



  <div class="profile-container">


    <div class="left">


      <div class="1">
        <li><a class="link1" href="#">Minha Conta</a></li>
      </div>

      <div class="2">
        <li><a class="link2" href="#">Lista de Desejos</a></li>
      </div>

      <div class="3">
        <li><a class="link3" href="#">Categorias</a></li>
      </div>

      <div class="4">
        <li><a class="link4" href="#">Produtos</a></li>
      </div>


    </div>


    <main>

      <section class="profile-header">
        <h2>Meu perfil</h2>
        <p>Gerenciar e proteger sua conta</p>
      </section>

      <section class="profile-content">

        <form action="#">
          <div class="profile-field">
            <label for="username">Usuário(a):</label>
            <input class="username" id="username" type="text">
          </div>

          <div class="profile-field">
            <label for="name">Nome:</label>
            <input class="name" id="name" type="text">
          </div>

          <div class="profile-field">
            <label for="email">Email:</label>
            <input class="email" id="email" type="email">
          </div>

          <div class="profile-field">
            <label for="phone">Telefone:</label>
            <input class="phone" id="phone" hiden type="number">


          </div>



          <button type="submit">Gravar</button>
        </form>
      </section>


    </main>


  </div>

  </main>





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