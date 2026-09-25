<?php
$current_page = 'servicio-urgente';
$page_title = 'Fuga de Gas Servicio Urgente 24/7 en Santiago | Gasfiter Autorizado SEC';
$page_desc = 'Servicio urgente 24 horas por fuga de gas en Santiago. Llegada rápida en 30 a 45 minutos. Sellado de cañerías sin picar muros con Prodoral R6-1 y detección con gas trazador. Gasfiter SEC.';
$canonical_url = 'https://emergencia-fugas.cl/fuga-de-gas-servicio-urgente/';

require_once __DIR__ . '/includes/header.php';

// Manejo dinámico del formulario de despacho de urgencia
$form_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS);
    $comuna = filter_input(INPUT_POST, 'comuna', FILTER_SANITIZE_SPECIAL_CHARS);
    $urgencia = filter_input(INPUT_POST, 'urgencia', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($nombre) && !empty($telefono)) {
        $form_sent = true;
    }
}
?>

<!-- HERO DE EMERGENCIA DE ALTA CONVERSIÓN -->
<section class="inner-page-hero" style="background: linear-gradient(135deg, #0B1120 0%, #0F172A 50%, #1E293B 100%); padding: 50px 0 60px; position: relative; overflow: hidden;">
    <div class="container">
        <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-bottom: 16px;">
            <span class="section-tag" style="background: #B91C1C; color: #FFFFFF; font-weight: 800; letter-spacing: 0.5px; margin-bottom: 0; padding: 6px 14px; border-radius: 20px; display: inline-flex; align-items: center; gap: 8px;">
                <span class="pulse-dot" style="background: #FFFFFF;"></span> DESPACHO DE EMERGENCIA 24/7 EN SANTIAGO
            </span>
            <div class="page-rating-badge" style="margin-bottom: 0; background: rgba(255,255,255,0.08); border: 1px solid rgba(245,166,35,0.3); padding: 5px 12px; border-radius: 20px; color: #F8FAFC;">
                <span class="stars-gold">★★★★★</span> <strong>5/5</strong> (6.747 reseñas)
            </div>
            <span style="color: #22C55E; font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#22C55E;"></span> Móviles en Terreno Listos
            </span>
        </div>

        <h1 class="inner-page-title" style="font-size: clamp(2rem, 4vw, 3.1rem); line-height: 1.15; max-width: 900px; margin-bottom: 18px; color: #FFFFFF;">
            Fuga de Gas: Servicio Urgente 24/7 en Todo Santiago
        </h1>

        <p class="inner-page-desc" style="max-width: 820px; font-size: 1.12rem; color: #CBD5E1; line-height: 1.7; margin-bottom: 30px;">
            Atención prioritaria e inmediata ante <strong>fuerte olor a gas</strong>, cortes de suministro o <strong>Sellos Rojos</strong> de Metrogas, Gasco, Lipigas y Abastible. Técnicos e instaladores autorizados por la SEC con llegada promedio en <strong>30 a 45 minutos</strong>. Solución definitiva sin romper pisos ni muros mediante tecnología alemana Prodoral R6-1.
        </p>

        <!-- CTA Cards Grid en Hero -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; max-width: 850px;">
            <!-- Botón Llamada Telefónica Directa -->
            <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="btn-mezon-primary btn-pulse" style="display: flex; align-items: center; justify-content: center; gap: 12px; padding: 18px 24px; font-size: 1.15rem; font-weight: 800; border-radius: var(--radius-md); box-shadow: 0 10px 25px rgba(245,166,35,0.4); text-align: center;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                <span>Llamar Urgente: <?= PHONE_PRIMARY ?></span>
            </a>

            <!-- Botón WhatsApp Directo con Técnico de Guardia -->
            <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= urlencode('URGENTE: Tengo una fuga de gas en mi domicilio y necesito la llegada de un técnico autorizado SEC lo antes posible.') ?>" target="_blank" rel="noopener" class="btn-mezon-whatsapp" style="display: flex; align-items: center; justify-content: center; gap: 12px; padding: 18px 24px; font-size: 1.15rem; font-weight: 800; border-radius: var(--radius-md); box-shadow: 0 10px 25px rgba(34,197,94,0.3); text-align: center;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>WhatsApp de Urgencias 24/7</span>
            </a>
        </div>
    </div>
</section>

<!-- PROTOCOLO VITAL ANTE FUGA DE GAS -->
<section style="background: #FEF2F2; border-bottom: 2px solid #FCA5A5; padding: 25px 0;">
    <div class="container">
        <div style="background: white; border-radius: var(--radius-md); border-left: 6px solid #B91C1C; padding: 24px; box-shadow: var(--shadow-md);">
            <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 14px;">
                <span style="font-size: 2rem;">🚨</span>
                <div>
                    <h2 style="color: #991B1B; font-size: 1.35rem; font-weight: 800; margin-bottom: 4px;">¿Siente Fuerte Olor a Gas Ahora Mismo? Siga este Protocolo Vital:</h2>
                    <p style="color: #7F1D1D; font-size: 0.92rem; margin: 0;">Actúe con calma y rapidez para proteger la vida de su familia y su propiedad.</p>
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 16px; margin-top: 16px;">
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">1. NO Accione Interruptores</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">No encienda ni apague luces, timbres ni artefactos eléctricos. Cualquier chispa puede detonar una combustión.</span>
                </div>
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">2. Cierre la Llave de Paso</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">Corte la llave general del medidor de gas o el regulador del cilindro para interrumpir el suministro.</span>
                </div>
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">3. Ventile de Inmediato</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">Abra puertas y ventanas amplias para que el gas se disperse hacia el exterior y se reduzca la concentración.</span>
                </div>
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">4. Evacúe y Llámenos</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">Salga a la calle o zona despejada y llámenos al <strong><?= PHONE_PRIMARY ?></strong> para despachar una unidad móvil.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENIDO PRINCIPAL: SOLUCIONES TÉCNICAS Y FORMULARIO DE DESPACHO -->
<section class="section-padding" style="background-color: white;">
    <div class="container page-layout-sidebar">
        <!-- Columna Izquierda: Información Técnica y de Servicio -->
        <div>
            <h2 style="font-size: 2rem; margin-bottom: 16px; color: var(--dark-bg);">
                Servicio Técnico Urgente en Fugas de Gas sin Romper
            </h2>
            <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.8; margin-bottom: 24px;">
                Una fuga de gas en cañerías embutidas o subterráneas no solo representa un riesgo inminente de explosión o intoxicación, sino que usualmente deriva en el <strong>corte inmediato del medidor y colocación de Sello Rojo</strong> por parte de Metrogas o inspectores autorizados.
            </p>
            <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.8; margin-bottom: 35px;">
                Nuestro equipo cuenta con el equipamiento más avanzado de Chile para diagnosticar y reparar la fuga en el día, garantizando el cumplimiento de la normativa de la <strong>Superintendencia de Electricidad y Combustibles (SEC)</strong>.
            </p>

            <!-- 3 Pilares del Servicio Urgente -->
            <div style="display: flex; flex-direction: column; gap: 24px; margin-bottom: 40px;">
                <!-- Pilar 1 -->
                <div style="background: var(--bg-light); border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 24px; display: flex; gap: 20px; align-items: flex-start;">
                    <div style="background: var(--primary); color: var(--dark-bg); width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 1.4rem; font-weight: 800;">
                        1
                    </div>
                    <div>
                        <h3 style="font-size: 1.3rem; margin-bottom: 8px; color: var(--dark-bg);">Sellado No Destructivo con Prodoral R6-1</h3>
                        <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 10px;">
                            Reparamos microfugas y filtraciones en uniones roscadas inyectando el polímero sellante alemán <strong>Prodoral R6-1</strong> desde el interior de la cañería existente. No requiere picar paredes, demoler losas ni cambiar cerámicas.
                        </p>
                        <span style="font-size: 0.88rem; color: #15803D; font-weight: 700;">✔ Red sellada y presurizada en 3 a 5 horas • Ahorro de más del 60% vs. obra destructiva.</span>
                    </div>
                </div>

                <!-- Pilar 2 -->
                <div style="background: var(--bg-light); border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 24px; display: flex; gap: 20px; align-items: flex-start;">
                    <div style="background: var(--primary); color: var(--dark-bg); width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 1.4rem; font-weight: 800;">
                        2
                    </div>
                    <div>
                        <h3 style="font-size: 1.3rem; margin-bottom: 8px; color: var(--dark-bg);">Detección Milimétrica con Gas Trazador y Geófono</h3>
                        <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 10px;">
                            Si la cañería presenta una fractura mayor que amerita reparación puntual, inyectamos una mezcla inerte de gas trazador (Formiergas: 95% Nitrógeno y 5% Hidrógeno) y rastreamos la fuga con geófonos ultrasónicos digitales sin realizar perforaciones a ciegas.
                        </p>
                        <span style="font-size: 0.88rem; color: #15803D; font-weight: 700;">✔ Precisión exacta al centímetro • Diagnóstico no invasivo en casas y edificios.</span>
                    </div>
                </div>

                <!-- Pilar 3 -->
                <div style="background: var(--bg-light); border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 24px; display: flex; gap: 20px; align-items: flex-start;">
                    <div style="background: var(--primary); color: var(--dark-bg); width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 1.4rem; font-weight: 800;">
                        3
                    </div>
                    <div>
                        <h3 style="font-size: 1.3rem; margin-bottom: 8px; color: var(--dark-bg);">Levantamiento de Sello Rojo y Certificación SEC</h3>
                        <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 10px;">
                            Emitimos la prueba de hermeticidad manométrica certificada bajo el <strong>Decreto Supremo Nº 66</strong> con instalador autorizado SEC Clase 1, gestionando la entrega de informes técnicos y tramitación TC-6 para la reconexión rápida de su medidor.
                        </p>
                        <span style="font-size: 0.88rem; color: #15803D; font-weight: 700;">✔ Informe válido ante Metrogas, Gasco, Lipigas, Abastible y la SEC.</span>
                    </div>
                </div>
            </div>

            <!-- Comparativa: Método Tradicional vs. Emergencia Fugas -->
            <div style="background: #F8FAFC; border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 28px; margin-bottom: 40px;">
                <h3 style="font-size: 1.35rem; margin-bottom: 18px; color: var(--dark-bg);">¿Por Qué No Romper Muros Ni Pisos?</h3>
                <div class="grid-2-cols" style="gap: 20px;">
                    <div style="background: #FFF5F5; border-left: 4px solid #EF4444; padding: 18px; border-radius: var(--radius-sm);">
                        <strong style="color: #991B1B; display: block; margin-bottom: 8px;">❌ Obra Tradicional Destructiva</strong>
                        <ul style="color: #7F1D1D; font-size: 0.88rem; line-height: 1.6; padding-left: 18px;">
                            <li>Demolición de muros, losas o porcelanato.</li>
                            <li>Días de polvo, escombros y desorden.</li>
                            <li>Costos astronómicos en albañiles y cerámicas.</li>
                            <li>Suministro cortado durante semanas.</li>
                        </ul>
                    </div>
                    <div style="background: #F0FDF4; border-left: 4px solid #22C55E; padding: 18px; border-radius: var(--radius-sm);">
                        <strong style="color: #15803D; display: block; margin-bottom: 8px;">✔ Servicio Urgente Prodoral R6-1</strong>
                        <ul style="color: #14532D; font-size: 0.88rem; line-height: 1.6; padding-left: 18px;">
                            <li>Sellado interno al 100% sin romper una baldosa.</li>
                            <li>Trabajo completado en el mismo día (3 a 5 hrs).</li>
                            <li>Ahorro de hasta un 60% en el presupuesto total.</li>
                            <li>Prueba de hermeticidad y garantía por escrito.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Preguntas Frecuentes de Urgencias -->
            <div style="margin-bottom: 40px;">
                <h3 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--dark-bg);">Preguntas Frecuentes sobre el Servicio de Urgencia</h3>
                <div class="faq-list">
                    <div class="faq-item active">
                        <button type="button" class="faq-question">
                            <span>¿Cuánto tardan en llegar a mi domicilio en Santiago?</span>
                            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                Contamos con unidades móviles equipadas con técnicos de guardia distribuidos en diferentes sectores del Gran Santiago. Nuestro tiempo promedio de arribo oscila entre 30 y 45 minutos tras la confirmación telefónica o vía WhatsApp.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            <span>¿Qué debo hacer si la compañía me colocó Sello Rojo en el medidor?</span>
                            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                El Sello Rojo indica que la instalación no es segura por fuga o incumplimiento normativo. Debe contratar un instalador autorizado SEC para reparar la filtración (idealmente con Prodoral R6-1 para evitar romper), realizar la prueba de hermeticidad y emitir el informe técnico para solicitar la reposición inmediata del suministro.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            <span>¿Atienden fines de semana, noches y días festivos?</span>
                            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                Sí. Una fuga de gas es una emergencia crítica que no puede esperar. Mantenemos guardia activa 24 horas al día, los 7 días de la semana, incluyendo domingos y feriados en todo el Gran Santiago.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna Derecha: Sidebar de Despacho Inmediato & Formulario -->
        <div>
            <div class="sidebar-sticky-box" style="background: var(--dark-bg); border-radius: var(--radius-md); padding: 28px; box-shadow: var(--shadow-xl); border: 1px solid var(--border-dark);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                    <span class="badge-accent-dark" style="background: #B91C1C; color: white;">🚨 DESPACHO HOY</span>
                    <span style="color: #22C55E; font-size: 0.8rem; font-weight: 700;">DISPONIBLE</span>
                </div>
                
                <h3 style="color: white; font-size: 1.45rem; margin-bottom: 8px;">¿Necesita Asistencia Urgente?</h3>
                <p style="color: #CBD5E1; font-size: 0.9rem; line-height: 1.5; margin-bottom: 20px;">
                    Contacte a nuestra central de operaciones para coordinar la llegada inmediata de un técnico SEC con equipo Prodoral y detector acústico.
                </p>

                <!-- Tarjeta de Llamada Rápida en Sidebar -->
                <div style="background: rgba(245,166,35,0.12); border: 2px solid var(--primary); padding: 18px; border-radius: var(--radius-md); margin-bottom: 22px; text-align: center;">
                    <span style="font-size: 0.78rem; color: #FCD34D; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px; display: block; margin-bottom: 4px;">Llamar Directo a la Central 24/7:</span>
                    <a href="tel:<?= PHONE_PRIMARY_RAW ?>" style="font-family: var(--font-heading); font-size: 1.55rem; font-weight: 800; color: var(--primary); text-decoration: none; display: block; margin-bottom: 6px;">
                        <?= PHONE_PRIMARY ?>
                    </a>
                    <div style="font-size: 0.82rem; color: #E2E8F0; display: flex; align-items: center; justify-content: center; gap: 4px;">
                        <span class="stars-gold">★★★★★</span> <strong>5/5</strong> (6.747 reseñas)
                    </div>
                </div>

                <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= urlencode('Hola Emergencia Fugas, tengo una urgencia por fuga de gas en mi domicilio y necesito asistencia inmediata hoy.') ?>" target="_blank" rel="noopener" class="btn-mezon-whatsapp w-100" style="margin-bottom: 24px; padding: 14px; font-weight: 700;">
                    Chatear por WhatsApp Ahora
                </a>

                <?php if ($form_sent): ?>
                <div style="background-color: #F0FDF4; border: 2px solid #22C55E; border-radius: var(--radius-sm); padding: 16px; margin-bottom: 20px; text-align: center;">
                    <h4 style="color: #15803D; font-size: 1rem; margin-bottom: 6px;">¡Solicitud Recibida!</h4>
                    <p style="color: #14532D; font-size: 0.85rem; margin-bottom: 12px;">
                        Estimado(a) <strong><?= htmlspecialchars($nombre) ?></strong>, nuestro técnico de guardia en <strong><?= htmlspecialchars($comuna) ?></strong> fue alertado.
                    </p>
                    <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= urlencode("Hola, acabo de enviar solicitud urgente para la comuna de $comuna. Nombre: $nombre. Teléfono: $telefono.") ?>" class="btn-mezon-whatsapp" style="font-size: 0.85rem; padding: 10px;" target="_blank" rel="noopener">
                        Acelerar por WhatsApp
                    </a>
                </div>
                <?php endif; ?>

                <!-- Formulario de Despacho Prioritario -->
                <form action="fuga-de-gas-servicio-urgente" method="POST" style="display: flex; flex-direction: column; gap: 14px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px;">
                    <span style="color: white; font-weight: 700; font-size: 0.95rem;">O complete este formulario express:</span>
                    <div>
                        <input type="text" name="nombre" required placeholder="Su Nombre Completo" style="width: 100%; padding: 11px 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark); background: rgba(255,255,255,0.06); color: white; font-size: 0.9rem;">
                    </div>
                    <div>
                        <input type="tel" name="telefono" required placeholder="Teléfono de Contacto (Ej: +56 9 1234 5678)" style="width: 100%; padding: 11px 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark); background: rgba(255,255,255,0.06); color: white; font-size: 0.9rem;">
                    </div>
                    <div>
                        <select name="comuna" style="width: 100%; padding: 11px 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark); background: #1E293B; color: white; font-size: 0.9rem;">
                            <option value="">Seleccione su Comuna en Santiago</option>
                            <?php foreach ($cobertura_comunas as $c): ?>
                            <option value="<?= $c ?>"><?= $c ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <select name="urgencia" style="width: 100%; padding: 11px 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark); background: #1E293B; color: white; font-size: 0.9rem;">
                            <option value="fuerte-olor">Siento Fuerte Olor a Gas (Urgente)</option>
                            <option value="corte-metrogas">Metrogas / Compañía me cortó el gas</option>
                            <option value="sello-rojo">Tengo Sello Rojo o Amarillo</option>
                            <option value="revision">Requiere Detección / Manometría</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="mensaje" rows="3" placeholder="Detalle adicional (dirección aproximada o artefacto afectado)..." style="width: 100%; padding: 11px 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark); background: rgba(255,255,255,0.06); color: white; font-size: 0.9rem; font-family: inherit;"></textarea>
                    </div>
                    <button type="submit" class="btn-mezon-primary w-100" style="padding: 13px; font-weight: 700; font-size: 1rem;">
                        Enviar Solicitud de Despacho
                    </button>
                </form>

                <!-- Validación SEC y Respaldo -->
                <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; margin-top: 20px; text-align: center;">
                    <img src="/assets/img/qr-sec.webp" alt="QR Verificación SEC Gasfiter" width="85" height="85" loading="lazy" style="margin: 0 auto 10px; border-radius: 6px; background: white; padding: 4px; display: block;">
                    <strong style="color: white; font-size: 0.85rem; display: block;">Instalador Autorizado SEC Clase 1</strong>
                    <span style="font-size: 0.78rem; color: #94A3B8; display: block; margin-top: 2px;">Licencia oficial vigente • DS Nº 66</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COBERTURA COMUNAL DE SANTIAGO -->
<section style="background: var(--bg-light); padding: 75px 0 135px; border-top: 1px solid var(--border-color); position: relative;">
    <div class="container" style="text-align: center;">
        <span class="section-tag" style="margin-bottom: 14px;">Despacho Inmediato en Todo el Gran Santiago</span>
        <h3 style="font-size: clamp(1.6rem, 3.5vw, 2.2rem); margin-bottom: 14px; color: var(--dark-bg); font-weight: 800;">
            Unidades Técnicas de Guardia Activas en su Sector
        </h3>
        <p style="color: var(--text-muted); max-width: 720px; margin: 0 auto 36px; font-size: 1rem; line-height: 1.65;">
            Llegada promedio en <strong>30 a 45 minutos</strong> a viviendas particulares, edificios residenciales, locales comerciales y comunidades:
        </p>

        <div class="comunas-coverage-grid">
            <?php 
            $slug_map = [
                'Las Condes' => 'fuga-de-gas-en-las-condes',
                'Providencia' => 'fuga-de-gas-en-providencia',
                'Ñuñoa' => 'fuga-de-gas-en-nunoa',
                'Santiago Centro' => 'fuga-de-gas-en-santiago',
                'Vitacura' => 'fuga-de-gas-servicio-urgente',
                'Lo Barnechea' => 'fuga-de-gas-en-lo-barnechea',
                'La Reina' => 'fuga-de-gas-en-la-reina',
                'Peñalolén' => 'fuga-de-gas-en-penalolen',
                'La Florida' => 'fuga-de-gas-en-la-florida',
                'Maipú' => 'fuga-de-gas-en-maipu',
                'San Miguel' => 'fuga-de-gas-en-san-miguel',
                'Macul' => 'fuga-de-gas-servicio-urgente',
                'Estación Central' => 'fuga-de-gas-en-estacion-central',
                'Huechuraba' => 'fuga-de-gas-servicio-urgente',
                'Recoleta' => 'fuga-de-gas-en-recoleta',
                'Independencia' => 'fuga-de-gas-en-independencia',
                'Quilicura' => 'fuga-de-gas-servicio-urgente',
                'San Joaquín' => 'fuga-de-gas-servicio-urgente',
                'Pudahuel' => 'fuga-de-gas-servicio-urgente',
                'Colina / Chicureo' => 'fuga-de-gas-servicio-urgente',
            ];
            foreach ($cobertura_comunas as $comuna): 
                $target_url = $slug_map[$comuna] ?? 'fuga-de-gas-servicio-urgente';
            ?>
            <a href="<?= $target_url ?>" class="comuna-coverage-pill" title="Servicio urgente de fuga de gas en <?= htmlspecialchars($comuna) ?>">
                <svg class="pin-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3" fill="#DC2626"></circle></svg>
                <span><?= htmlspecialchars($comuna) ?></span>
            </a>
            <?php endforeach; ?>
            <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="comuna-coverage-pill all-santiago-pill" title="Llamar para atención en todo el Gran Santiago">
                <span class="pulse-dot" style="background: #0F172A; width: 7px; height: 7px;"></span>
                <span>+ Todo el Gran Santiago 24/7</span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
