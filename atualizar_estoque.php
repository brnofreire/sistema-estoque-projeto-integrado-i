<?php include('db/conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualização de Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-custom {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .btn-custom {
            margin: 5px;
        }
        body {
            background: #002147;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card-custom col-10 col-md-6 col-lg-4">
        <h2>Atualização de Estoque</h2>
        <form method="POST" action="atualizar_estoque.php">
            <div class="mb-3">
                <label>ID do Produto</label>
                <input type="number" name="produto_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Operação</label>
                <select name="operacao" class="form-select" required>
                    <option value="adicionar">Adicionar</option>
                    <option value="remover">Remover</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-custom">Atualizar Estoque</button>
            <a href="index.php" class="btn btn-secondary btn-custom">Voltar</a>
        </form>
    </div>
</body>
</html>
