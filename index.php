<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pitaya</title>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

  <link rel="stylesheet" href="css/style.css" type="text/css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</head>


<body style="font-family: 'Trebuchet MS', 'Helvetica', 'sans-serif'">


  <!-- NAVBAR -->
  <header>
    <nav class="navbar navbar-expand-lg" id="navarea">
      <div class="container px-1">
        <a class="navbar-brand" style="margin-left: -20%;" href="#hero">
          <img src="imgs/logo.png" width="100%" class=logo>
        </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 1%">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-4" style="font-weight: 600; margin-right: -5%">
                <li class="nav-item" id="navhover"> <a href="#sobre" class="btn btn3 fs-4" style=""><b class="navtext">Sobre</b></a></li>
                <li style="width:70px"> </li>
                <li class="nav-item" id="navhover"><a href="#objetivos" class="btn btn3 fs-4"><b class="navtext">Objetivos</b></a></li>
                <li style="width:70px"> </li>
                <li class="nav-item" id="navhover"><a href="#equipe" class="btn btn3 fs-4"><b class="navtext">Equipe</b></a></li>
                <li style="width:70px"> </li>
                <li class="nav-item" id="navhover"><a href="views/pitaya.php" class="btn btn3 fs-4"><b class="navtext">Notícias</b></a></li>
              </ul>
            </div>
        </div>
    </nav>

  </header>
  <!--
<div class="navarea">
  <div class="row">
    <div class="col-6">
      <a class="navbar-brand" href="#hero">
        <img src="imgs/logo.png" class="logo"> 
      </a>
    </div>
    <div class="col-6">
      <div class="items">
        <div class="row">
        <div class="col">
            <li class="nav-item" id="navhover"> 
              <a href="#sobre" class="btn btn3 fs-4" style="">
                <b class="navtext text-white">
                  Sobre
                </b>
              </a>
            </li>
          </div>
          <div class="col">
            <li class="nav-item" id="navhover"> 
              <a href="#sobre" class="btn btn3 fs-4" style="">
                <b class="navtext text-white">
                  Objetivos
                </b>
              </a>
            </li>
          </div>
          <div class="col">
            <li class="nav-item" id="navhover"> 
              <a href="#sobre" class="btn btn3 fs-4" style="">
                <b class="navtext text-white">
                  Equipe
                </b>
              </a>
            </li>
          </div>
          <div class="col">
            <li class="nav-item" id="navhover"> 
              <a href="#sobre" class="btn btn3 fs-4" style="">
                <b class="navtext text-white">
                  Contato
                </b>
              </a>
            </li>
          </div>
          <div class="col">
            <li class="nav-item"id="navhover"> 
              <a href="#sobre" class="btn btn3 fs-4" style="">
              <b class="navtext text-white">
                Notícias
              </b>
              </a>
            </li>
          </div>
        </div>  
      </div>
    </div>
  </div>
</div>
-->
  <!-- NAVBAR-->


  <!-- HERO SECTION-->



  <section id="hero">

    <div class="container-fluid" style="margin-top: 7%;">

      <div class="row" style="margin-left: 10%">
        <p>
          <!---------------------------------------------- --------------------------------------------------------------------->

        <div class="col-md-5" id="divtitulo">
          <figure class="text-left">
            <h1 class="titulo_intro">Alimente com amor, sem esforço!</h1>
          </figure>
          <figure class="texto_intro">
            PITAYA é uma equipe de desenvolvedores criada com o objetivo de desenvolver a tecnologia automatizada para
            conciliar o cotidiano das pessoas e uma rotina de alimentação dos pets!
          </figure>
        </div>

        <div class="col-md-7">
          <img src="imgs/inicio.png" class="inicio">
        </div>

      </div>

    </div>

  </section>

  <!--
<section id="hero">
<div class="container-fluid" id="hero">

<div class="col-md-5" style="padding-top: 5%; color: #fff;" id="divtitulo">
  <figure class="text-left">
    <h1 class="titulo_intro">Alimente com amor, sem esforço!</h1>
  </figure>
  <figure class="texto_intro">
  PITAYA é uma equipe de desenvolvedores criada com o objetivo de desenvolver a tecnologia automatizada para conciliar o cotidiano das pessoas e uma rotina de alimentação dos pets!
  </figure>
  </div>
  <img src="imgs/inicio.png" width="33%" style="padding: 5%;  margin-top: 3%;">
</section>
-->
  <!--HERO SECTION -->




  <!-- SOBRE -->
  <section class="container-fluid">

    <div class="row row d-flex justify-content-center" style="margin-left: 0%;margin-top:10%; margin-bottom: 10%;">

      <div class="col-md-6" style="color: #000000; padding-right: 3%;">
        <figure class="text-left">
          <h1 id="sobre">Alimentador automático para pets</h1>
        </figure>
        <figure class="text-left" style="font-size: 25px;">
          Este produto tem a finalidade de facilitar a alimentação dos animais e economizar o tempo dos pais de pets.
          Através de um aplicativo
          que você pode baixar no seu celular diretamente da play store, você poderá liberar a ração e água do pet da
          distância que você estiver,
          podendo também definir as quantidades necessárias, e tudo isso fora ou dentro do mesmo ambiente que o animal.
        </figure>
      </div>
      <img class="col-md-2" src="imgs/produto.jpg">
    </div>



    <div class="row row d-flex justify-content-center" style="margin-left: 6%" id="como_funciona">
      <div class="col-md-10" style="color: #000000;">
        <figure class="text-left">
          <h1 id="sobre" style="margin-left: 60px;">Como funciona?</h1>
        </figure>
        <figure class="text-left" style="margin-left: 60px; font-size: 25px; margin-right:12%;">
          O equipamento será construído por meio de canos e mangueiras, os quais terão sensores e outras peças do
          Arduino. Esse equipamento
          pode estar em vários ambientes, como: em casa, hotéis de pets, adestramentos e petshops.
        </figure>
      </div>

    </div>


  </section>

  <!-- END SOBRE -->



  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- OBJETIVOS DO PRODUTO -->
<div class="row position-relative text-center">
      <div class="col-md-11" style="color: #ffffff;">
        <figure class="text-left">
          <h1 class="position-relative text-center" id="objetivos">Objetivos do projeto</h1>
        </figure>
      </div>
    </div>
  <main class="cards">
  <section class="card contact">
    <div class="icon">
      <img src="imgs/dinheiro.png" class="img-fluid" alt="Imagem responsiva">
    </div>
    <h3 class="titulo-obj" style="font-size:25px;">Acessibilidade financeira</h3>
    <figure style="font-size:15px; font-family: 'Trebuchet MS', 'Helvetica', 'sans-serif'; font-weight:bold;">Projetar o alimentador automático com um custo acessível, tornando-o economicamente viável para a maior parte da população.</figure>
</section>
<section class="card shop">
    <div class="icon">
      <img src="imgs/durabilidade.png" class="img-fluid" alt="Imagem responsiva">
    </div>
    <h3 class="titulo-obj" style="font-size:25px;">Durabilidade e Qualidade</h3>
    <figure style="font-size:15px; font-family: 'Trebuchet MS', 'Helvetica', 'sans-serif'; font-weight:bold;">A durabilidade de um alimentador automático para pets é crucial para seu uso prolongado. A qualidade é evidenciada por materiais resistentes e programação precisa.</figure>
</section>
<section class="card about">
    <div class="icon">
      <img src="imgs/acessibilidade.png" class="img-fluid" alt="Imagem responsiva">
    </div>
    <h3 class="titulo-obj" style="font-size:25px;">Acessibilidade e Usabilidade</h3>
    <figure style="font-size:15px; font-family: 'Trebuchet MS', 'Helvetica', 'sans-serif'; font-weight:bold;">Projetar o alimentador automático levando em consideração a facilidade de uso para diferentes públicos, incluindo pessoas com deficiências físicas ou limitações.</figure>
</section>
<section class="card about">
    <div class="icon">
      <img src="imgs/ideia.png" class="img-fluid" alt="Imagem responsiva">
    </div>
    <h3 class="titulo-obj" style="font-size:25px;">Conscientização e Educação</h3>
    <figure style="font-size:15px; font-family: 'Trebuchet MS', 'Helvetica', 'sans-serif'; font-weight:bold;">Promover a conscientização sobre a importância da alimentação adequada para os pets e os benefícios de um alimentador automático.</figure> 
</section>
</main>
</div>




  <!--
  <section class="container-fluid" style="">


    <div class="row position-relative text-center" style="">
      <div class="col-md-11" style="color: #ffffff;">
        <figure class="text-left">
          <h1 class="position-relative text-center" id="objetivos">Objetivos do projeto</h1>
        </figure>
      </div>
    </div>

    <br>

    <div class="container-fluid d-flex justify-content-around" style="width: 100%;">
      <div class="card" style="border-top-left-radius: 65px; border-bottom-right-radius: 65px;">
        <div class="card-inner">
          <img src="imgs/dinheiro.png" width="40%">
            style="margin-left: 28%;padding: 2%;display: flex; align-content:center;margin-top: 7%;">
          <br>
          <figure class="fs-4 text-center" style="color: #ffb654;text-transform: uppercase;"><b>Acessibilidade
              financeira</b></figure>

          <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Projetar o alimentador automático com
            um custo acessível,
            tornando-o economicamente viável para a maior parte da população.</figure>

        </div>
      </div>


      <div class="card" style="border-top-left-radius: 65px; border-bottom-right-radius: 65px;">

        <div class="card-inner" style="">
          <img src="imgs/durabilidade.png" width="40%">
            style="padding: 2%;margin-left: 28%;display: flex; align-content:center; margin-top: 7%;">
          <br>
          <figure class="fs-4 text-center" style="color: #ffb654;text-transform: uppercase;"><b>Durabilidade e
              Qualidade</b></figure>

          <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Garantir a durabilidade do alimentador
            automático, utilizando materiais resistentes e de alta qualidade.</figure>

        </div>
      </div>


      <div class="card" style="border-top-left-radius: 65px; border-bottom-right-radius: 65px;">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="card-inner">
          <img src="imgs/acessibilidade.png" width="40%">
            style="padding: 4%;margin-left: 28%;display: flex; align-content:center;margin-top: 7%;">
          <br>
          <figure class="fs-4 text-center" style="color: #ffb654;text-transform: uppercase;"><b>Acessibilidade e
              Usabilidade</b></figure>

          <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Projetar o alimentador automático
            levando em consideração a facilidade de uso para diferentes públicos, incluindo pessoas com deficiências
            físicas ou limitações.</figure>

        </div>
      </div>


      <div class="card" style="border-top-left-radius: 65px; border-bottom-right-radius: 65px;">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="card-inner">
          <img src="imgs/ideia.png" width="40%">
            style="padding: 4%;margin-left: 28%;display: flex; align-content:center;margin-top: 7%;">
          <br>
          <figure class="fs-4 text-center" style="color: #ffb654;text-transform: uppercase;"><b>Conscientização e
              Educação</b></figure>

          <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Promover a conscientização sobre a
            importância da alimentação adequada para os pets e os benefícios de um alimentador automático</figure>

        </div>
      </div>
    </div>
  </section>
-->
  <!-- END OBJETIVOS -->

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- OBJETIVOS DA EQUIPE -->
  <div class="row d-flex justify-content-center">
    <div class="col-md-7">

      <figure class="text-left">
        <h1 style="color: #E2678E; font-weight:bold; margin-left: 40px;font-size: 45px;">Por que devo ter um alimentador
          automático?</h1>
      </figure>

      <br>
      <br>
      <br>

      <div class="d-flex justify-content-around" id="geral" style="margin-left: -70px">

        <div class="container-flex text-center col-md-4" id="bloco1">
          <img src="imgs/tempo.png" class="imagecard" alt="..."
            style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);z-index: 1;">
          <br>
          <p>
          <section class="text" style="padding-right: 0%; font-size:25px;"><b>Economiza tempo</b></section>
        </div>

        <div class="container-flex  text-center col-md-4" id="bloco2">
          <img src="imgs/calendario.png" class="imagecard" alt="..."
            style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
          <br>
          <p>
          <section class="text" style="padding-right: 3%; font-size:25px;"><b>Mantém os horários de alimentação
              regulados</b></section>
        </div>

        <div class="container-flex  text-center col-md-4" id="bloco3">
          <img src="imgs/distancia.png" class="imagecard" alt="..."
            style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
          <br>
          <p>
          <section class="text" style="padding-right: 3%; font-size:25px;"><b>Permite alimentar o pet a distância</b>
          </section>
        </div>

        <div class="container-flex  text-center col-md-4" id="bloco4">
          <img src="imgs/petshop.png" class="imagecard" alt="..."
            style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
          <br>
          <p>
          <section class="text" style="padding-right: 3%; padding-left: 3%; font-size:25px;"><b>Facilita a alimentação
              em hotéis para pets</b></section>
        </div>

      </div>


    </div> <!---->


  </div>




  <!-- END OBJETIVOS DA EQUIPE -->



  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>




  <!-- EQUIPE -->



  <figure class="text-center" style="margin-left: -6%">
    <h1 style="color: #E2678E;font-weight:bold;font-size: 45px;" id="equipe">Equipe</h1>
  </figure>

  <br>
  <br>


  <div class="row d-flex justify-content-center">

    <div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="jp">
      <div class="row g-0" style="">
        <div class="col-md-4 d-flex align-items-center" style="border-radius:90px;">
          <img id="foto" src="imgs/jp.png" class="img-fluid" style="width: 100%; border-radius: 90px;margin-left: 0%;"
            alt="...">
        </div>
        <div class="col-md-8" style="">
          <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%">
            <h5 class="card-title fs-4" style="color: #E2678E;"><b>João Paulo</b></h5>
            <p class="card-text fs-4"><b>Designer</b></p>
            <p class="card-text" style="margin-left: -1%; word-spacing: 10px;">
              <br>
              <a href="https://www.instagram.com/joo_paulou/" target="a/blank"><img id="social" src="imgs/instagram.png"
                  class="img-fluid rounded-start" style="width:12%" alt="..."></a>
              <a href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/github.png"
                  class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              <a href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/linkedin.png"
                  class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-1" style="margin-right: -4%">
    </div>



    <div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="gi">
      <div class="row g-0" style="">
        <div class="col-md-4 d-flex align-items-center" style="border-radius:90px;">
          <img id="foto" src="imgs/gi.png" class="img-fluid" style="width: 100%; border-radius: 90px;margin-left: 0%"
            alt="...">
        </div>
        <div class="col-md-8" style="">
          <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%">
            <h5 class="card-title fs-4" style="color: #E2678E;"><b>Giovana Albanês</b></h5>
            <p class="card-text fs-4"><b>Desenvolvedora web</b></p>
            <p class="card-text" style="margin-left: -1%;word-spacing: 10px;">
              <br>
              <a href="https://www.instagram.com/gialbanes/" target="a/blank"><img id="social" src="imgs/instagram.png"
                  class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              <a href="https://github.com/gialbanes" target="a/blank"><img id="social" src="imgs/github.png"
                  class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              <a href="https://www.linkedin.com/in/giovana-alban%C3%AAs-b95853231/" target="a/blank"><img id="social"
                  src="imgs/linkedin.png" class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <br>
  <p>
    <br>



  <div class="row d-flex justify-content-center">



    <div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="anna">
      <div class="row g-0" style="">
        <div class="col-md-4 d-flex align-items-center" style="border-radius:90px;">
          <img id="foto" src="imgs/anna.png" class="img-fluid" style="width: 100%; border-radius: 90px;margin-left: 0%"
            alt="...">
        </div>
        <div class="col-md-8" style="">
          <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%">
            <h5 class="card-title fs-4" style="color: #E2678E;"><b>Anna Luiza</b></h5>
            <p class="card-text fs-4"><b>Programação Mobile</b></p>
            <p class="card-text" style="margin-left: -1%;word-spacing: 10px;">
              <br>
              <a href="https://www.instagram.com/mariano__anna/" target="a/blank"><img id="social"
                  src="imgs/instagram.png" class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              <a href="https://github.com/annaluiza29" target="a/blank"><img id="social" src="imgs/github.png"
                  class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              <a href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/linkedin.png"
                  class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-1" style="margin-right: -4%">
    </div>



    <div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="donovan">
      <div class="row g-0 " style="">
        <div class="col-md-4 d-flex align-items-center" style="border-radius:90px;">
          <img id="foto" src="imgs/donovan.png" class="img-fluid"
            style="width: 100%; border-radius: 90px;margin-left: 0%" alt="...">
        </div>
        <div class="col-md-8" style="">
          <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%;">
            <h5 class="card-title fs-4" style="color: #E2678E; width:400px;"><b>Dônovan Domingues</b></h5>
            <p class="card-text fs-4" style=" width:400px"><b>Modelo Físico do produto</b></p>
            <p class="card-text" style="margin-left: -1%;word-spacing: 10px;">
              <br>
              <a href="https://www.instagram.com/donovan_d.d.2.8/" target="a/blank"><img id="social"
                  src="imgs/instagram.png" class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              <a href="https://github.com/Donovandd28" target="a/blank"><img id="social" src="imgs/github.png"
                  class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              <a href="https://www.linkedin.com/in/d%C3%B4novan-domingues-012856231/" target="a/blank"><img id="social"
                  src="imgs/linkedin.png" class="img-fluid rounded-start" style="width: 12%" alt="..."></a>
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>



  <!-- END EQUIPE -->




  </div> <!-- fechamento wrapper -->

  <br>
  <br>
  <br>
  <br>
  <br>





</body>

<script src="script.js"></script>

</html>

<!-- FOOTER -->
<footer class=" text-white pt-5 pb-4" style="background-color: #E2678E; width: 100%;">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold text-white" style="font-size:25px;">Sobre</h5>
        <hr class="mb-4">
        <div class="texto-footer" style="font-size:20px;"> PITAYA é uma equipe de desenvolvedores criada com o objetivo
          de desenvolver a tecnologia automatizada para conciliar o cotidiano das pessoas e uma rotina de alimentação
          dos pets!
        </div>
      </div>


      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold" style="font-size:25px;">Links</h5>
        <hr class="mb-4">
        <div class="links">
          <a href="#sobre" class="text-white" style="text-decoration:none; font-size:20px;">Sobre</a>
        </div>
        <div class="links">
          <a href="#objetivos" class="text-white" style="text-decoration:none; font-size:20px;">Objetivos</a>
        </div>
        <div class="links">
          <a href="#equipe" class="text-white" style="text-decoration:none; font-size:20px;">Equipe</a>
        </div>
        <div class="links">
          <a href="../views/pitaya.php" class="text-white" style="text-decoration:none; font-size:20px;">Notícias</a>
        </div>
      </div>


      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold" style="font-size:25px;">Desenvolvido por:</h5>
        <hr class="mb-4">
        <div class="texto-footer" style="font-size:20px;">Anna Luiza Mariano <br> Dônovan Domingues <br> Giovana Albanês
          <br> João Paulo Goreri
        </div>
        <br>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold" style="font-size:25px;">Orientado por:</h5>
        <hr class="mb-4">
        <div class="texto-footer" style="font-size:20px;">
          Ramon Trigo</div>
      </div>


      <script src="https://kit.fontawesome.com/469e36d200.js" crossorigin="anonymous"></script>
      <div class="row d-flex justify-content-center mt-5">
        <div class="text-center">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <div class="social">
                <a target="_blank" href="https://github.com/gialbanes" class="text-white"><i
                    class="fa-brands fa-square-github"></i></a>
            </li>
        </div>
        </ul>
      </div>
    </div>




    <hr class="mb-4 mt-5">
    <div class="row d-flex justify-content-center text-center">
      <div>
        <div class="texto-footer" style="font-size:20px;">
          Copyright Design Pitaya © 2023. All rights reserved.
        </div>
      </div>
    </div>


  </div>
</footer>

<!-- END FOOTER -->

<script src="script.js"></script>
</body>

</html>