<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedQ - Área da Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2a4f7e;
            --accent-color: #38b2ac;
        }
        h5 {
            color: black;
        }

        .col-md-9 {
    padding-top: 20px; /* Compensa a navbar fixa */
}
        .company-dashboard {
            background: #f8f9fa;
            min-height: 100vh;
        }

        .company-sidebar {
            background: var(--primary-color);
            color: white;
            min-height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .company-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0 50px; 
        }

        .company-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: all 0.3s;
        }

        .company-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .nav-company .nav-link {
            color: rgba(255,255,255,0.9);
            padding: 12px 15px;
            border-radius: 8px;
            margin: 6px 0;
            transition: all 0.3s;
        }

        .nav-company .nav-link:hover {
            background: var(--secondary-color);
            color: white;
        }

        .metric-badge {
            background: var(--accent-color);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
        }

        .vehicle-status {
            width: 15px;
            height: 15px;
            border-radius: 50%;
        }
        .metric-value {
    font-size: 2rem;
    font-weight: bold;
    margin: 10px 0;
}

.metric-label {
    font-size: 0.9rem;
    opacity: 0.9;
}

        .status-available { background: #28a745; }
        .status-in-use { background: #ffc107; }
        .status-maintenance { background: #dc3545; }

        .schedule-timeline {
            border-left: 3px solid var(--accent-color);
            padding-left: 20px;
        }
        .company-header {
    position: relative;
    padding: 30px 0 20px; /* Reduz o padding vertical */
}

.company-header h1 {
    margin-top: 0; /* Remove margem negativa anterior */
    padding-top: 15px; /* Adiciona espaço interno */
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: var(--primary-color);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-ambulance me-2"></i>
                Transporte Saúde
            </a>
            <div class="d-flex align-items-center">
                <div class="text-white me-3">Bem-vindo, Resgate Médico Express</div>
                <img src="https://source.unsplash.com/random/40x40/?logo" class="rounded-circle" alt="Logo">
            </div>
        </div>
    </nav>

    <!-- Company Area -->
    <div class="company-dashboard">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 company-sidebar pt-5">
                <nav class="nav flex-column nav-company">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-calendar-alt me-2"></i>Agendamentos
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-ambulance me-2"></i>Frota
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-users me-2"></i>Motoristas
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-line me-2"></i>Financeiro
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-invoice me-2"></i>Relatórios
                    </a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <!-- Header -->
                 
                <div class="company-header">
                <h1 class="display-5">Resgate Médico Express</h1>
                    <div class="container">
                        
                        <div class="row g-4">
                            
                            <div class="col-md-3">
                                <div class="company-card p-3 text-center">
                                    <h5>Serviços Hoje</h5>
                                    <div class="metric-badge">18</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="company-card p-3 text-center">
                                    <h5>Faturamento</h5>
                                    <div class="metric-badge">R$ 12.540,00</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="company-card p-3 text-center">
                                    <h5>Avaliação</h5>
                                    <div class="metric-badge">4.8 <i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="company-card p-3 text-center bg-warning text-dark">
                                    <h5>Pendências</h5>
                                    <div class="metric-badge bg-dark text-white">3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Sections -->
                <div class="container mt-4">
                    <!-- Agendamentos -->
                    <div class="company-card p-4 mb-4">
                        <h4><i class="fas fa-calendar-day me-2"></i>Agenda de Hoje</h4>
                        <div class="schedule-timeline mt-3">
                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>Paciente: João Silva</h5>
                                        <p class="mb-0">Hospital Santa Maria - 09:30</p>
                                    </div>
                                    <div>
                                        <span class="badge bg-success">Em transporte</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Mais agendamentos... -->
                        </div>
                    </div>

                    <!-- Gestão de Frota -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="company-card p-4 h-100">
                                <h4><i class="fas fa-ambulance me-2"></i>Gestão de Frota</h4>
                                <table class="table table-hover mt-3">
                                    <thead>
                                        <tr>
                                            <th>Veículo</th>
                                            <th>Status</th>
                                            <th>Última Manutenção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AMB-1234</td>
                                            <td><div class="vehicle-status status-available"></div></td>
                                            <td>15/08/2024</td>
                                        </tr>
                                        <!-- Mais veículos... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Motoristas -->
                        <div class="col-md-6">
                            <div class="company-card p-4 h-100">
                                <h4><i class="fas fa-users-cog me-2"></i>Motoristas</h4>
                                <div class="list-group mt-3">
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5>Carlos Silva</h5>
                                            <p class="mb-0">Disponível</p>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary">Detalhes</button>
                                        </div>
                                    </div>
                                    <!-- Mais motoristas... -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Financeiro -->
                    <div class="company-card p-4 mb-4">
                        <h4><i class="fas fa-chart-line me-2"></i>Desempenho Financeiro</h4>
                        <div class="mt-3" style="height: 300px;">
                            <!-- Gráfico (implementar com biblioteca) -->
                            <div class="bg-light text-center p-5 rounded">
                                Gráfico de Desempenho
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