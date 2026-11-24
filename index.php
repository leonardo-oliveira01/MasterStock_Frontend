<?php
include __DIR__ . '/inc/header.inc.php';

?>


</div>
<div>
    <h1>O que deseja fazer hoje?</h1>
    <h2>Quarta-feira, dia 11 de novembro de 2026</h2>
</div>

<div class="d-flex flex-column align-items-center">

    <div class="card d-flex flex-row justify-content-start w-25 mb-5">
        <a href="adicionarProduto.php">

            <button class="btn btn-primary">

                <h1>Adicionar produto no estoque</h1>

            </button>
        </a>
        <img src="img\add.png" class="d-flex w-90" height="110" alt="Adicionar produto">
    </div>

    <div class="card d-flex flex-row justify-content-start w-25 mb-2">
        <a href="removerProduto.php">

            <button class="btn btn-primary">

                <h1>Retirar produto do estoque</h1>

            </button>
        </a>
        <img src="img\remover.png" class="d-flex w-70" height="100" alt="remover produto">
    </div>
    
    <div class="text-center mt-2">
    <button class="btn btn-primary">
        Sugestões do dia
    </button>
</div>

</div>

<h2 class="fw-bold mb-1">Movimentação de hoje</h2>
<p class="text-muted mb-4">Resumo das atividades do sistema</p>

<div class="container-fluid px-0">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div class="card-body">
                    <p class="text-muted mb-2">Entradas</p>
                    <h2 class="fw-bold text-success mb-1">142 un.</h2>
                    <small class="text-muted">Produtos recebidos hoje</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div class="card-body">
                    <p class="text-muted mb-2">Saídas</p>
                    <h2 class="fw-bold text-danger mb-1">80 un.</h2>
                    <small class="text-muted">Produtos retirados hoje</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div class="card-body">
                    <p class="text-muted mb-2">Acessos hoje</p>
                    <h2 class="fw-bold text-primary mb-1">4</h2>
                    <small class="text-muted">Acessos registrados no sistema</small>
                </div>
            </div>
        </div>
        
    </div>
</div>
