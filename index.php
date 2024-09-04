<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projeto</title>
  <!-- Aqui estamos incluindo o CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Aqui estamos incluindo o CSS do Font Awesome para os ícones -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Aqui estamos incluindo o arquivo JavaScript do script personalizado -->
  <script src="script.js"></script>

  <style>
    /* Aqui estamos definindo um estilo opcional para ajustar a altura do conteúdo principal */
    #main-content {
      min-height: 100vh;
      /* Ajusta a altura para que o conteúdo principal ocupe o restante da tela, excluindo a altura da barra de navegação superior */
    }
  </style>
</head>

<body>
  <!-- Aqui começa o container principal -->
  <div class="container-fluid">
    <div class="row">
      <!-- Aqui começa a barra lateral de navegação -->
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
        <div class="position-sticky">
          <div class="pt-3">
            <!-- Aqui começa a lista de links de navegação -->
            <ul class="nav flex-column">
              <?php
              include("config.php");
              $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : ""; // Verifica se a página está definida na solicitação

              function isActive($currentPage, $pageName)
              {
                return $currentPage === $pageName ? 'active' : ''; // Adiciona a classe 'active' se a página estiver ativa
              }
              ?>
              <!-- Aqui está o link para a página inicial -->
              <li class="nav-item">
                <a class="nav-link <?php echo isActive($page, 'index'); ?> text-light <?php echo isActive($page, 'index') ? 'bg-light text-dark' : ''; ?> fs-5" aria-current="page" href="index.php">
                  <i class="fas fa-home me-2 <?php echo isActive($page, 'index') ? 'text-dark' : ''; ?> fs-4"></i>Home
                </a>
              </li>
              <!-- Aqui está o link para adicionar um novo usuário -->
              <li class="nav-item">
                <a class="nav-link <?php echo isActive($page, 'novo'); ?> text-light <?php echo isActive($page, 'novo') ? 'bg-light text-dark' : ''; ?> fs-5" href="?page=novo">
                  <i class="fas fa-user-plus me-2 <?php echo isActive($page, 'novo') ? 'text-dark' : ''; ?> fs-4"></i>Novo usuário
                </a>
              </li>
              <!-- Aqui está o link para listar os usuários -->
              <li class="nav-item">
                <a class="nav-link mb-3 <?php echo isActive($page, 'listar'); ?> text-light <?php echo isActive($page, 'listar') ? 'bg-light text-dark' : ''; ?> fs-5" href="?page=listar">
                  <i class="fas fa-users me-2 <?php echo isActive($page, 'listar') ? 'text-dark' : ''; ?> fs-4"></i>Listar usuários
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Aqui começa o conteúdo principal -->
      <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- Aqui está o container para o conteúdo -->
        <div class="container mt-5">
          <div class="row">
            <div class="col">
              <?php
              switch ($page) {
                case "novo":
                  include("novo-usuario.php");
                  break;
                case "listar":
                  include("listar-usuario.php");
                  break;
                case "salvar":
                  include("salvar-usuario.php");
                  break;
                case "editar":
                  include("editar-usuario.php");
                  break;
                default:
                  include("pagina-inicial.php");
              }
              ?>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>