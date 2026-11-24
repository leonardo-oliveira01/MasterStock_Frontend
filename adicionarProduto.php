
<?php
include __DIR__ . '/inc/header.inc.php';
?>

<main class="container mt-4">

    <div class="mb-4">
        <h2 class="fw-bold text-dark mb-1">Adicionar produto</h2>
        <p class="text-muted mb-0">Cadastro de novos produtos no estoque</p>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-12 col-md-8 col-lg-6">

            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-4">

                    <div id="mensagemErro" class="alert alert-primary d-none" role="alert"></div>

                    <form id="formProduto" action="" method="POST" novalidate>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nome do produto</label>
                            <input type="text" name="nome" class="form-control"
                                maxlength="100" placeholder="Digite o nome do produto">

                            <button type="button" class="btn btn-outline-primary btn-sm mt-2">
                                <i class="bi bi-upc-scan me-1"></i>
                                Preencher usando código de barras
                            </button>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Fornecedor</label>
                            <input type="text" name="fornecedor" class="form-control"
                                placeholder="Digite o nome do fornecedor">
                        </div>

                        <div class="row g-3 mb-3">

                            <div class="col-6">
                                <label class="form-label fw-semibold">Quantidade</label>
                                <input type="number" name="quantidade" class="form-control"
                                    min="0" step="1" placeholder="Ex: 50">
                            </div>

                            <div class="col-6">
                                <label class="form-label fw-semibold">Unidade de medida</label>
                                <select name="unidade" class="form-select">
                                    <option value="">Selecione</option>
                                    <option value="un">Unidade</option>
                                    <option value="kg">Quilograma (kg)</option>
                                    <option value="g">Grama (g)</option>
                                    <option value="L">Litro (L)</option>
                                    <option value="ml">Mililitro (ml)</option>
                                    <option value="m">Metro (m)</option>
                                    <option value="cm">Centímetro (cm)</option>
                                    <option value="pacote">Pacote</option>
                                    <option value="caixa">Caixa</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Descrição</label>
                            <textarea name="descricao" class="form-control"
                                rows="3" maxlength="240"
                                placeholder="Descreva o produto..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Preço (R$)</label>
                            <input type="number" name="preco" class="form-control"
                                min="0" step="0.01" placeholder="Ex: 19.90">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Funcionário responsável</label>

                            <div class="input-group">
                                <input type="text" name="funcionario" class="form-control"
                                    placeholder="Selecione o funcionário" readonly>

                                <button type="button" class="btn btn-outline-primary"
                                    title="Selecionar funcionário">
                                    <i class="bi bi-person-fill fs-5"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <a href="index.php" class="btn btn-outline-secondary">
                                Voltar
                            </a>

                            <button type="submit" class="btn btn-primary px-4">
                                Adicionar produto
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</main>

<script>
document.getElementById('formProduto').addEventListener('submit', function(event) {

    const campos = [
        { nome: 'Nome do produto', campo: this.elements['nome'] },
        { nome: 'Fornecedor', campo: this.elements['fornecedor'] },
        { nome: 'Quantidade', campo: this.elements['quantidade'] },
        { nome: 'Unidade de medida', campo: this.elements['unidade'] },
        { nome: 'Preço', campo: this.elements['preco'] },
        { nome: 'Funcionário responsável', campo: this.elements['funcionario'] }
    ];

    const mensagem = document.getElementById('mensagemErro');

    for (const item of campos) {
        if (item.campo.value.trim() === '') {
            event.preventDefault();
            mensagem.textContent = 'É necessário preencher o campo ' + item.nome + ' para continuar.';
            mensagem.classList.remove('d-none');
            item.campo.focus();
            return;
        }
    }

    mensagem.classList.add('d-none');
});
</script>
