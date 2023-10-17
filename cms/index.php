<?php
include("../models/conexao.php");
include("../views/blades/header.php");
?>

<style>
    <?php include '../css/style.css'; ?>
</style>

<div class="container p-5 mt-5 rounded" id="login">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card" style="width: 95%;">
            <h3 class="p-3 text-white" style="width:100%; height: 10%; background-color: #E2678E; font-size: 40px;">Login</h3>
                <div class="card-body">
                    <form action="../controllers/login.php" method="POST">
                        <div class="mb-3">
                            <label style="font-size: 25px;">Nome:</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label style="font-size: 25px;">Senha:</label>
                            <input type="password" name="senha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="width:15%; height:10%; font-size:20px; margin-left: 80%;">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../views/blades/footer.php")?>