// Animação de scroll suave para links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if(targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if(targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Efeito de aparecimento ao rolar a página
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.property-card, .service-card, .testimonial-card, .about-image, .about-content');
    
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if(elementPosition < screenPosition) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
};

// Configuração inicial para elementos animados
window.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.property-card, .service-card, .testimonial-card, .about-image, .about-content');
    
    elements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });
    
    // Dispara a animação uma vez no carregamento
    setTimeout(animateOnScroll, 300);
});

// Adiciona o evento de scroll
window.addEventListener('scroll', animateOnScroll);

// Ativa tooltips do Bootstrap
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Validação do formulário de newsletter
const newsletterForm = document.querySelector('.newsletter-form');
if(newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const emailInput = this.querySelector('input[type="email"]');
        
        if(emailInput.value && emailInput.value.includes('@')) {
            // Simula o envio do formulário
            emailInput.value = '';
            alert('Obrigado por assinar nossa newsletter!');
        } else {
            alert('Por favor, insira um e-mail válido.');
        }
    });
}

// Configuração do carrossel de notícias
const newsCarousel = document.getElementById('newsCarousel');
if(newsCarousel) {
    // Configura intervalo de transição automática (5 segundos)
    const carousel = new bootstrap.Carousel(newsCarousel, {
        interval: 5000,
        pause: 'hover'
    });
    
    // Adiciona animação fade
    newsCarousel.addEventListener('slide.bs.carousel', function () {
        const activeItem = this.querySelector('.carousel-item.active');
        activeItem.classList.add('fade-out');
        
        setTimeout(() => {
            activeItem.classList.remove('fade-out');
        }, 600);
    });
}

// Parte dos imóveis

// Filtros da galeria de imóveis
document.addEventListener('DOMContentLoaded', function() {
    const filterForm = document.getElementById('propertyFilter');
    const sortSelect = document.getElementById('sortProperties');
    const propertyItems = document.querySelectorAll('.property-item');
    
    if(filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            filterProperties();
        });
        
        filterForm.addEventListener('reset', function() {
            setTimeout(filterProperties, 0);
        });
    }
    
    if(sortSelect) {
        sortSelect.addEventListener('change', function() {
            sortProperties();
        });
    }
    
    function filterProperties() {
        const type = document.getElementById('filterType').value;
        const transaction = document.getElementById('filterTransaction').value;
        const location = document.getElementById('filterLocation').value;
        const bedrooms = document.getElementById('filterBedrooms').value;
        const priceMin = parseInt(document.getElementById('filterPriceMin').value);
        const priceMax = parseInt(document.getElementById('filterPriceMax').value);
        const areaMin = parseInt(document.getElementById('filterAreaMin').value);
        
        propertyItems.forEach(item => {
            const itemType = item.dataset.type;
            const itemTransaction = item.dataset.transaction;
            const itemLocation = item.dataset.location;
            const itemBedrooms = item.dataset.bedrooms;
            const itemPrice = parseInt(item.dataset.price);
            const itemArea = parseInt(item.dataset.area);
            
            const typeMatch = type === 'all' || itemType === type;
            const transactionMatch = transaction === 'all' || itemTransaction === transaction;
            const locationMatch = location === 'all' || itemLocation === location;
            const bedroomsMatch = bedrooms === 'all' || 
                                (bedrooms === '4+' && itemBedrooms >= 4) || 
                                itemBedrooms === bedrooms;
            const priceMatch = itemPrice >= priceMin && itemPrice <= priceMax;
            const areaMatch = itemArea >= areaMin;
            
            if(typeMatch && transactionMatch && locationMatch && bedroomsMatch && priceMatch && areaMatch) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    function sortProperties() {
        const sortValue = sortSelect.value;
        const container = document.getElementById('propertyGrid');
        const items = Array.from(document.querySelectorAll('.property-item'));
        
        items.sort((a, b) => {
            const aPrice = parseInt(a.dataset.price);
            const bPrice = parseInt(b.dataset.price);
            const aArea = parseInt(a.dataset.area);
            const bArea = parseInt(b.dataset.area);
            
            switch(sortValue) {
                case 'price-asc':
                    return aPrice - bPrice;
                case 'price-desc':
                    return bPrice - aPrice;
                case 'area-asc':
                    return aArea - bArea;
                case 'area-desc':
                    return bArea - aArea;
                default: // 'recent' or others
                    return 0;
            }
        });
        
        // Clear container
        while(container.firstChild) {
            container.removeChild(container.firstChild);
        }
        
        // Append sorted items
        items.forEach(item => {
            container.appendChild(item);
        });
    }
});

// Efeitos para a página da equipe
document.addEventListener('DOMContentLoaded', function() {
    // Animação dos cards da equipe
    const teamCards = document.querySelectorAll('.team-card, .support-card');
    
    teamCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 300);
    });
    
    // Tooltips para contatos
    const contactButtons = document.querySelectorAll('.btn-outline-primary');
    contactButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.innerHTML = `<i class="fas fa-envelope"></i> ${this.textContent}`;
        });
        
        button.addEventListener('mouseleave', function() {
            this.textContent = 'Contato';
        });
    });
});

// Funcionalidades da página de login
document.addEventListener('DOMContentLoaded', function() {
    // Mostrar/ocultar senha
    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.getElementById('password');
    
    if(togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    }
    
    // Modal de recuperação de senha
    const forgotPasswordLink = document.getElementById('forgotPassword');
    const forgotPasswordModal = new bootstrap.Modal(document.getElementById('forgotPasswordModal'));
    
    if(forgotPasswordLink) {
        forgotPasswordLink.addEventListener('click', function(e) {
            e.preventDefault();
            forgotPasswordModal.show();
        });
    }
    
    // Validação do formulário de login
    const loginForm = document.getElementById('loginForm');
    
    if(loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulação de login - em produção, isso seria uma chamada AJAX
            const email = this.querySelector('#email').value;
            const password = this.querySelector('#password').value;
            
            // Validação simples (em produção, use validação mais robusta)
            if(email && password) {
                // Mostrar loading
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Entrando...';
                submitBtn.disabled = true;
                
                // Simular requisição
                setTimeout(function() {
                    // Redirecionar para dashboard (em caso de sucesso)
                    window.location.href = 'dashboard.html';
                    
                    // Ou mostrar erro (em caso de falha)
                    // const errorDiv = document.createElement('div');
                    // errorDiv.className = 'alert alert-danger mt-3';
                    // errorDiv.textContent = 'E-mail ou senha incorretos';
                    // loginForm.appendChild(errorDiv);
                    
                    // Restaurar botão
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 1500);
            }
        });
    }
    
    // Validação do formulário de recuperação
    const recoveryForm = document.getElementById('recoveryForm');
    
    if(recoveryForm) {
        recoveryForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Mostrar loading
            const submitBtn = this.closest('.modal-content').querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...';
            submitBtn.disabled = true;
            
            // Simular envio
            setTimeout(function() {
                // Fechar modal e mostrar mensagem de sucesso
                forgotPasswordModal.hide();
                
                // Mostrar alerta de sucesso
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-success mt-3';
                alertDiv.innerHTML = '<i class="fas fa-check-circle me-2"></i> Enviamos um e-mail com as instruções para redefinir sua senha.';
                document.querySelector('.login-card').prepend(alertDiv);
                
                // Remover alerta após 5 segundos
                setTimeout(() => {
                    alertDiv.remove();
                }, 5000);
                
                // Restaurar botão
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
    }
    
    // Efeito de foco nos inputs
    const formInputs = document.querySelectorAll('.form-control');
    
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.closest('.mb-3').querySelector('label').style.color = var(--primary-color);
            this.style.borderColor = var(--primary-color);
        });
        
        input.addEventListener('blur', function() {
            this.closest('.mb-3').querySelector('label').style.color = '';
            this.style.borderColor = '';
        });
    });
});

// Funcionalidades do Blog
document.addEventListener('DOMContentLoaded', function() {
    // Animação dos cards do blog
    const blogCards = document.querySelectorAll('.blog-card, .blog-sidebar .card');
    
    blogCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 300);
    });
    
    // Validação do formulário de newsletter
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if(newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const nameInput = this.querySelector('input[type="text"]');
            const emailInput = this.querySelector('input[type="email"]');
            
            if(nameInput.value && emailInput.value && emailInput.value.includes('@')) {
                // Simular envio
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';
                submitBtn.disabled = true;
                
                setTimeout(function() {
                    // Mostrar mensagem de sucesso
                    const successDiv = document.createElement('div');
                    successDiv.className = 'alert alert-success mt-3';
                    successDiv.innerHTML = '<i class="fas fa-check-circle me-2"></i> Obrigado por assinar nossa newsletter!';
                    newsletterForm.appendChild(successDiv);
                    
                    // Limpar formulário
                    nameInput.value = '';
                    emailInput.value = '';
                    
                    // Restaurar botão
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    
                    // Remover mensagem após 5 segundos
                    setTimeout(() => {
                        successDiv.remove();
                    }, 5000);
                }, 1500);
            } else {
                alert('Por favor, preencha todos os campos corretamente.');
            }
        });
    }
    
    // Busca no blog (simulação)
    const searchForm = document.querySelector('.search-form');
    
    if(searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const searchInput = this.querySelector('input[type="text"]');
            
            if(searchInput.value.trim() !== '') {
                alert(`Redirecionando para resultados de busca por: "${searchInput.value}"`);
                // Em produção, aqui seria o redirecionamento para a página de resultados
                // window.location.href = `busca.html?q=${encodeURIComponent(searchInput.value)}`;
            }
        });
    }
});