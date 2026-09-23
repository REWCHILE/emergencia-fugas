<?php
require_once __DIR__ . '/../config.php';
?>
    </main>

    <!-- FOOTER ESTILO MEZON THEME 01 -->
    <footer class="mezon-footer">
        <div class="footer-top-cta">
            <div class="container">
                <div class="footer-cta-card">
                    <div class="footer-cta-content">
                        <span class="badge-accent-dark">🚨 ASISTENCIA INMEDIATA 24 HORAS</span>
                        <h3 class="footer-cta-title">¿Sientes olor a gas o te cortaron el suministro con sello rojo?</h3>
                        <p class="footer-cta-text">No te arriesgues ni destruyas tu casa. Nuestros gasfíteres autorizados SEC llegan con tecnología alemana Prodoral R6-1 para sellar la fuga sin romper.</p>
                    </div>
                    <div class="footer-cta-buttons">
                        <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="btn-mezon-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                            Llamar: <?= PHONE_PRIMARY ?>
                        </a>
                        <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn-mezon-whatsapp">
                            WhatsApp de Urgencias
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-main">
            <div class="container footer-grid">
                <!-- Columna 1: Info Empresa y Sello SEC -->
                <div class="footer-col footer-col-about">
                    <div class="footer-brand">
                        <img src="assets/img/logotipo.webp" alt="Emergencia Fugas" width="56" height="56" class="footer-logo" loading="lazy">
                        <div>
                            <h4>EMERGENCIA <span class="text-accent">FUGAS</span></h4>
                            <small>Instalgaschile® • Instalador Certificado SEC</small>
                        </div>
                    </div>
                    <p class="footer-about-text">
                        Especialistas en detección acústica no destructiva y sellado de fugas de gas con polímero alemán <strong>Prodoral R6-1</strong>. Más de 90.000 servicios ejecutados en hogares, comunidades y empresas de la Región Metropolitana.
                    </p>
                    <div class="sec-official-badge-box">
                        <img src="assets/img/qr-sec.webp" alt="QR Verificación SEC Gasfiter" class="qr-sec-footer" width="75" height="75" loading="lazy">
                        <div class="sec-badge-text">
                            <strong>Instalador Autorizado SEC</strong>
                            <span>Escanea el QR para validar credencial oficial en la Superintendencia de Electricidad y Combustibles.</span>
                        </div>
                    </div>
                    <div class="footer-rating-pill">
                        <span class="stars-gold">★★★★★</span> <strong>5/5</strong> (6.747 reseñas de clientes)
                    </div>
                </div>

                <!-- Columna 2: Enlaces a Servicios Clave (SEO) -->
                <div class="footer-col">
                    <h4 class="footer-heading">Nuestros Servicios</h4>
                    <ul class="footer-menu">
                        <li><a href="sellado-de-fugas-de-gas-con-prodoral.php">Sellado de Fugas con Prodoral R6-1</a></li>
                        <li><a href="deteccion-de-fugas-de-gas.php">Detección con Gas Trazador y Geófono</a></li>
                        <li><a href="certificacion-sello-verde-sec.php">Certificación Sello Verde SEC y TC-6</a></li>
                        <li><a href="sellado-de-fugas-de-gas-con-prodoral.php#matrices">Reparación de Cañerías de Cobre y HDPE</a></li>
                        <li><a href="contacto.php">Emergencias Fugas de Gas Natural (GN)</a></li>
                        <li><a href="contacto.php">Fugas de Gas Licuado (GLP)</a></li>
                        <li><a href="contacto.php#agua">Detección de Fugas de Agua en Pisos</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Cobertura Santiago -->
                <div class="footer-col">
                    <h4 class="footer-heading">Cobertura en Santiago</h4>
                    <p class="footer-coverage-desc">Unidades móviles de guardia para atención urgente en el día:</p>
                    <div class="comunas-tags-cloud">
                        <?php foreach (array_slice($cobertura_comunas, 0, 16) as $comuna): ?>
                        <span class="comuna-tag"><?= $comuna ?></span>
                        <?php endforeach; ?>
                        <span class="comuna-tag tag-more">+ Todo Gran Santiago</span>
                    </div>
                </div>

                <!-- Columna 4: Contacto Inmediato -->
                <div class="footer-col">
                    <h4 class="footer-heading">Contacto 24 Horas</h4>
                    <ul class="footer-contact-list">
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <div>
                                <span>Fono Urgencias 1:</span>
                                <a href="tel:<?= PHONE_PRIMARY_RAW ?>"><strong><?= PHONE_PRIMARY ?></strong></a>
                                <div style="font-size: 0.76rem; color: #CBD5E1; display: flex; align-items: center; gap: 4px; margin-top: 2px;">
                                    <span class="stars-gold">★★★★★</span> <strong>5/5</strong> (6.747)
                                </div>
                            </div>
                        </li>
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <div>
                                <span>Fono Urgencias 2:</span>
                                <a href="tel:<?= PHONE_SECONDARY_RAW ?>"><strong><?= PHONE_SECONDARY ?></strong></a>
                            </div>
                        </li>
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <div>
                                <span>Oficina Central:</span>
                                <address><?= OFFICE_ADDRESS ?></address>
                            </div>
                        </li>
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            <div>
                                <span>Correo Técnico:</span>
                                <a href="mailto:<?= EMAIL_CONTACT ?>"><?= EMAIL_CONTACT ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container footer-bottom-container">
                <p class="copyright-text">
                    &copy; <?= date('Y') ?> <strong><?= SITE_NAME ?></strong>. Todos los derechos reservados. Desarrollado conforme a la normativa SEC Decreto Supremo Nº 66.
                </p>
                <div class="footer-bottom-links">
                    <a href="sellado-de-fugas-de-gas-con-prodoral.php">Prodoral R6-1</a>
                    <span>•</span>
                    <a href="certificacion-sello-verde-sec.php">Sello Verde SEC</a>
                    <span>•</span>
                    <a href="contacto.php">Contacto</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- BARRA FLOTANTE FIJA PARA MÓVILES (Quick Action Mobile Bar) -->
    <div class="mobile-floating-bar" id="mobileFloatingBar">
        <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="floating-btn floating-call">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
            <span>Llamar</span>
        </a>
        <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="floating-btn floating-wa">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
            <span>WhatsApp</span>
        </a>
    </div>

    <!-- BOTÓN FLOTANTE WHATSAPP ESCRITORIO (Pulsante) -->
    <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="desktop-floating-wa" aria-label="Contactar por WhatsApp">
        <div class="floating-wa-badge">¡Técnico disponible hoy!</div>
        <div class="floating-wa-circle">
            <svg width="34" height="34" viewBox="0 0 24 24" fill="white"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
        </div>
    </a>

    <!-- SCRIPTS JS (Diferido y Minificado) -->
    <script src="assets/js/main.min.js" defer></script>
</body>
</html>
