<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Transport - Empresas Parceiras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #1a365d;
            --accent-color: #38b2ac;
        }

        .company-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 70px 0 25px;
        }

        .company-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .company-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .company-image {
            height: 250px;
            object-fit: cover;
            border-radius: 15px 0 0 15px;
        }

        .company-rating {
            color: #ffd700;
            font-size: 1.2rem;
        }

        .badge-custom {
            background: var(--accent-color);
            color: white;
        }

        .search-section {
            background: var(--primary-color);
            padding: 30px 0;
            margin-bottom: 40px;
        }

        .btn-company {
            background: var(--accent-color);
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-company:hover {
            background: #2c7a7b;
            color: white;
            transform: scale(1.05);
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

    <!-- Header -->
    <div class="company-header">
        <div class="container text-center">
            <h1 class="display-4 mb-3">Empresas Parceiras</h1>
            <p class="lead">Encontre a melhor empresa para seu transporte médico</p>
        </div>
    </div>

    <!-- Search Section -->
    <div class="search-section">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Buscar por nome, cidade ou especialidade...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todas as Categorias</option>
                        <option>Transporte Urgente</option>
                        <option>Transporte Aéreo</option>
                        <option>Ambulância Leito</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-company w-100">Filtrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Company List -->
    <div class="container">
        <!-- Company 1 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude1.jpg" class="img-fluid company-image" alt="Ambulância">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Resgate Médico Express</h3>
                        <div class="badge badge-custom p-2">24 Horas</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-muted ms-2">(145 avaliações)</span>
                    </div>
                    <p class="text-muted">Empresa especializada em transporte de urgência com equipe médica acompanhante. Atua em todo território nacional.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>São Paulo - SP</p>
                            <p><i class="fas fa-phone me-2"></i>(11) 99999-9999</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">UTI Móvel</span>
                                <span class="badge bg-secondary">Neonatal</span>
                                <span class="badge bg-secondary">Cardíaco</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

        <!-- Company 2 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude2.jpg" class="img-fluid company-image" alt="Transporte Médico">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Saúde em Movimento</h3>
                        <div class="badge badge-custom p-2">Plantão Diário</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-muted ms-2">(89 avaliações)</span>
                    </div>
                    <p class="text-muted">Transporte médico especializado em pacientes com mobilidade reduzida e tratamentos contínuos.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>Rio de Janeiro - RJ</p>
                            <p><i class="fas fa-phone me-2"></i>(21) 99999-9999</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">Cadeirantes</span>
                                <span class="badge bg-secondary">Idosos</span>
                                <span class="badge bg-secondary">Fisioterapia</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

        <!-- Company 3 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude3.jpg" class="img-fluid company-image" alt="Ambulância">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Vida Rápida Transportes</h3>
                        <div class="badge badge-custom p-2">Atendimento 24h</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-muted ms-2">(102 avaliações)</span>
                    </div>
                    <p class="text-muted">Serviço rápido e eficiente com equipe preparada para emergências médicas.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>Belo Horizonte - MG</p>
                            <p><i class="fas fa-phone me-2"></i>(31) 99876-5432</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">Emergências</span>
                                <span class="badge bg-secondary">Suporte Vital</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

        <!-- Company 4 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude4.jpg" class="img-fluid company-image" alt="Transporte Médico">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Transporte Vital</h3>
                        <div class="badge badge-custom p-2">Emergência</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-muted ms-2">(87 avaliações)</span>
                    </div>
                    <p class="text-muted">Foco no transporte de pacientes em situação de risco com equipamentos modernos.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>Curitiba - PR</p>
                            <p><i class="fas fa-phone me-2"></i>(41) 98765-4321</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">Emergência</span>
                                <span class="badge bg-secondary">Suporte Intensivo</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

        <!-- Company 5 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude1.jpg" class="img-fluid company-image" alt="Ambulância">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Cuidado Móvel</h3>
                        <div class="badge badge-custom p-2">Serviço 24h</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-muted ms-2">(156 avaliações)</span>
                    </div>
                    <p class="text-muted">Transporte seguro com suporte médico e equipamentos avançados para cuidados intensivos.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>Fortaleza - CE</p>
                            <p><i class="fas fa-phone me-2"></i>(85) 91234-5678</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">UTI</span>
                                <span class="badge bg-secondary">Cuidados Críticos</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

        <!-- Company 6 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude2.jpg" class="img-fluid company-image" alt="Transporte Médico">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Salto da Saúde</h3>
                        <div class="badge badge-custom p-2">Atendimento Rápido</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-muted ms-2">(132 avaliações)</span>
                    </div>
                    <p class="text-muted">Comprometida com o bem-estar, oferece transporte rápido e seguro para emergências médicas.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>Porto Alegre - RS</p>
                            <p><i class="fas fa-phone me-2"></i>(51) 92345-6789</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">Emergências</span>
                                <span class="badge bg-secondary">Suporte Avançado</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

        <!-- Company 7 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude3.jpg" class="img-fluid company-image" alt="Transporte Médico">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Pronto Atendimento Móvel</h3>
                        <div class="badge badge-custom p-2">Suporte Imediato</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-muted ms-2">(110 avaliações)</span>
                    </div>
                    <p class="text-muted">Atendimento rápido com equipe especializada para casos de urgência e emergência.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>Salvador - BA</p>
                            <p><i class="fas fa-phone me-2"></i>(71) 93456-7890</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">Urgência</span>
                                <span class="badge bg-secondary">Suporte Imediato</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

        <!-- Company 8 -->
        <div class="company-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../imagens/img_plano_de_saude4.jpg" class="img-fluid company-image" alt="Transporte Médico">
                </div>
                <div class="col-md-8 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3>Rede Médica Express</h3>
                        <div class="badge badge-custom p-2">Atendimento Ágil</div>
                    </div>
                    <div class="company-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-muted ms-2">(95 avaliações)</span>
                    </div>
                    <p class="text-muted">Conecta hospitais e clínicas com serviços de transporte médico de alta qualidade.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-map-marker-alt me-2"></i>Recife - PE</p>
                            <p><i class="fas fa-phone me-2"></i>(81) 91234-5678</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase-medical me-2"></i>Especialidades:</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">Hidroterapia</span>
                                <span class="badge bg-secondary">Transporte Clínico</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-company">Solicitar Orçamento</button>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
