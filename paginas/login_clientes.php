<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Transport - Login Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2a4f7e;
            --accent-color: #38b2ac;
        }

        .client-login-section {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            min-height: 100vh;
            padding: 120px 0 60px;
        }

        .client-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s;
            overflow: hidden;
        }

        .client-card:hover {
            transform: translateY(-5px);
        }

        .client-header {
            background: var(--accent-color);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .client-form .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px 20px;
            transition: all 0.3s;
        }

        .client-form .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 8px rgba(56, 178, 172, 0.2);
        }

        .btn-client {
            background: var(--accent-color);
            color: white;
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-client:hover {
            background: #2c7a7b;
            transform: scale(1.02);
        }

        .client-links a {
            color: var(--accent-color);
            text-decoration: none;
            transition: all 0.3s;
        }

        .client-links a:hover {
            color: #2c7a7b;
            text-decoration: underline;
        }

        .benefits-list {
            border-left: 3px solid var(--accent-color);
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-ambulance me-2"></i>
                Medical Transport
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="client-login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client-card">
                        <div class="client-header">
                            <h2 class="mb-3">Olá! Você já é nosso cliente?</h2>
                            <p class="mb-0">Acesse sua conta para agendar seus transportes</p>
                        </div>

                        <div class="row g-0">
                            <!-- Formulário -->
                            <div class="col-md-6 p-5">
                                <form class="client-form">
                                    <div class="mb-4">
                                        
                                        <label class="form-label">E-mail</label>
                                        <input type="email" class="form-control" placeholder="seuemail@exemplo.com">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Senha</label>
                                        <input type="password" class="form-control" placeholder="••••••••">
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">Lembrar-me</label>
                                        </div>
                                        <a href="#" class="client-links">Esqueceu a senha?</a>
                                    </div>

                                    <button type="submit" class="btn btn-client">Entrar</button>

                                    <div class="text-center mt-4">
                                        <p class="mb-0">
                                            Não tem conta? 
                                            <a href="#" class="client-links">Cadastre-se aqui</a>
                                        </p>
                                    </div>
                                </form>
                            </div>

                            <!-- Benefícios -->
                            <div class="col-md-6 bg-light p-5">
                                <h4 class="mb-4">Benefícios de ser Cliente</h4>
                                <ul class="benefits-list">
                                    <li class="mb-3">Agendamento rápido e seguro</li>
                                    <li class="mb-3">Histórico de transportes</li>
                                    <li class="mb-3">Acompanhamento em tempo real</li>
                                    <li class="mb-3">Promoções exclusivas</li>
                                    <li class="mb-3">Suporte 24 horas</li>
                                </ul>
                                
                                <div class="social-login mt-5">
                                    <p class="text-muted mb-3">Entrar com redes sociais</p>
                                    <div class="d-flex gap-3">
                                        <a href="#" class="btn btn-outline-primary w-100">
                                            <i class="fab fa-google me-2"></i> Google
                                        </a>
                                        <a href="#" class="btn btn-outline-primary w-100">
                                            <i class="fab fa-facebook me-2"></i> Facebook
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector('.client-form').addEventListener('submit', function(e) {
            e.preventDefault();
            window.location.href = '../area_cliente/menu_principal.php';
        });
    </script>
</body>
</html>
</body>
</html>