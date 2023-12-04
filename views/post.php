<?php
session_start();
if (empty($_SESSION)) {

}
include("../models/conexao.php");
include("../views/blades/header.php");
?>
<style>
    <?php include '../css/style.css'; ?>
</style>

<div class="container p-5 mt-5 rounded text-black" id="post">
    <h1 class="p-3" style="color: #E2678E; font-size: 40px; font-weight: bold;">Bem-vindo(a): <?php echo $_SESSION["usuario"] ?></h1>
        <hr class="border border-dark border-2 opacity-75"> <br>
            <h3 class="fw-bold" style="font-size: 30px;">Criar notícia</h3>
                <form name="criarNoticia" action="../controllers/cadastrar.php" enctype="multipart/form-data" method="post">
                    <label class="form-label lbl-input mt-4 text-dark" style="font-size: 23px;">Escolher Usuário:</label>
                        <select id="postagemUsuario" name="postagemUsuarioCodigo" required="postagemUsuario" class="form-select">
                            <?php
                                $res = mysqli_query($conexao, "SELECT * FROM usuario");
                                while ($row = mysqli_fetch_array($res)) {
                                    $usuarioCodigo = $row['usuario_codigo'];
                                    $co_name = $row['usuario_nome'];
                            ?>
                            <option value="<?php echo $usuarioCodigo; ?>"><?php echo $co_name; ?></option>
                            <?php } ?>
                        </select><br>
                        <label class="form-label lbl-input mt-2 text-dark" style="font-size: 23px;">Título:</label>
                        <input class="form-control" type="text" name="noticiaTitulo">
                        <label class="form-label lbl-input mt-4 text-dark" style="font-size: 23px;">Corpo:</label>
                        <textarea class="form-control" type="text" name="noticiaCorpo"></textarea> <br>
                        <label class="form-label lbl-input mt-2 text-dark" style="font-size: 23px;">Data:</label>
                        <input class="form-control" type="date" name="noticiaData" style="font-size: 25px;"><br> <hr>
                        <label class="form-label mt-3 text-dark" style="font-size: 23px;">Selecione a imagem da notícia:</label><br>
                            <div>
                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999" >
                                <input style="font-size: 20px;" type="file" name="arquivo[]" multiple="multiple" /> 
                                    <button type="submit" class="btn btn-primary" style="width:25%; height:10%; font-size:27px; margin-left: 75%;margin-top:30px; font-weight: bold">Cadastrar</button>
                            </div>
                    </form>
</div>

<style>
    body {
    font-family: Arial, sans-serif;
    background: rgb(226,103,142);
    background: linear-gradient(90deg, rgba(226,103,142,1) 0%, rgba(255,182,84,1) 100%);
}
.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
}
</style>

<?php include("../views/blades/footer.php"); ?>