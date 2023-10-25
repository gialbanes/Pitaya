<?php
include("../models/conexao.php");
include("../views/blades/header.php");
?>

<style>
    <?php include '../css/style.css'; ?>
</style>

<div class="register-container">
    <div class="card">
        <h3 class="card-header">Cadastrar usuário</h3>
            <div class="card-body">
                <form action="../controllers/cadastrarusuario.php" method="POST">
                    <div class="form-group">
                        <label for="nomeUser">Nome:</label>
                        <input type="text" id="nomeUser" name="nomeUser" class="form-control" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="emailUser">Email:</label>
                        <input type="text" id="emailUser" name="emailUser" class="form-control" placeholder="Digite seu email" required>
                    </div>
                    <div class="form-group">
                        <label for="senhaUser">Senha:</label>
                        <input type="password" id="senhaUser" name="senhaUser" class="form-control" placeholder="Digite sua senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>


<style>
    body {
    font-family: Arial, sans-serif;
    background: rgb(226,103,142);
    background: linear-gradient(90deg, rgba(226,103,142,1) 0%, rgba(255,182,84,1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
</style>

<?php include("../views/blades/footer.php") ?>