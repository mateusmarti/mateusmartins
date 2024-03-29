<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MT Cell: Qualidade com preço baixo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg menu">
        <div class="container-fluid">
          <a class="nav-link" href="index.html">
            <img src="img/logo.png" alt="" width="50px"> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse itens-header" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="https://wa.me/5521990853560" target="_blank">WhatsApp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="mailto:mateus.martins.rj@gmail.com" target="_blank">E-Mail</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="acessorios.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Acessórios
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="acessorios.html#capas">Capas</a></li>
                  <li><a class="dropdown-item" href="acessorios.html#peli">Películas</a></li>
                  <li><a class="dropdown-item" href="acessorios.html#caixas">Caixas de Som</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="adm/logout.php" class="nav-link text-white">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!--CARROSSEL-->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carrossel">
          <div class="carousel-item active">
            <img src="img/carrossel-01.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrossel-02.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrossel-03.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!--SOBRE NÓS-->
      <div class="col-12 sobre">
          <div class="linhaComTexto">
            <span style="color: #4161BF">Sobre Nós</span>
          </div>

          <div class="col-12 col-md-4 img-sobre">
            <img src="img/imagem-sobre.png" alt="" width="70%">
          </div>
          <div class="col-12 col-md-8 texto-sobre">
            <h1 style="text-align: center;">Titulo</h1>
            <p style="font-size: 20px;">Somos uma micro-empresa especializada em manutenções em SmartPhones, Tablets, NoteBooks e Computadores. Trabalhamos no ramo desde de 2019, tendo assim mais de 3 anos de experiência. Realizamos serviços com prazos de até 3 dias úteis, com peças totalmente originais <i><strong>(peças paralelas por responsabilibade do cliente)</strong></i> e serviço especializado feito por técnicos formados. Nos localizamos em Padre Miguel, e realizamos serviços para as zonas oeste, norte e baixada.</p>
          </div>
        </div>


      <!--CARDS-->
      <div class="row row-cols-1 row-cols-md-3 g-4 produtos">
        <div class="col">
          <div class="card h-100 cartao zoom">
            <img src="img/ip-xr.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Capinha de iPhone</h5>
              <h1 class="card-text">R$29,99</h1>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 cartao zoom">
            <img src="img/capinha-silicone.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Capinha de Silicone</h5>
              <h1 class="card-text">R$24,99</h1>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 cartao zoom">
            <img src="img/capinha-fla.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Capinha do Flamengo</h5>
              <h1 class="card-text">R$24,99</h1>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      
  
      </div>

      <footer class="meufooter text-center">
  
        <div class="col-12 col-md-6 dev">
           
           <h1 class="text-white text-center">Desenvolvedores</h1>
           
           <ul>
             <li><a class="btn btn-outline-primary botoes" href="https://github.com/mateusmarti" target="_blank">Mateus Martins</a></li><br>
             <li><a class="btn btn-outline-primary botoes" href="https://github.com/Gustavocassaro" target="_blank">Gustavo Cassaro</a></li><br>
             <li><a class="btn btn-outline-primary botoes" href="https://github.com/KLCria21" target="_blank">Kalebe Gadioli</a></li><br>
           </ul>
        
        </div> 
        
        <div class="col-12 col-md-6 red">
      
           <h1 class="text-white text-center">Redes Sociais</h1> 
            <ul>
              <li><a class="btn btn-outline-primary" href="https://instagram.com/mateusmartins1094" target="_blank">Mateus</a></li><br>
              <li><a class="btn btn-outline-primary" href="https://instagram.com/_gustavocassaro4" target="_blank">Gustavo</a></li><br>
              <li><a class="btn btn-outline-primary" href="https://instagram.com/ksgadioli" target="_blank">Kalebe</a></li><br>
            </ul>
      
        </div>

      <div class="col-12 col-md-12">
        <p>Loop Nerd - Todos os Direitos Reservados.</p> 
      </div>
      
      </footer>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
   </body>
</html>