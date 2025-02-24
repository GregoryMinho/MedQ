<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Transport - Login Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2a4f7e;
            --accent-color: #38b2ac;
        }

        .login-section {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            min-height: 100vh;
            padding: 100px 0;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s;
        }

        .login-card:hover {
            transform: translateY(-5px);
        }

        .form-control-custom {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px 20px;
            transition: all 0.3s;
        }

        .form-control-custom:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 8px rgba(56, 178, 172, 0.2);
        }

        .btn-login {
            background: var(--accent-color);
            color: white;
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-login:hover {
            background: #2c7a7b;
            transform: scale(1.02);
        }

        .social-login .btn {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px;
            transition: all 0.3s;
        }

        .divider {
            border-top: 2px solid #e0e0e0;
            position: relative;
            margin: 30px 0;
        }

        .divider::after {
            content: "ou";
            position: absolute;
            top: -13px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 0 15px;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- Navbar (mantendo a mesma estrutura) -->
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
    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-card p-5">
                        <h2 class="text-center mb-4">Acesso da Empresa</h2>
                        
                        <!-- Formulário de Login -->
                        <form action="../area_empresas/menu_principal.php" method="get">
    <div class="mb-4">
        <label class="form-label">E-mail Corporativo</label>
        <input type="email" class="form-control form-control-custom" placeholder="empresa@exemplo.com" required>
    </div>

    <div class="mb-4">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control form-control-custom" placeholder="••••••••" required>
    </div>

    <div class="d-flex justify-content-between mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Lembrar-me</label>
        </div>
        <a href="#" class="text-decoration-none" style="color: var(--accent-color);">Esqueceu a senha?</a>
    </div>

    <button type="submit" class="btn btn-login w-100">Entrar</button>

    <div class="divider"></div>

    <!-- Login Social -->
    <div class="social-login text-center">
        <p class="mb-3">Entrar com</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="#" class="btn btn-light">
                <i class="fab fa-google" style="color: #DB4437;"></i>
            </a>
            <a href="#" class="btn btn-light">
                <i class="fab fa-facebook" style="color: #1877F2;"></i>
            </a>
        </div>
    </div>

    <p class="text-center mt-4">
        Não tem conta? 
        <a href="#" class="text-decoration-none" style="color: var(--accent-color);">Cadastre sua empresa</a>
    </p>
</form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>