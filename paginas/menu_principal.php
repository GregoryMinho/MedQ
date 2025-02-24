<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Transport</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2a4f7e;
            --accent-color: #38b2ac;
        }
        
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .btn-custom {
            background-color: var(--accent-color);
            color: white;
            transition: all 0.3s;
        }

        .btn-custom:hover {
            background-color: #2c7a7b;
            transform: translateY(-2px);
        }

        .hero-section {
            background: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.8)),
                        url('https://source.unsplash.com/random/1920x1080/?hospital') center/cover;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
                    <a class="nav-link" href="abas_menu_principal/aba_entrar.php">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="abas_menu_principal/aba_empresas.php">Empresas</a>
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

    <!-- Hero Section -->
    <header class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 mb-4">Transporte médico seguro e confiável</h1>
        <p class="lead mb-4">Conectamos pacientes a empresas de transporte especializado</p>
        <button class="btn btn-custom btn-lg px-5" id="agendarBtn">Agendar Agora</button>
    </div>
</header>

<script>
    document.getElementById("agendarBtn").addEventListener("click", function() {
        window.location.href = "login_clientes.php";
    });
</script>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card p-4 text-center">
                        <i class="fas fa-user-clock fa-3x text-primary mb-3"></i>
                        <h3>Agendamento Rápido</h3>
                        <p>Agende seu transporte em poucos minutos</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 text-center">
                        <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                        <h3>Segurança Garantida</h3>
                        <p>Profissionais treinados e veículos adaptados</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 text-center">
                        <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                        <h3>Rastreamento em Tempo Real</h3>
                        <p>Acompanhe seu transporte em tempo real</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

