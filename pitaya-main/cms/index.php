<?php
include("../models/conexao.php");
include("../views/blades/header.php");
?>

<style>
    <?php include '../css/style.css'; ?>
</style>

<div class="login-container">
    <div class="card">
        <h3 class="card-header">Login</h3>
            <div class="card-body">
                <form action="../controllers/login.php" method="POST">
                    <div class="form-group">
                        <label for="usuario">Nome:</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>

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

<?php include("../views/blades/footer.php")?>