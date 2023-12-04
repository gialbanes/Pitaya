<?php include("blades/header.php"); ?>
<?php include("../models/conexao.php"); ?>

<style>
    <?php include '../css/style.css'; ?>
</style>

<div class="container bg-white pt-2 mt-5 p-3 rounded-2 shadow">
<?php
$varBlogCodigo = $_GET["bloginfo_codigo"];
$query = mysqli_query($conexao, "SELECT * from bloginfo INNER JOIN blog ON blog_bloginfo_codigo = bloginfo_codigo where blog_codigo = $varBlogCodigo;");
while ($exibe = mysqli_fetch_array($query)) {
    ?>
    <h3 class="p-4 text-white" style="width:100%; height: 10%; background-color: #E2678E; font-size: 40px;">Atualizar</h3>
    <form action="../controllers/atualizar.php" method="post">
        
        <input type="hidden" name="bloginfo_codigo" value="<?php echo $exibe[0] ?>">

        <label class="form-label" style="font-size: 25px; margin-bottom: 15px;">Título:</label>
        <input class="form-control" type="text" name="noticiaTitulo" value="<?php echo $exibe[1] ?>"> <br>
        <label class="form-label" style="font-size: 25px; margin-bottom: 15px;">Corpo:</label>
        <input class="form-control"type="text" name="noticiaCorpo" value="<?php echo $exibe[2] ?>"> <br>
        <label class="form-label" style="font-size: 25px; margin-bottom: 15px;">Data:</label> <br>
        <input class="form-control"type="text" name="noticiaData" value="<?php echo $exibe[3] ?>"> <br>


        <label class="usuario" style="font-size: 25px; margin-bottom: 15px;">Selecione um usuário:</label>      
    <?php  
    $query = mysqli_query($conexao, "SELECT * FROM usuario ORDER BY usuario_codigo;");
    ?>
    <select name="noticiaUsuario" id="">
        <?php 
            while ($row = mysqli_fetch_array($query))
            {
                    echo "<option value='" . $row['usuario_codigo'] ."'>" . $row['usuario_nome'] ."</option>";
            }
        ?> 
    </select>

    <br>

    <label class="form-label mt-3 text-dark" style="font-size: 25px;">Selecione a imagem da notícia:</label><br>

        <div>
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999" >
            <input style="font-size: 20px;" type="file" name="arquivo[]" multiple="multiple" /> 

            <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="width:15%; height:10%; font-size:20px; margin-left: 80%;margin-top:30px;">Atualizar</button>
                        </div>


    </form>

    <style>
    body {
    background: rgb(226,103,142);
    background: linear-gradient(90deg, rgba(226,103,142,1) 0%, rgba(255,182,84,1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
</style>

    </body>
</html>

    

<?php } ?>
</div>
<?php include("blades/footer.php"); ?>