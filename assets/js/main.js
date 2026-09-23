/**
 * Emergencia Fugas - Main JavaScript (Vanilla JS Dinámico)
 * Estilo interactivo Mezon Theme 01
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. STICKY HEADER SCROLL OBSERVER
    const siteHeader = document.getElementById('siteHeader');
    if (siteHeader) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                siteHeader.classList.add('scrolled');
            } else {
                siteHeader.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    // 2. MOBILE DRAWER NAVIGATION (TOGGLE COMPLETO)
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const mobileDrawerClose = document.getElementById('mobileDrawerClose');
    const drawerBackdrop = document.getElementById('drawerBackdrop');

    function openDrawer() {
        if (!mobileDrawer) return;
        mobileDrawer.classList.add('active');
        if (drawerBackdrop) drawerBackdrop.classList.add('active');
        if (mobileMenuToggle) mobileMenuToggle.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        if (!mobileDrawer) return;
        mobileDrawer.classList.remove('active');
        if (drawerBackdrop) drawerBackdrop.classList.remove('active');
        if (mobileMenuToggle) mobileMenuToggle.classList.remove('open');
        document.body.style.overflow = '';
    }

    function toggleDrawer(e) {
        if (e) {
            e.preventDefault();
            e.stopPropagation();
        }
        if (!mobileDrawer) return;
        const isOpen = mobileDrawer.classList.contains('active');
        if (isOpen) {
            closeDrawer();
        } else {
            openDrawer();
        }
    }

    if (mobileMenuToggle && mobileDrawer) {
        mobileMenuToggle.addEventListener('click', toggleDrawer);
        if (mobileDrawerClose) mobileDrawerClose.addEventListener('click', closeDrawer);
        if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);

        // Cerrar con tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeDrawer();
        });

        // Cerrar al hacer clic en enlaces del drawer
        const drawerLinks = mobileDrawer.querySelectorAll('a');
        drawerLinks.forEach(link => {
            link.addEventListener('click', closeDrawer);
        });
    }

    // 3. COTIZADOR Y DIAGNÓSTICO INTERACTIVO DE EMERGENCIAS
    const calcSection = document.getElementById('cotizador');
    if (calcSection) {
        // Estado del diagnóstico
        const state = {
            property: 'Casa',
            gasType: 'Gas Natural (Metrogas)',
            symptom: 'Fuerte olor a gas repentino',
            comuna: 'Providencia'
        };

        // Elementos de la UI de resultados
        const resProperty = document.getElementById('resProperty');
        const resGas = document.getElementById('resGas');
        const resSolucion = document.getElementById('resSolucion');
        const resTiempo = document.getElementById('resTiempo');
        const resWhatsAppBtn = document.getElementById('resWhatsAppBtn');

        // Escuchar clics en botones tipo Pill
        const pillButtons = calcSection.querySelectorAll('.pill-btn');
        pillButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const group = btn.closest('.pill-options');
                group.querySelectorAll('.pill-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const field = btn.getAttribute('data-field');
                const value = btn.getAttribute('data-value');
                state[field] = value;

                updateDiagnostic();
            });
        });

        // Escuchar cambio en select de comuna
        const comunaSelect = document.getElementById('comunaSelect');
        if (comunaSelect) {
            comunaSelect.addEventListener('change', (e) => {
                state.comuna = e.target.value;
                updateDiagnostic();
            });
        }

        // Función para actualizar resultado y generar enlace WhatsApp
        function updateDiagnostic() {
            if (!resProperty) return;

            resProperty.textContent = state.property;
            resGas.textContent = state.gasType;

            // Lógica técnica de recomendación
            let solucion = 'Sellado con Prodoral R6-1 (Sin romper)';
            let tiempo = '30 - 45 minutos';

            if (state.symptom.includes('oculta') || state.symptom.includes('Sospecha')) {
                solucion = 'Detección acústica + Inyección Prodoral R6-1';
            } else if (state.symptom.includes('Sello Rojo') || state.symptom.includes('corte')) {
                solucion = 'Sellado Prodoral R6-1 + Manometría Sello Verde SEC';
            }

            // Tiempos estimados por comuna
            const comunasRapidas = ['Providencia', 'Las Condes', 'Ñuñoa', 'Santiago Centro', 'Vitacura'];
            if (comunasRapidas.includes(state.comuna)) {
                tiempo = '25 - 35 minutos (Móvil cercano)';
            } else {
                tiempo = '35 - 50 minutos';
            }

            resSolucion.textContent = solucion;
            resTiempo.textContent = tiempo;

            // Formatear mensaje para WhatsApp
            const mensaje = `🚨 *URGENCIA FUGA DE GAS - EMERGENCIA FUGAS*\n\n` +
                            `Hola, solicito asistencia técnica urgente:\n` +
                            `📍 *Comuna:* ${state.comuna}\n` +
                            `🏠 *Tipo de Propiedad:* ${state.property}\n` +
                            `🔥 *Tipo de Suministro:* ${state.gasType}\n` +
                            `⚠️ *Problema:* ${state.symptom}\n` +
                            `🛠️ *Servicio Requerido:* ${solucion}\n\n` +
                            `¿Tienen instalador SEC disponible para atenderme de inmediato?`;

            const phoneRaw = '56949877316';
            const waUrl = `https://wa.me/${phoneRaw}?text=${encodeURIComponent(mensaje)}`;
            resWhatsAppBtn.setAttribute('href', waUrl);
        }

        // Inicializar con valores iniciales
        updateDiagnostic();
    }

    // 4. ACORDEÓN DE PREGUNTAS FRECUENTES (FAQ - Cero Reflow con CSS Grid)
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');

        if (questionBtn) {
            questionBtn.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                // Cerrar los otros elementos (acordeón clásico)
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                });

                if (!isActive) {
                    item.classList.add('active');
                }
            });
        }
    });

    // Abrir la primera pregunta por defecto sin reflow
    if (faqItems.length > 0) {
        faqItems[0].classList.add('active');
    }

    // 5. ANIMACIÓN NUMÉRICA PARA ESTADÍSTICAS
    const counterElements = document.querySelectorAll('.counter-val');
    let hasAnimated = false;

    function animateCounters() {
        if (hasAnimated) return;
        
        counterElements.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'), 10);
            let count = 0;
            const step = Math.ceil(target / 40);

            const timer = setInterval(() => {
                count += step;
                if (count >= target) {
                    counter.textContent = target.toLocaleString('es-CL');
                    clearInterval(timer);
                } else {
                    counter.textContent = count.toLocaleString('es-CL');
                }
            }, 30);
        });
        hasAnimated = true;
    }

    // Observar visibilidad de las estadísticas
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
            }
        });
    }, { threshold: 0.3 });

    const statsSection = document.querySelector('.hero-stats-mini');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

});
