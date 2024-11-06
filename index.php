<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gerenciamento de Estoque</title>
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
    <div class="card-custom col-10 col-md-6 col-lg-4 text-center">
        <h1 class="mb-4">Bem-vindo ao Sistema de Gerenciamento de Estoque</h1>
        <div class="mt-4">
            <a href="cadastro.php" class="btn btn-primary btn-lg btn-custom">Cadastro de Produtos</a>
            <a href="atualizar_estoque.php" class="btn btn-warning btn-lg btn-custom">Atualizar Estoque</a>
            <a href="relatorios.php" class="btn btn-info btn-lg btn-custom">Relatórios</a>
        </div>
    </div>
</body>
</html>
