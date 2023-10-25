<?php
include("../models/conexao.php");
include("../views/blades/header.php");
session_start();
?>

<style>
    <?php include '../css/style.css'; ?>
</style>


<!-- NAVBAR -->
<div class="navbar">
        <img src="../imgs/logo.png" alt="Logo da Minha Empresa" class="logo">
        <ul class="nav-links">
            <li class="nav-item" id="navhover"><a href="pitaya.php">Home</a></li>
            <li class="nav-item" id="navhover"><a href="../cms/index.php">Login</a></li>
            <li class="nav-item" id="navhover"><a href="../cms/cadastroUsuario.php">Cadastrar Usuário</a></li>
            <li class="nav-item" id="navhover"><a href="post.php">Cadastrar Notícia</a></li>
        </ul>
    </div>
<!-- END NAVBAR -->


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
<div class="container p-3 mt-5 rounded-4 shadow-lg" style="margin-bottom: 10%;" >    
  <table class="table table-bordered table-striped">
    <tr>
      <th scope="col">Imagens</th>
      <th scope="col">Posts</th>
    </tr>
    <?php
      $query = mysqli_query($conexao, "SELECT * from blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimgs on blog_blogimgs_codigo = blogimgs_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo");
      while ($exibe = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td class="text-center align-middle">
        <a class="text-primary" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
          <img src="../arquivos/<?php echo $exibe[11] ?>" width="150px" alt="Imagem Notícia">
        </a>
      </td>
      <td class="align-middle p-3">
        <a class="text-primary" href="page.php?blog_codigo=<?php echo $exibe[0] ?>">
          <b><?php echo $exibe[5] ?></b>
        </a> <br>
        <b> Criado por: </b>
        <?php echo $exibe[13] ?><br>
        <b> Data: </b>  
        <?php echo $exibe[7] ?>
        <hr class="mt-2">
        <b><?php echo substr($exibe[6], 0, 18) . "..." ?></b>
      </td>
    </tr>
<?php } ?>
</table>
</div>
</div>
</div>

<footer class=" text-white pt-5 pb-4" style="background-color: #E2678E; width: 100%;">
  <div class="container text-md-left">
    <div class="row text-md-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold text-white" style="font-size:25px;">Sobre</h5>
        <hr class="mb-4">
        <div class="texto-footer" style="font-size:20px;"> PITAYA é uma equipe de desenvolvedores criada com o objetivode desenvolver a tecnologia automatizada para conciliar o cotidiano das pessoas e uma rotina de alimentação dos pets!
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
        <div class="texto-footer" style="font-size:20px;">Anna Luiza Mariano <br> Dônovan Domingues <br> Giovana Albanês <br> João Paulo Goreri
        </div>
        <br>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold" style="font-size:25px;">Orientado por:</h5>
        <hr class="mb-4">
        <div class="texto-footer" style="font-size:20px;">Frederico Muniz</div>
      </div>
      <script src="https://kit.fontawesome.com/469e36d200.js" crossorigin="anonymous"></script>
      <div class="row d-flex justify-content-center mt-5">
        <div class="text-center">
        <ul class="nav-links">
            <li class="nav-item" id="navhover" style="margin-left:47%;"><a href="https://github.com/Pitaya-01" target="a/blank">Contato: Pitaya</a></li>
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

      <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
@media (max-width: 768px) {
    .container {
        max-width: 100%;
    }

    table {
        font-size: 14px;
    }
}
</style>

    </div>
  </div>
</footer>
