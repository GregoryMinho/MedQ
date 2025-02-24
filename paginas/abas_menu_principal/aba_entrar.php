<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Transport - Empresas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2a4f7e;
            --accent-color: #38b2ac;
        }

        .choice-card {
            background: white;
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            min-height: 400px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .choice-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .choice-icon {
            font-size: 4rem;
            color: var(--accent-color);
            margin-bottom: 2rem;
        }

        .choice-btn {
            background: var(--accent-color);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .choice-btn:hover {
            background: #2c7a7b;
            color: white;
            transform: translateX(-50%) scale(1.05);
        }

        .section-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0 60px 0;
            margin-bottom: 60px;
        }
    </style>
</head>
<body>
    <!-- Navbar (mantendo a mesma do código anterior) -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"> 
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-ambulance me-2"></i>
            MedQ
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quando_usuario_clica_em_entrar.php">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Empresas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agendamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Header Section -->
    <div class="section-header">
        <div class="container text-center">
            <h1 class="display-4 mb-3">Escolha como deseja entrar</h1>
            <p class="lead">Selecione seu perfil para continuar</p>
        </div>
    </div>

    <!-- Choice Cards -->
    <div class="container">
        <div class="row g-5 justify-content-center">
            <!-- Card Empresa -->
            <div class="col-md-6">
                <div class="choice-card position-relative text-center p-5">
                    <div class="card-content">
                        <i class="fas fa-building choice-icon"></i>
                        <h3 class="mb-4">Represento uma Empresa</h3>
                        <p class="text-muted">Cadastre sua empresa de transporte médico na nossa plataforma e aumente sua visibilidade para pacientes que necessitam de seus serviços.</p>
                        <a href="../login_empresas.php" class="btn choice-btn">Acessar Área da Empresa</a>
                    </div>
                </div>
            </div>

            <!-- Card Cliente -->
            <div class="col-md-6">
                <div class="choice-card position-relative text-center p-5">
                    <div class="card-content">
                        <i class="fas fa-user choice-icon"></i>
                        <h3 class="mb-4">Sou um Cliente</h3>
                        <p class="text-muted">Encontre a melhor empresa de transporte médico para suas necessidades. Agende seu transporte com segurança e praticidade.</p>
                        <a href="../login_clientes.php" class="btn choice-btn">Buscar Transporte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>