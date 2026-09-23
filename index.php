<?php
$current_page = 'home';
$page_title = 'Emergencia Fugas de Gas Santiago | Gasfiter Certificado SEC | Sellado Prodoral R6-1 Sin Romper';
$page_desc = 'Especialistas en detección y sellado de fugas de gas con tecnología alemana Prodoral R6-1 en Santiago. Sin romper muros ni pisos. Gasfiter certificado SEC 24/7.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. HERO SECTION (MEZON THEME 01 - DEFAULT HOME) -->
<section class="hero-mezon">
    <div class="hero-bg-overlay"></div>
    <div class="container hero-grid">
        <div class="hero-content">
            <div class="hero-badge-pill">
                <span class="pulse-dot"></span> ATENCIÓN URGENTE EN SANTIAGO • TÉCNICOS SEC 24/7
            </div>
            <h1 class="hero-title">
                Expertos en Detección y Sellado de Fugas de Gas <span class="text-accent">Sin Romper</span>
            </h1>
            <p class="hero-desc">
                Resolvemos emergencias de gas en el mismo día con <strong>tecnología alemana Prodoral R6-1</strong> y detección por gas trazador. Olvídate de picar muros, cerámicas o levantar pisos. Servicio 100% certificado por la SEC.
            </p>
            <div class="hero-actions">
                <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn-mezon-whatsapp btn-pulse">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                    <span>Pedir Asistencia por WhatsApp</span>
                </a>
                <a href="#prodoral-info" class="btn-mezon-outline">
                    <span>Ver Cómo Funciona Prodoral</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Trust Bar -->
            <div class="hero-trust-bar">
                <div class="trust-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <span>Instalador SEC Autorizado</span>
                </div>
                <div class="trust-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>Cero Demolición de Paredes</span>
                </div>
                <div class="trust-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span>Atención Hoy en Menos de 45m</span>
                </div>
            </div>
        </div>

        <!-- Right Side: Urgency Action Card -->
        <div class="hero-card-urgency">
            <span class="hero-card-badge">🚨 GUARDIA ACTIVA HOY</span>
            <h3 class="hero-card-title">Central de Emergencias de Gas</h3>
            <p class="hero-card-p">Si te cortaron el gas con <strong>Sello Rojo</strong> o sientes olor a gas, no esperes. Estamos listos para acudir con equipos de sellado.</p>

            <div class="urgency-phone-display">
                <div class="urgency-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                </div>
                <div class="urgency-meta">
                    <span>Llamada Telefónica Inmediata:</span>
                    <a href="tel:<?= PHONE_PRIMARY_RAW ?>"><?= PHONE_PRIMARY ?></a>
                </div>
            </div>

            <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn-mezon-primary w-100 mb-3">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                Enviar Ubicación por WhatsApp
            </a>

            <div class="hero-stats-mini">
                <div class="stat-box">
                    <strong>+<span class="counter-val" data-target="90000">0</span></strong>
                    <span>Servicios Ejecutados</span>
                </div>
                <div class="stat-box">
                    <strong><span class="counter-val" data-target="100">0</span>%</strong>
                    <span>Hermeticidad Garantizada</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. OVERLAPPING FEATURE CARDS (ESTILO MEZON 4-COLUMNS) -->
<section class="mezon-features-overlap">
    <div class="container">
        <div class="features-grid-4">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3 class="feature-title">Sellado con Prodoral R6-1</h3>
                <p class="feature-desc">Tecnología alemana que sella microfugas desde el interior de la cañería sin picar muros ni cerámicas.</p>
                <a href="sellado-de-fugas-de-gas-con-prodoral.php" class="feature-link">Saber Más &rarr;</a>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="feature-title">Detección No Invasiva</h3>
                <p class="feature-desc">Ubicamos el punto exacto de la filtración con gas trazador inerte y geófono acústico ultrasónico.</p>
                <a href="deteccion-de-fugas-de-gas.php" class="feature-link">Ver Tecnología &rarr;</a>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </div>
                <h3 class="feature-title">Sello Verde SEC</h3>
                <p class="feature-desc">Regularizamos tu instalación ante la SEC y tramitamos el levantamiento de sellos rojos con manometría certificada.</p>
                <a href="certificacion-sello-verde-sec.php" class="feature-link">Normativa SEC &rarr;</a>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <h3 class="feature-title">Urgencias 24/7 en Santiago</h3>
                <p class="feature-desc">Unidades móviles de guardia permanente en Las Condes, Providencia, Ñuñoa, Santiago Centro y toda la RM.</p>
                <a href="contacto.php" class="feature-link">Solicitar Móvil &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- 3. COMPARADOR VISUAL: MÉTODO ANTIGUO VS MÉTODO PRODORAL -->
<section class="comparison-section section-padding" id="comparador">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">¿Por qué romper si puedes sellar?</span>
            <h2 class="section-title">El Método Antiguo vs. La Innovación Prodoral R6-1</h2>
            <p class="section-desc">Comparativa real de costos, tiempo de intervención y comodidad para tu hogar o comunidad.</p>
        </div>

        <div class="comparison-grid">
            <!-- Box Método Tradicional -->
            <div class="comparison-box box-old-method">
                <span class="box-badge box-badge-red">❌ Método Tradicional Destructivo</span>
                <h3 class="box-title">Picar paredes y reemplazar cañerías</h3>
                <ul class="box-list">
                    <li>
                        <svg class="icon-red" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        <span><strong>Demolición Invasiva:</strong> Romper azulejos, cerámicas, pisos flotantes y muros de hormigón.</span>
                    </li>
                    <li>
                        <svg class="icon-red" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        <span><strong>Tiempo Prolongado:</strong> Obras de 5 a 12 días sin suministro de gas ni agua caliente.</span>
                    </li>
                    <li>
                        <svg class="icon-red" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        <span><strong>Costo Desbordado:</strong> Doble gasto al contratar gasfitería + albañilería, yeso y reposición de cerámicas idénticas.</span>
                    </li>
                    <li>
                        <svg class="icon-red" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        <span><strong>Polvo y Molestias:</strong> Ruido constante de rotomartillos y suciedad extrema en el domicilio.</span>
                    </li>
                </ul>
            </div>

            <!-- Box Prodoral R6-1 -->
            <div class="comparison-box box-prodoral-method">
                <span class="box-badge box-badge-green">✔️ Nuestra Solución: Prodoral R6-1</span>
                <h3 class="box-title">Sellado Interno No Invasivo (Alemania)</h3>
                <ul class="box-list">
                    <li>
                        <svg class="icon-green" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>100% Sin Romper:</strong> Se inyecta el polímero directamente por las llaves de gas existentes. Muros intactos.</span>
                    </li>
                    <li>
                        <svg class="icon-green" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Listo en Pocas Horas:</strong> Proceso de inyección, purga y secado en 3 a 5 horas el mismo día.</span>
                    </li>
                    <li>
                        <svg class="icon-green" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Ahorro de hasta un 60%:</strong> Un solo servicio integral sin gastos extras de maestros ni reconstructores.</span>
                    </li>
                    <li>
                        <svg class="icon-green" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Certificación SEC Inmediata:</strong> Prueba de hermeticidad con manómetro calibrado conforme al DS 66.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 4. COTIZADOR Y DIAGNÓSTICO INTERACTIVO DE EMERGENCIAS (VANILLA JS DINÁMICO) -->
<section class="calculator-section section-padding" id="cotizador">
    <div class="container">
        <div class="section-header">
            <span class="section-tag text-accent">Herramienta Interactiva</span>
            <h2 class="section-title text-white">Cotizador y Pre-Diagnóstico de Emergencia</h2>
            <p class="section-desc" style="color: #94A3B8;">Configura tu caso y recibe una estimación técnica instantánea con derivación prioritaria a WhatsApp.</p>
        </div>

        <div class="calculator-card">
            <div class="calc-grid">
                <!-- Selectores a la izquierda -->
                <div class="calc-inputs">
                    <!-- Grupo 1: Tipo Inmueble -->
                    <div class="calc-group">
                        <label class="calc-label">1. Tipo de Propiedad:</label>
                        <div class="pill-options">
                            <button type="button" class="pill-btn active" data-field="property" data-value="Casa Particular">Casa</button>
                            <button type="button" class="pill-btn" data-field="property" data-value="Departamento">Departamento</button>
                            <button type="button" class="pill-btn" data-field="property" data-value="Edificio / Comunidad">Comunidad / Edificio</button>
                            <button type="button" class="pill-btn" data-field="property" data-value="Local Comercial / Empresa">Comercio / Empresa</button>
                        </div>
                    </div>

                    <!-- Grupo 2: Tipo de Gas -->
                    <div class="calc-group">
                        <label class="calc-label">2. Tipo de Gas:</label>
                        <div class="pill-options">
                            <button type="button" class="pill-btn active" data-field="gasType" data-value="Gas Natural (Metrogas)">Gas Natural (Metrogas)</button>
                            <button type="button" class="pill-btn" data-field="gasType" data-value="Gas Licuado GLP (Balón / Cilindro)">Cilindros GLP (Lipigas/Gasco/Abastible)</button>
                            <button type="button" class="pill-btn" data-field="gasType" data-value="Tanque Granel GLP">Tanque Granel GLP</button>
                        </div>
                    </div>

                    <!-- Grupo 3: Síntoma -->
                    <div class="calc-group">
                        <label class="calc-label">3. ¿Qué síntoma presenta la red?</label>
                        <div class="pill-options">
                            <button type="button" class="pill-btn active" data-field="symptom" data-value="Fuerte olor a gas repentino">Olor a gas activo</button>
                            <button type="button" class="pill-btn" data-field="symptom" data-value="Corte de medidor con Sello Rojo Metrogas/SEC">Corte de suministro / Sello Rojo</button>
                            <button type="button" class="pill-btn" data-field="symptom" data-value="Sospecha de fuga oculta en muro o piso">Filtración no visible en muros</button>
                            <button type="button" class="pill-btn" data-field="symptom" data-value="Inspección para obtención de Sello Verde">Inspección Sello Verde SEC</button>
                        </div>
                    </div>

                    <!-- Grupo 4: Comuna -->
                    <div class="calc-group">
                        <label class="calc-label">4. Comuna en Santiago:</label>
                        <select class="calc-select" id="comunaSelect">
                            <?php foreach ($cobertura_comunas as $comuna): ?>
                            <option value="<?= $comuna ?>" <?= $comuna === 'Providencia' ? 'selected' : '' ?>><?= $comuna ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Panel de Resultado Generado -->
                <div class="calc-result-box">
                    <div>
                        <span class="result-badge">🚨 Diagnóstico Técnico Preliminar</span>
                        <h4 class="result-title" id="resSolucion">Sellado con Prodoral R6-1</h4>
                        <ul class="result-details">
                            <li><span>Inmueble:</span> <strong id="resProperty">Casa Particular</strong></li>
                            <li><span>Red de Suministro:</span> <strong id="resGas">Gas Natural (Metrogas)</strong></li>
                            <li><span>Tiempo Estimado Móvil:</span> <strong id="resTiempo" class="text-accent">25 - 35 minutos</strong></li>
                            <li><span>Certificación:</span> <strong>Instalador SEC Clase 1</strong></li>
                        </ul>
                    </div>

                    <div class="result-cta">
                        <a href="#" id="resWhatsAppBtn" target="_blank" rel="noopener" class="btn-mezon-whatsapp w-100">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                            Confirmar Disponibilidad por WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. GRILLA DE SERVICIOS (MEZON CARDS 3-COLUMNS) -->
<section class="services-section section-padding" id="servicios">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Nuestras Especialidades</span>
            <h2 class="section-title">Servicios Profesionales de Gasfitería SEC</h2>
            <p class="section-desc">Atención de máxima prioridad para viviendas unifamiliares, condominios, restaurantes y cadenas industriales.</p>
        </div>

        <div class="services-grid-3">
            <?php foreach ($servicios_data as $servicio): ?>
            <div class="service-card-mezon">
                <span class="service-badge-pill"><?= $servicio['badge'] ?></span>
                <div class="service-icon-circle">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <?php if ($servicio['icon'] === 'shield-check'): ?>
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 11 14 15 10"></polyline>
                        <?php elseif ($servicio['icon'] === 'search'): ?>
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        <?php elseif ($servicio['icon'] === 'award'): ?>
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        <?php elseif ($servicio['icon'] === 'tool'): ?>
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        <?php elseif ($servicio['icon'] === 'flame'): ?>
                            <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path>
                        <?php else: ?>
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                        <?php endif; ?>
                    </svg>
                </div>
                <h3 class="service-title"><?= $servicio['title'] ?></h3>
                <p class="service-desc"><?= $servicio['desc'] ?></p>
                <div class="service-benefit-box">
                    💡 <?= $servicio['beneficio'] ?>
                </div>
                <div class="service-card-footer">
                    <a href="<?= $servicio['url'] ?>" class="service-cta-link">
                        Conocer Más
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                    <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= urlencode('Hola, necesito cotizar el servicio de ' . $servicio['title']) ?>" target="_blank" rel="noopener" class="tag-hot">
                        Pedir Hoy
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. TECNOLOGÍA PRODORAL R6-1 EN DETALLE (SPOTLIGHT) -->
<section class="prodoral-spotlight section-padding" id="prodoral-info">
    <div class="container spotlight-grid">
        <div class="spotlight-media">
            <img src="assets/img/prodoral-system.jpg" alt="Sistema de Inyección Prodoral R6-1 Fugas de Gas">
            <div class="spotlight-badge-overlay">
                <strong>Alemania DIN EN 13090</strong>
                <span>Homologado para redes de gas natural y GLP</span>
            </div>
        </div>

        <div class="spotlight-content">
            <span class="section-tag" style="background: rgba(245,166,35,0.2); color: var(--primary);">Innovación Alemana en Chile</span>
            <h2>Sellado de Fugas con Polímero Sellante Prodoral R6-1</h2>
            <p>
                El <strong>Prodoral R6-1</strong> es una dispersión plástica alemana libre de disolventes y no inflamable, diseñada exclusivamente para la estanqueidad posterior de tuberías de gas con uniones roscadas y microfisuras.
            </p>
            <p>
                A través de un equipo de presión especializado, el producto se insufla por toda la red interior impregnando las zonas de escape. Posteriormente, el exceso se recupera íntegramente y la red se somete a secado forzado de aire, creando una película elástica permanente que resiste vibraciones y variaciones térmicas.
            </p>

            <div class="spotlight-specs-grid">
                <div class="spec-item">
                    <strong>Cero Roturas de Estructura</strong>
                    <span>No requiere romper muros, pisos ni cielo raso.</span>
                </div>
                <div class="spec-item">
                    <strong>Resistencia a Vibraciones</strong>
                    <span>Película elástica permanente que no se resquebraja.</span>
                </div>
                <div class="spec-item">
                    <strong>Compatible GN y GLP</strong>
                    <span>Apto para gas de cañería Metrogas y balones de gas licuado.</span>
                </div>
                <div class="spec-item">
                    <strong>Prueba Manométrica SEC</strong>
                    <span>Entrega de informe técnico de hermeticidad certificada.</span>
                </div>
            </div>

            <div class="d-flex gap-3 flex-wrap">
                <a href="sellado-de-fugas-de-gas-con-prodoral.php" class="btn-mezon-primary">
                    Ver Guía Completa de Prodoral R6-1
                </a>
                <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="btn-mezon-outline">
                    Hablar con un Especialista SEC
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 7. PROCESO DE TRABAJO (4 PASOS MEZON) -->
<section class="steps-section section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Metodología Certificada</span>
            <h2 class="section-title">¿Cómo Trabajamos ante una Emergencia?</h2>
            <p class="section-desc">Un protocolo riguroso que garantiza seguridad total para tu familia y la continuidad del suministro.</p>
        </div>

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">01</div>
                <h4 class="step-title">Despacho de Urgencia</h4>
                <p class="step-desc">Coordinación inmediata por WhatsApp o llamada telefónica. Arribo de técnico SEC en menos de 45 minutos.</p>
            </div>
            <div class="step-card">
                <div class="step-number">02</div>
                <h4 class="step-title">Detección y Manometría</h4>
                <p class="step-desc">Aislamiento de la red y prueba con manómetro digital de precisión para medir la magnitud y ubicación de la fuga.</p>
            </div>
            <div class="step-card">
                <div class="step-number">03</div>
                <h4 class="step-title">Inyección Prodoral R6-1</h4>
                <p class="step-desc">Llenado a presión de la tubería con el polímero alemán, evacuación controlada y secado con soplante de aire.</p>
            </div>
            <div class="step-card">
                <div class="step-number">04</div>
                <h4 class="step-title">Certificado y Sello Verde</h4>
                <p class="step-desc">Prueba de estanqueidad final normada por la SEC y entrega de informe oficial para reposición del suministro.</p>
            </div>
        </div>
    </div>
</section>

<!-- 8. BLOQUE OFICIAL SEC CON QR -->
<section class="section-padding" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="sec-showcase-card">
            <div>
                <span class="section-tag">Tranquilidad y Ley Chilena</span>
                <h3 style="font-size: 1.8rem; margin-bottom: 14px;">Solo contrata Gasfíteres con Licencia Vigente de la SEC</h3>
                <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 18px;">
                    Manipular redes de gas sin acreditación legal de la <strong>Superintendencia de Electricidad y Combustibles (SEC)</strong> es un delito que pone en riesgo tu hogar y anula los seguros de incendio. En <strong>Emergencia Fugas</strong> todos nuestros técnicos portan carnet SEC activo y manómetros contrastados.
                </p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--dark-bg);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Instaladores Clase 1 y 2
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--dark-bg);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Cumplimiento Decreto Supremo 66
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--dark-bg);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Informes para Metrogas y Municipalidades
                    </div>
                </div>
            </div>
            <div style="text-align: center; background: #F8FAFC; padding: 20px; border-radius: var(--radius-md); border: 1px dashed #CBD5E1;">
                <img src="assets/img/qr-sec.png" alt="QR Verificación SEC" width="130" height="130" style="margin: 0 auto 10px; border-radius: 6px;">
                <span style="font-size: 0.78rem; font-weight: 700; color: var(--dark-bg); display: block;">Escanear para Validar en la SEC</span>
            </div>
        </div>
    </div>
</section>

<!-- 9. TESTIMONIOS REALES DE SANTIAGO -->
<section class="testimonials-section section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Clientes Satisfechos</span>
            <h2 class="section-title">Lo que Dicen Quienes Evitaron Romper su Casa</h2>
            <p class="section-desc">Opiniones de vecinos y administradores de edificios en toda la Región Metropolitana.</p>
        </div>

        <div class="testimonials-grid-3">
            <!-- Testimonio 1 -->
            <div class="testimonial-card">
                <div class="stars-rating">★★★★★</div>
                <p class="testimonial-text">
                    "Metrogas nos clausuró el medidor con sello rojo por una fuga en la losa entre la cocina y la logia. Otro gasfiter me quería romper todo el piso de porcelanato. Los muchachos de Emergencia Fugas aplicaron Prodoral R6-1 en 4 horas y pasamos la prueba SEC al día siguiente. Increíble servicio."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">CM</div>
                    <div class="author-info">
                        <strong>Carlos Morales</strong>
                        <span>Providencia (Edificio Pedro de Valdivia)</span>
                    </div>
                </div>
            </div>

            <!-- Testimonio 2 -->
            <div class="testimonial-card">
                <div class="stars-rating">★★★★★</div>
                <p class="testimonial-text">
                    "Sentíamos olor a gas licuado en el patio interior de la casa pero no encontrábamos de dónde venía. Llegaron con un detector de gas trazador y hallaron la microfuga en un codo empotrado. Lo sellaron de inmediato y me entregaron el certificado de manometría."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">PA</div>
                    <div class="author-info">
                        <strong>Patricia Aguirre</strong>
                        <span>Las Condes (Sector San Carlos de Apoquindo)</span>
                    </div>
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="testimonial-card">
                <div class="stars-rating">★★★★★</div>
                <p class="testimonial-text">
                    "Como administrador de una comunidad de 48 departamentos en Santiago Centro, una fuga en la matriz vertical era una pesadilla. Con la inyección de Prodoral no tuvimos que desalojar ni picar los pasillos. El informe técnico para la SEC fue impecable."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">RG</div>
                    <div class="author-info">
                        <strong>Rodrigo González</strong>
                        <span>Comité de Administración • Santiago Centro</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 10. PREGUNTAS FRECUENTES (FAQ ACORDEÓN MEZON) -->
<section class="faq-section section-padding" id="faq">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Resolvemos tus Dudas</span>
            <h2 class="section-title">Preguntas Frecuentes sobre Fugas y Prodoral</h2>
            <p class="section-desc">Información técnica clara para que tomes la mejor decisión de seguridad para tu familia.</p>
        </div>

        <div class="faq-list">
            <?php foreach ($faqs_data as $index => $faq): ?>
            <div class="faq-item <?= $index === 0 ? 'active' : '' ?>">
                <button type="button" class="faq-question">
                    <span><?= htmlspecialchars($faq['q']) ?></span>
                    <span class="faq-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p><?= htmlspecialchars($faq['a']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
