<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedQ - Área do Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2a4f7e;
            --accent-color: #38b2ac;
        }

        .patient-dashboard {
            background: #f8f9fa;
            min-height: 100vh;
        }

        .patient-sidebar {
            background: var(--primary-color);
            color: white;
            min-height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .patient-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0 50px;
            margin-bottom: 30px;
        }

        .patient-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            margin-bottom: 25px;
        }

        .patient-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .emergency-card {
            background: #ff4444;
            color: white;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        .btn-patient {
            background: var(--accent-color);
            color: white;
            padding: 12px 25px;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .btn-patient:hover {
            background: #2c7a7b;
            color: white;
            transform: scale(1.05);
        }

        .nav-patient .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 15px;
            border-radius: 10px;
            margin: 5px 0;
        }

        .nav-patient .nav-link:hover {
            background: var(--secondary-color);
            color: white;
        }
        .patient-card {
    position: relative;
    overflow: hidden;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.patient-card::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(56, 178, 172, 0.1));
    transform: rotate(45deg);
    transition: all 0.5s;
}

.patient-card:hover::before {
    animation: shine 1.5s;
}

@keyframes shine {
    0% { transform: rotate(45deg) translate(-50%, -50%); }
    100% { transform: rotate(45deg) translate(100%, 100%); }
}

.icon-wrapper {
    transition: transform 0.3s;
}

.patient-card:hover .icon-wrapper {
    transform: scale(1.1);
}

.transport-info p {
    color: var(--primary-color);
}

.emergency-card {
    background: linear-gradient(45deg, #ff4444, #cc0000);
}

.emergency-card:hover {
    box-shadow: 0 0 15px rgba(255, 68, 68, 0.3);
}

.status-badge .badge {
    font-size: 0.75em;
    padding: 4px 8px;
}

/* Novos estilos adicionados */
.patient-card h5 {
    font-size: 1.1rem;
    font-weight: 600;
}

.patient-card .small {
    font-size: 0.85rem;
    line-height: 1.4;
}

.btn-patient.btn-sm {
    padding: 8px 16px;
    font-size: 0.9rem;
}

.fa-2x {
    font-size: 1.75em !important;
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: var(--primary-color);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-ambulance me-2"></i>
                MedQ
            </a>
            <div class="d-flex align-items-center">
                <div class="text-white me-3">Bem-vindo, João Silva</div>
                <img src="https://source.unsplash.com/random/40x40/?person" class="rounded-circle" alt="Perfil">
            </div>
        </div>
    </nav>

    <!-- Patient Area -->
    <div class="patient-dashboard">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 patient-sidebar pt-5">
                <nav class="nav flex-column nav-patient">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-home me-2"></i>Dashboard
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-calendar-check me-2"></i>Agendamentos
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-history me-2"></i>Histórico
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-heart me-2"></i>Favoritos
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog me-2"></i>Configurações
                    </a>
                </nav>
            </div>

            
            <div class="col-md-9">
    <div class="patient-header">
        <div class="container header-content">
            <h1 class="display-5 mb-4">Área do Paciente</h1>
            <div class="row g-3">
                <!-- Próximo Transporte -->
                <div class="col-md-3 col-6">
                    <div class="patient-card p-3 text-center h-100">
                        <div class="icon-wrapper mb-2">
                            <i class="fas fa-calendar-check fa-2x" style="color: var(--accent-color);"></i>
                        </div>
                        <h5 class="fs-6 mb-2">Próximo Transporte</h5>
                        <div class="transport-info">
                            <p class="mb-1 fw-bold">15/08 - 14:00</p>
                            <small class="text-muted">Hospital Santa Maria</small>
                            <div class="status-badge mt-2">
                                <span class="badge bg-success">Confirmado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transportes Realizados -->
                <div class="col-md-3 col-6">
                    <div class="patient-card p-3 text-center h-100">
                        <div class="icon-wrapper mb-2">
                            <i class="fas fa-chart-line fa-2x" style="color: var(--accent-color);"></i>
                        </div>
                        <h5 class="fs-6 mb-2">Transportes Realizados</h5>
                        <div class="counter-display">
                            <p class="mb-0 display-6 fw-bold">12</p>
                            <small class="text-muted">+2 este mês</small>
                        </div>
                    </div>
                </div>

                <!-- Avaliação Média -->
                <div class="col-md-3 col-6">
                    <div class="patient-card p-3 text-center h-100">
                        <div class="icon-wrapper mb-2">
                            <i class="fas fa-star fa-2x text-warning"></i>
                        </div>
                        <h5 class="fs-6 mb-2">Avaliação Média</h5>
                        <div class="rating-details">
                            <p class="mb-0 fw-bold">4.8</p>
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <small class="text-muted">(18 avaliações)</small>
                        </div>
                    </div>
                </div>

                <!-- Emergência -->
                <div class="col-md-3 col-6">
                    <div class="patient-card emergency-card p-3 text-center h-100">
                        <div class="icon-wrapper mb-2">
                            <i class="fas fa-plus-circle fa-2x"></i>
                        </div>
                        <h5 class="fs-6 mb-2">Emergência Médica</h5>
                        <div class="emergency-actions">
                            <p class="small mb-2">Solicitação Imediata</p>
                            <button class="btn btn-light btn-sm w-100">
                                <i class="fas fa-phone-alt me-2"></i>Ativar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
                    <!-- Quick Actions -->
                    <div class="row mb-4 g-3 justify-content-center">
<div class="row mb-4 g-3">
    <div class="col-md-3">
        <div class="patient-card p-3 text-center">
            <i class="fas fa-ambulance fa-2x mb-2" style="color: var(--accent-color);"></i>
            <h5 class="mb-2">Agendar Transporte</h5>
            <p class="small text-muted mb-3">Agende seu transporte médico com antecedência</p>
            <button class="btn btn-patient btn-sm">Agendar Agora</button>
        </div>
    </div>

    <div class="col-md-3">
        <div class="patient-card p-3 text-center">
            <i class="fas fa-history fa-2x mb-2" style="color: var(--accent-color);"></i>
            <h5 class="mb-2">Histórico Completo</h5>
            <p class="small text-muted mb-3">Veja todos seus transportes realizados</p>
            <button class="btn btn-patient btn-sm">Acessar Histórico</button>
        </div>
    </div>

    <div class="col-md-3">
        <div class="patient-card p-3 text-center">
            <i class="fas fa-star fa-2x mb-2" style="color: var(--accent-color);"></i>
            <h5 class="mb-2">Empresas Favoritas</h5>
            <p class="small text-muted mb-3">Gerencie suas empresas preferidas</p>
            <button class="btn btn-patient btn-sm">Ver Favoritos</button>
        </div>
    </div>
</div>
</div>
</div>

   
                    <!-- Upcoming Transports -->
                    <div class="patient-card p-4">
                        <h4 class="mb-4"><i class="fas fa-calendar-alt me-2"></i>Próximos Transportes</h4>
                        <div class="list-group">
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Consulta Cardiológica</h5>
                                    <p class="mb-0">Hospital Santa Maria - 15/08 - 14:00</p>
                                </div>
                                <div>
                                    <button class="btn btn-patient btn-sm me-2">Detalhes</button>
                                    <button class="btn btn-outline-danger btn-sm">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Health Information -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="patient-card p-4">
                                <h4><i class="fas fa-file-medical me-2"></i>Informações Médicas</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Tipo Sanguíneo: O+</li>
                                    <li class="list-group-item">Alergias: Nenhuma</li>
                                    <li class="list-group-item">Medicação Regular: Não</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="patient-card p-4">
                                <h4><i class="fas fa-comments me-2"></i>Últimas Mensagens</h4>
                                <div class="alert alert-info">Confirmação de transporte para 15/08</div>
                                <div class="alert alert-success">Avaliação registrada com sucesso</div>
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