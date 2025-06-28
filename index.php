<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Caldas da Silva - Corretora de Imóveis</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #9c88ff;
            --secondary-color: #f8f9fa;
            --dark-color: #343a40;
            --light-color: #ffffff;
            --gray-color: #f1f1f1;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-bottom: 60px;
        }
        
        .navbar {
            background-color: var(--light-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
        }
        
        .nav-link {
            color: var(--dark-color) !important;
            font-weight: 500;
            margin: 0 10px;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #7d6bd6;
            border-color: #7d6bd6;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #7d6bd6 100%);
            color: var(--light-color);
            padding: 80px 0;
            margin-bottom: 40px;
        }
        
        .featured-properties {
            padding: 60px 0;
        }
        
        .property-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }
        
        .property-card:hover {
            transform: translateY(-10px);
        }
        
        .property-img {
            height: 200px;
            object-fit: cover;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .property-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.2rem;
            margin: 10px 0;
        }
        
        .property-type {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .property-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .property-feature {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
        }
        
        .property-feature i {
            color: var(--primary-color);
            margin-right: 5px;
            min-width: 20px;
            text-align: center;
        }
        
        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 40px 0;
            margin-top: 60px;
        }
        
        .contact-info i {
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        /* Botão do WhatsApp Fixo */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .whatsapp-float:hover {
            background-color: #128C7E;
            color: #FFF;
            transform: scale(1.1);
        }
        
        @media (max-width: 576px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
                font-size: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Menu de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-home me-2"></i>Daniel Caldas da Silva
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aluguel.php"><i class="fas fa-key me-1"></i> Aluguel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./compra.php"><i class="fas fa-dollar-sign me-1"></i> Compra de Imóvel</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="#"><i class="fas fa-phone me-1"></i> Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Principal -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Encontre o imóvel dos seus sonhos</h1>
            <p class="lead mb-5">Soluções completas em compra, venda e locação de imóveis</p>
            <form class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control form-control-lg" placeholder="O que você procura?">
                </div>
                <div class="col-md-3">
                    <select class="form-select form-select-lg">
                        <option selected>Tipo de Imóvel</option>
                        <option>Apartamento</option>
                        <option>Casa</option>
                        <option>Terreno</option>
                        <option>Comercial</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-light btn-lg w-100 text-primary fw-bold">Buscar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Seção de Destaque -->
    <section class="featured-properties">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold">Imóveis em Destaque</h2>
                <p class="text-muted">Confira nossas melhores opções para compra</p>
            </div>
            
            <div class="row">
                <!-- Imóvel 1 -->
                <div class="col-md-4">
                    <div class="property-card">
                        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="property-img w-100" alt="Apartamento moderno">
                        <div class="card-body">
                            <span class="badge bg-primary mb-3">Venda</span>
                            <h5 class="card-title">Apartamento 3 quartos</h5>
                            <p class="card-text property-type"><i class="fas fa-map-marker-alt text-primary"></i> Bairro Nobre, São Paulo</p>
                            <p class="property-price">R$ 850.000</p>
                            
                            <div class="property-features">
                                <div class="property-feature">
                                    <i class="fas fa-ruler-combined"></i> 85 m²
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bed"></i> 3 Quartos
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bath"></i> 2 Banheiros
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-car"></i> 2 Vagas
                                </div>
                            </div>
                            
                            <a href="./imovel.php" class="btn btn-sm btn-primary w-100">Ver mais</a>
                        </div>
                    </div>
                </div>
                
                <!-- Imóvel 2 -->
                <div class="col-md-4">
                    <div class="property-card">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="property-img w-100" alt="Casa moderna">
                        <div class="card-body">
                            <span class="badge bg-primary mb-3">Venda</span>
                            <h5 class="card-title">Casa 4 quartos</h5>
                            <p class="card-text property-type"><i class="fas fa-map-marker-alt text-primary"></i> Jardim América, São Paulo</p>
                            <p class="property-price">R$ 1.250.000</p>
                            
                            <div class="property-features">
                                <div class="property-feature">
                                    <i class="fas fa-ruler-combined"></i> 220 m²
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bed"></i> 4 Quartos
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bath"></i> 3 Banheiros
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-car"></i> 3 Vagas
                                </div>
                            </div>
                            
                            <a href="./imovel.php" class="btn btn-sm btn-primary w-100">Ver mais</a>
                        </div>
                    </div>
                </div>
                
                <!-- Imóvel 3 -->
                <div class="col-md-4">
                    <div class="property-card">
                        <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="property-img w-100" alt="Apartamento luxuoso">
                        <div class="card-body">
                            <span class="badge bg-primary mb-3">Venda</span>
                            <h5 class="card-title">Apartamento de Luxo</h5>
                            <p class="card-text property-type"><i class="fas fa-map-marker-alt text-primary"></i> Moema, São Paulo</p>
                            <p class="property-price">R$ 2.300.000</p>
                            
                            <div class="property-features">
                                <div class="property-feature">
                                    <i class="fas fa-ruler-combined"></i> 180 m²
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bed"></i> 4 Quartos
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bath"></i> 4 Banheiros
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-car"></i> 4 Vagas
                                </div>
                            </div>
                            
                            <a href="./imovel.php" class="btn btn-sm btn-primary w-100">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary px-4">Ver todos os imóveis</a>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-4">Daniel Caldas da Silva</h5>
                    <p>Corretora de Imóveis especializada em encontrar o lar perfeito para você e sua família.</p>
                    <div class="social-icons mt-4">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-light">Aluguel</a></li>
                        <li class="mb-2"><a href="#" class="text-light">Compra de Imóvel</a></li>
                        <li class="mb-2"><a href="#" class="text-light">Sobre Nós</a></li>
                        <li><a href="#" class="text-light">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-4">Contato</h5>
                    <div class="contact-info">
                        <p class="mb-3"><i class="fas fa-phone"></i> (11) 98765-4321</p>
                        <p class="mb-3"><i class="fas fa-envelope"></i> contato@danielcaldas.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Av. Paulista, 1000 - São Paulo/SP</p>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Daniel Caldas da Silva - Corretora de Imóveis. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Botão do WhatsApp Flutuante -->
    <a href="https://wa.me/5511987654321" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>