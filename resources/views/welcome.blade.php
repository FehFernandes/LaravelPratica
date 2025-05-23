<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Produtos - Bem-vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .feature-card {
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <div class="hero-section text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">
                        <i class="bi bi-box-seam"></i> Sistema de Produtos
                    </h1>
                    <p class="lead mb-4">
                        Gerencie seus produtos de forma simples e eficiente. Sistema completo com controle de acesso e
                        interface intuitiva.
                    </p>

                    @guest
                        <div class="d-flex gap-3 mb-4">
                            <a href="{{ route('login') }}" class="btn btn-light btn-lg">
                                <i class="bi bi-box-arrow-in-right"></i> Entrar
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">
                                <i class="bi bi-person-plus"></i> Criar Conta
                            </a>
                        </div>

                        <div class="alert alert-info bg-white bg-opacity-20 border-0 text-white">
                            <strong>Usuários de Teste:</strong><br>
                            <i class="bi bi-person"></i> admin@admin.com | Senha: 123456<br>
                            <i class="bi bi-person"></i> joao@teste.com | Senha: 123456
                        </div>
                    @else
                        <div class="d-flex gap-3">
                            <a href="{{ route('products.index') }}" class="btn btn-light btn-lg">
                                <i class="bi bi-list-ul"></i> Ver Produtos
                            </a>
                            <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-lg">
                                <i class="bi bi-plus-circle"></i> Novo Produto
                            </a>
                        </div>
                    @endguest
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-card card bg-white bg-opacity-20 border-0 text-white">
                                <div class="card-body text-center">
                                    <i class="bi bi-shield-check display-4 mb-3"></i>
                                    <h5>Seguro</h5>
                                    <p class="card-text">Sistema com autenticação e controle de acesso completo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-card card bg-white bg-opacity-20 border-0 text-white">
                                <div class="card-body text-center">
                                    <i class="bi bi-speedometer2 display-4 mb-3"></i>
                                    <h5>Rápido</h5>
                                    <p class="card-text">Interface moderna e intuitiva para gerenciar produtos.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-card card bg-white bg-opacity-20 border-0 text-white">
                                <div class="card-body text-center">
                                    <i class="bi bi-graph-up display-4 mb-3"></i>
                                    <h5>Completo</h5>
                                    <p class="card-text">CRUD completo com validações e controle de estoque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-card card bg-white bg-opacity-20 border-0 text-white">
                                <div class="card-body text-center">
                                    <i class="bi bi-phone display-4 mb-3"></i>
                                    <h5>Responsivo</h5>
                                    <p class="card-text">Funciona perfeitamente em qualquer dispositivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>