<?php
include("../models/conexao.php");
include("blades/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Blog</title>
</head>

<body>
    
<div class="pct container">
        <h3 class="fw-bold text-dark" style="font-size: 40px;text-align: center; height: 50%;margin-top: 10%;">Gerenciar notícias</h3>
        <div class="table-responsive">
            <table class="table table-rounded border-secondary-emphasis table-striped table-hover shadow mt-5" id="tabela">
                <tr>
                    <th class="fw-bold">Imagens</th>
                    <th class="fw-bold">Postagens</th>
                    <th class="fw-bold">Editar</th>
                    <th class="fw-bold">Excluir</th>
                </tr>
                <?php
                $query = mysqli_query($conexao, "SELECT * from blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimgs on blog_blogimgs_codigo = blogimgs_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo");
                while ($exibe = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td class="text-center align-middle"><img src="../arquivos/<?php echo $exibe[11] ?>" width="100px"></td>
                        <td class="align-middle p-3">
                            <h3>
                                <?php echo $exibe[5] ?>
                            </h3>
                            <b> Criado por: </b>
                            <?php echo $exibe[13] ?>
                            <br>
                            <b> Data: </b>
                            <?php echo $exibe[7] ?>
                            <hr>
                            <b><?php echo substr($exibe[6], 0, 1000)  ?></b>
                        </td>
                        <td class="text-center align-middle">
                            <a class="btn btn-primary d-grid" href="cadastroAtualiza.php?bloginfo_codigo=<?php echo $exibe[0] ?>">Editar</a>
                        </td>
                        <td class="text-center align-middle">
                            <a class="btn btn-danger d-grid" href="../controllers/deletar.php?bloginfo_codigo=<?php echo $exibe[0] ?>&amp;imagemNome=<?php echo $exibe[6] ?>&amp;noticiaInfoCodigo=<?php echo $exibe[2] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
                </div>

<style>

    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

</style>

</html>