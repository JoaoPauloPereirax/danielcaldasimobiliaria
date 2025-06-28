<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartamento Luxuoso - Moema | Daniel Caldas da Silva</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Splide.js para galeria de imagens -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
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
        
        .btn-contact {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
        
        .btn-contact:hover {
            background-color: #218838;
            border-color: #1e7e34;
            color: white;
        }
        
        .property-header {
            background-color: var(--secondary-color);
            padding: 40px 0;
            margin-bottom: 40px;
        }
        
        .property-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.8rem;
        }
        
        .property-type {
            color: #6c757d;
            font-size: 1rem;
        }
        
        .property-features {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        
        .property-feature {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .property-feature-icon {
            background-color: var(--primary-color);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        /* Galeria de Imagens */
        .splide {
            margin-bottom: 30px;
        }
        
        .splide__slide img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .splide__thumbnails {
            margin-top: 10px;
        }
        
        .splide__thumbnail img {
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border-radius: 4px;
            opacity: 0.6;
            transition: opacity 0.3s;
        }
        
        .splide__thumbnail.is-active img {
            opacity: 1;
            border: 2px solid var(--primary-color);
        }
        
        .splide__thumbnail:hover img {
            opacity: 1;
        }
        
        .property-details {
            padding: 40px 0;
        }
        
        .detail-item {
            margin-bottom: 15px;
            display: flex;
        }
        
        .detail-item i {
            color: var(--primary-color);
            margin-right: 10px;
            min-width: 25px;
        }
        
        .contact-section {
            background-color: var(--secondary-color);
            padding: 60px 0;
            margin: 60px 0;
        }
        
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .property-map {
            height: 300px;
            background-color: #eee;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .similar-properties {
            margin-top: 60px;
        }
        
        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 40px 0;
        }
        
        .contact-info i {
            color: var(--primary-color);
            margin-right: 10px;
        }
        
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
        
        @media (max-width: 992px) {
            .splide__slide img {
                height: 400px;
            }
        }
        
        @media (max-width: 768px) {
            .property-features {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .splide__slide img {
                height: 300px;
            }
        }
        
        @media (max-width: 576px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
                font-size: 25px;
            }
            
            .property-features {
                grid-template-columns: 1fr;
            }
            
            .splide__slide img {
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Menu de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-home me-2"></i>Daniel Caldas da Silva
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aluguel.html"><i class="fas fa-key me-1"></i> Aluguel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="venda.html"><i class="fas fa-dollar-sign me-1"></i> Compra</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="#"><i class="fas fa-phone me-1"></i> Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cabeçalho do Imóvel -->
    <section class="property-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <span class="badge bg-primary mb-2">Venda</span>
                    <h1 class="mb-3">Apartamento de Luxo em Moema</h1>
                    <p class="property-type mb-1"><i class="fas fa-map-marker-alt text-primary"></i> Moema, São Paulo - SP</p>
                    <p class="property-type"><i class="fas fa-building text-primary"></i> Edifício Residencial Green Life</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <p class="property-price mb-1">R$ 2.300.000</p>
                    <p class="property-type">Condomínio: R$ 2.800/mês</p>
                </div>
            </div>
            
            <div class="property-features">
                <div class="property-feature">
                    <div class="property-feature-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <span>180 m²</span>
                </div>
                <div class="property-feature">
                    <div class="property-feature-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <span>4 Quartos</span>
                </div>
                <div class="property-feature">
                    <div class="property-feature-icon">
                        <i class="fas fa-bath"></i>
                    </div>
                    <span>4 Banheiros</span>
                </div>
                <div class="property-feature">
                    <div class="property-feature-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <span>4 Vagas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria de Imagens -->
    <section class="container mb-5">
        <div class="splide" aria-label="Galeria do Imóvel">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80" alt="Sala de estar">
                    </li>
                    <li class="splide__slide">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80" alt="Cozinha moderna">
                    </li>
                    <li class="splide__slide">
                        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80" alt="Quarto suíte">
                    </li>
                    <li class="splide__slide">
                        <img src="https://images.unsplash.com/photo-1600566752225-72f5a6d46f55?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80" alt="Banheiro social">
                    </li>
                    <li class="splide__slide">
                        <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80" alt="Varanda gourmet">
                    </li>
                </ul>
            </div>
            
            <div class="splide__thumbnails">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Miniatura sala de estar">
                        </li>
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Miniatura cozinha">
                        </li>
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Miniatura quarto">
                        </li>
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1600566752225-72f5a6d46f55?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Miniatura banheiro">
                        </li>
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Miniatura varanda">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalhes do Imóvel -->
    <section class="property-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mb-4">Descrição do Imóvel</h3>
                    <p class="mb-4">Exclusivo apartamento de luxo no coração de Moema, totalmente reformado com materiais de primeira qualidade. Localizado no 15° andar do edifício Green Life, com vista panorâmica para a cidade.</p>
                    
                    <p class="mb-4">O apartamento conta com ampla sala em dois ambientes, cozinha gourmet totalmente equipada com eletrodomésticos novos, 4 suítes (sendo 1 master com closet), varanda gourmet com churrasqueira, lavanderia completa e dependência de empregada.</p>
                    
                    <h4 class="mb-3">Características</h4>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Armários embutidos em todos os quartos</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Piso porcelanato em toda a área social</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Cozinha com ilha e bancada de mármore</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Sistema de aquecimento central a gás</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Portaria 24h e segurança eletrônica</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Academia e piscina aquecida no condomínio</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Vagas cobertas na garagem</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Próximo ao Shopping Ibirapuera</span>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="mb-3">Planta do Imóvel</h4>
                    <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="img-fluid rounded mb-4" alt="Planta do apartamento">
                    
                    <h4 class="mb-3">Localização</h4>
                    <div class="property-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.236595381733!2d-46.664816924687!3d-23.59886197878293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a3a9c9f8e1f%3A0x3b7d4e4615861e6b!2sMoema%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1681234567890!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="detail-item mb-4">
                        <i class="fas fa-subway"></i>
                        <span>Próximo à estação Moema do metrô (10 min a pé)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Contato -->
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h3 class="mb-4 text-center">Interessado neste imóvel?</h3>
                        <p class="mb-4 text-center">Entre em contato com nosso corretor para agendar uma visita ou obter mais informações.</p>
                        
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Seu nome" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" placeholder="Seu e-mail" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="tel" class="form-control" placeholder="Seu telefone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select class="form-select">
                                        <option selected>Como prefere ser contactado?</option>
                                        <option>WhatsApp</option>
                                        <option>Ligação</option>
                                        <option>E-mail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Sua mensagem"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-contact px-5">
                                    <i class="fas fa-paper-plane me-2"></i> Enviar Mensagem
                                </button>
                            </div>
                        </form>
                        
                        <hr class="my-4">
                        
                        <div class="text-center">
                            <p class="mb-3">Ou fale diretamente com nosso corretor</p>
                            <a href="tel:+5511987654321" class="btn btn-outline-primary mb-2 me-2">
                                <i class="fas fa-phone me-2"></i> (11) 98765-4321
                            </a>
                            <a href="https://wa.me/5511987654321" class="btn btn-success mb-2">
                                <i class="fab fa-whatsapp me-2"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Imóveis Similares -->
    <section class="similar-properties">
        <div class="container">
            <h3 class="mb-4">Imóveis Similares</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Apartamento similar">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Venda</span>
                            <h5 class="card-title">Apartamento 3 quartos</h5>
                            <p class="card-text text-muted small"><i class="fas fa-map-marker-alt text-primary"></i> Jardim Paulista, SP</p>
                            <p class="property-price">R$ 1.850.000</p>
                            <div class="property-features">
                                <div class="property-feature">
                                    <i class="fas fa-ruler-combined"></i> 110 m²
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
                        </div>
                        <div class="card-footer bg-white">
                            <a href="#" class="btn btn-primary w-100">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1605146769289-440113cc3d00?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Cobertura similar">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Venda</span>
                            <h5 class="card-title">Cobertura Duplex</h5>
                            <p class="card-text text-muted small"><i class="fas fa-map-marker-alt text-primary"></i> Itaim Bibi, SP</p>
                            <p class="property-price">R$ 2.750.000</p>
                            <div class="property-features">
                                <div class="property-feature">
                                    <i class="fas fa-ruler-combined"></i> 180 m²
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bed"></i> 3 Quartos
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-bath"></i> 3 Banheiros
                                </div>
                                <div class="property-feature">
                                    <i class="fas fa-car"></i> 3 Vagas
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="#" class="btn btn-primary w-100">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Casa similar">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Venda</span>
                            <h5 class="card-title">Casa 4 quartos</h5>
                            <p class="card-text text-muted small"><i class="fas fa-map-marker-alt text-primary"></i> Vila Nova Conceição, SP</p>
                            <p class="property-price">R$ 3.200.000</p>
                            <div class="property-features">
                                <div class="property-feature">
                                    <i class="fas fa-ruler-combined"></i> 240 m²
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
                        </div>
                        <div class="card-footer bg-white">
                            <a href="#" class="btn btn-primary w-100">Ver detalhes</a>
                        </div>
                    </div>
                </div>
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
                        <li class="mb-2"><a href="index.html" class="text-light">Home</a></li>
                        <li class="mb-2"><a href="aluguel.html" class="text-light">Aluguel</a></li>
                        <li class="mb-2"><a href="venda.html" class="text-light">Compra de Imóvel</a></li>
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
    <!-- Splide.js para galeria de imagens -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Configuração da galeria principal
            var main = new Splide('.splide', {
                type: 'fade',
                rewind: true,
                pagination: false,
                arrows: true,
                heightRatio: 0.5,
            });
            
            // Configuração das miniaturas
            var thumbnails = new Splide('.splide__thumbnails', {
                fixedWidth: 100,
                fixedHeight: 80,
                gap: 10,
                rewind: true,
                pagination: false,
                isNavigation: true,
                arrows: false,
                focus: 'center',
                breakpoints: {
                    768: {
                        fixedWidth: 70,
                        fixedHeight: 60,
                    },
                },
            });
            
            // Sincroniza as galerias
            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();
        });
    </script>
</body>
</html>