<?php
include("../models/conexao.php");
include("../views/blades/header.php");
session_start();
?>

<style>
    <?php include '../css/style.css'; ?>
</style>



<header>
<nav class="navbar navbar-expand-lg" id="navarea">
    <div class="container px-1">

      <a class="navbar-brand" style="margin-left: -20%;" href="#hero">
      <img src="../imgs/logo.png" width="40%" class=logo> 
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 1%">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-4"  style="font-weight: 600; margin-right: -5%">
          <li class="nav-item" style="" id="navhover"> <a href="pitaya.php" class="btn btn3 fs-4" style=""><b class="navtext text-white">Home</b></a></li>
          <li style="width:70px"> </li>
          <li class="nav-item" id="navhover"><a href="../cms/index.php" class="btn btn3 fs-4"><b  class="navtext text-white">Login</b></a></li>
          <li style="width:70px"> </li>
          <li class="nav-item" id="navhover"><a href="../cms/cadastroUsuario.php" class="btn btn3 fs-4"><b  class="navtext text-white">Cadastrar usuário</b></a></li>
          <li style="width:70px"> </li>
          <li class="nav-item" id="navhover"><a href="post.php" class="btn btn3 fs-4"><b  class="navtext text-white">Cadastrar notícia</b></a></li>
        </ul>
      </div>
    </div>
  </nav>

</header>


    <div class="all" style=" margin-top: 7%;">
<div class="container" class="d-flex justify-content-center">
</div>
<div id="mainContent" class="text-center d-flex justify-content-center">
<div class="text-white">
</div>
</div>
    <div id="lista-noticias" class="mt-5 text-white" style="text-align: center; height: 50%; ">
        <h1>Notícias</h1>
    </div>

    <div class="container p-3 mt-5 rounded-4 shadow-lg" style="width:900px;">    
    <table class="table table-bordered table-striped">
    <tr>
                <td><b>Imagens</b></td>
                <td><b>Posts</b></td>
            </tr>
            <?php
            $query = mysqli_query($conexao, "SELECT * from blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimgs on blog_blogimgs_codigo = blogimgs_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo");
            while ($exibe = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td class="text-center align-middle">
                        <a class="text-primary" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                            <img src="../arquivos/<?php echo $exibe[11] ?>" width="150px">
                    </td>
                    <td class="align-middle p-3">
                        <a class="text-primary" href="page.php?blog_codigo=<?php echo $exibe[0] ?>">
                                <b><?php echo $exibe[5] ?></b>
                        </a>
                        <br>
                        <b> Criado por: </b>
                            <?php echo $exibe[13] ?>
                        </br>
                        <b> Data: </b>  
                        <?php echo $exibe[7] ?>
                        <hr style="border-width:3px; color:black">
                        <b><?php echo substr($exibe[6], 0, 18) . "..." ?></b>

                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </div>

    <footer class=" text-white pt-5 pb-4" style="background-color: #E2678E; width: 100%; margin-top: 12%;" >
  <div class="container text-md-left">
    <div class="row text-md-left">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold text-white">Sobre</h5>
        <hr class="mb-4">
        <div class="sobre-texto">
        PITAYA é uma equipe de desenvolvedores criada com o objetivo de desenvolver novas tecnologias voltadas para facilitar o cotidiano das pessoas. Nossa novidade é um alimentador automático para pets!
        </div>
      </div>
      

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold">Links</h5>
        <hr class="mb-4">
        <div class="links">
          <a href="#produto" class="text-white" style="text-decoration:none">Produto</a>
        </div>
        <div class="links">
          <a href="#objetivos" class="text-white" style="text-decoration:none">Objetivos</a>
        </div>
        <div class="links">
          <a href="#equipe" class="text-white" style="text-decoration:none">Equipe</a>
        </div>
        <div class="links">
          <a href="#contato" class="text-white" style="text-decoration:none">Contato</a>
        </div>
      </div>


      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold">Desenvolvido por:</h5>
        <hr class="mb-4">
        <div class="texto-footer">Anna Luiza Mariano <br> Dônovan Domingues <br> Giovana Albanês <br> João Paulo Goreri</div>
        <br>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class= "mb-4 font-weight-bold">Orientado por:</h5>
        <hr class="mb-4">
        <div class="texto-footer">
          Frederico Barbosa Muniz</div>
      </div>
      

      <script src="https://kit.fontawesome.com/469e36d200.js" crossorigin="anonymous"></script>
      <div class="row d-flex justify-content-center mt-5">
        <div class="text-center">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <div class="sociais">
                <div class="social">
              <a target="_blank" href="https://www.instagram.com/gialbanes/" class="text-white"><i class="fa-brands fa-instagram-square"></i></a>
            </li>
            <li class="list-inline-item">
              <div class="sociais">
                <div class="social">
              <a target="_blank" href="https://github.com/gialbanes" class="text-white"><i class="fa-brands fa-square-github"></i></a>
            </li>
            <li class="list-inline-item">
              <div class="sociais">
                <div class="social">
              <a target="_blank" href="https://www.linkedin.com/in/giovana-alban%C3%AAs-b95853231/" class="text-white"><i class="fa-brands fa-linkedin"></i></a>
            </li>
          </div>
          </div>
          </ul>
        </div>
      </div>



      
      <hr class="mb-4 mt-5">
      <div class="row d-flex justify-content-center text-center">
        <div>
          <div class="copyright">
            Copyright Design Pitaya © 2023. All rights reserved.
          </div>
        </div>
      </div>


    </div>
  </div>
</footer>
