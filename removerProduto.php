<?php
include __DIR__ . '/inc/header.inc.php';
?>

<main class="container mt-4">

    <div class="mb-4">
        <h2 class="fw-bold text-dark mb-1">Retirar produto</h2>
        <p class="text-muted mb-0">Consulte, edite ou retire produtos do estoque</p>
    </div>

    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-body p-4">

            <label class="form-label fw-semibold">Código de barras do produto</label>

            <div class="input-group">
                <input type="text" class="form-control"
                    placeholder="Digite ou anote o código de barras">

                <button type="button" class="btn btn-outline-primary px-3"
                    title="Escanear código de barras">
                    <i class="bi bi-camera-fill fs-5"></i>
                </button>
            </div>

            <small class="text-muted">
                Digite o código ou utilize a câmera para escanear futuramente.
            </small>

        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-3 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">Produto encontrado</h5>
            <p class="text-muted small mb-0">Visualização das informações do produto</p>
        </div>

        <div class="card-body p-4">

            <div class="row g-4">

                <div class="col-12 col-md-4">
                    <div class="bg-light rounded-3 p-4 text-center h-100 d-flex flex-column justify-content-center">
                        <i class="bi bi-box-seam text-primary" style="font-size: 4rem;"></i>
                        <h5 class="fw-bold mt-3 mb-1">Macarrão</h5>
                        <span class="text-muted small">Código: 7891234567890</span>
                    </div>
                </div>

                <div class="col-12 col-md-8">

                    <div class="row g-3">

                        <div class="col-12 col-sm-6">
                            <small class="text-muted">Fornecedor</small>
                            <p class="fw-semibold mb-0">Distribuidora Central</p>
                        </div>

                        <div class="col-12 col-sm-6">
                            <small class="text-muted">Quantidade em estoque</small>
                            <p class="fw-semibold text-primary mb-0">150 unidades</p>
                        </div>

                        <div class="col-12 col-sm-6">
                            <small class="text-muted">Preço unitário</small>
                            <p class="fw-semibold mb-0">R$ 5,99</p>
                        </div>

                        <div class="col-12 col-sm-6">
                            <small class="text-muted">Unidade de medida</small>
                            <p class="fw-semibold mb-0">Pacote</p>
                        </div>

                        <div class="col-12">
                            <small class="text-muted">Descrição</small>
                            <p class="mb-0">Macarrão tipo espaguete, pacote de 500g.</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="row g-4">

        <div class="col-12 col-lg-6">

            <div class="card border-0 shadow-sm rounded-3 h-100">

                <div class="card-body p-4">

                    <div class="mb-4">
                        <h5 class="fw-bold mb-1">Editar produto</h5>
                        <p class="text-muted small mb-0">Altere as informações cadastradas</p>
                    </div>

                    <form>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nome do produto</label>
                            <input type="text" class="form-control" value="Macarrão">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Fornecedor</label>
                            <input type="text" class="form-control" value="Distribuidora Central">
                        </div>

                        <div class="row g-3 mb-3">

                            <div class="col-6">
                                <label class="form-label fw-semibold">Quantidade</label>
                                <input type="number" class="form-control" value="150">
                            </div>

                            <div class="col-6">
                                <label class="form-label fw-semibold">Unidade</label>
                                <select class="form-select">
                                    <option>Pacote</option>
                                    <option>Unidade</option>
                                    <option>Quilograma (kg)</option>
                                    <option>Grama (g)</option>
                                    <option>Litro (L)</option>
                                    <option>Mililitro (ml)</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Preço (R$)</label>
                            <input type="number" class="form-control" value="5.99" step="0.01">
                        </div>

                        <button type="button" class="btn btn-outline-primary w-100">
                            <i class="bi bi-pencil-square me-1"></i>
                            Salvar alterações
                        </button>

                    </form>

                </div>
            </div>

        </div>

        <div class="col-12 col-lg-6">

            <div class="card border-0 shadow-sm rounded-3 h-100">

                <div class="card-body p-4">

                    <div class="mb-4">
                        <h5 class="fw-bold mb-1">Retirar do estoque</h5>
                        <p class="text-muted small mb-0">Informe a quantidade que deseja retirar</p>
                    </div>

                    <div class="bg-light rounded-3 p-3 mb-4">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Disponível em estoque</span>
                            <span class="fw-bold text-primary">150 pacotes</span>
                        </div>

                    </div>

                    <form>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Quantidade para retirada</label>
                            <input type="number" class="form-control"
                                min="1" placeholder="Ex: 10">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Motivo da retirada</label>
                            <select class="form-select">
                                <option selected disabled>Selecione o motivo</option>
                                <option>Venda</option>
                                <option>Uso interno</option>
                                <option>Produto danificado</option>
                                <option>Perda ou descarte</option>
                                <option>Outro</option>
                            </select>
                        </div>

                        <div class="alert alert-primary small">
                            A quantidade informada será descontada do estoque após a confirmação da retirada.
                        </div>

                        <button type="button" class="btn btn-primary w-100">
                            <i class="bi bi-box-arrow-up me-1"></i>
                            Confirmar retirada
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>

    <div class="d-flex justify-content-start mt-4 mb-5">
        <a href="index.php" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>
            Voltar
        </a>
    </div>

</main>
