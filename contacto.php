<?php
$current_page = 'contacto';
$page_title = 'Contacto Emergencias Fugas de Gas 24/7 | Santiago de Chile';
$page_desc = 'Canales directos de atención urgente por fugas de gas y agua en Santiago. WhatsApp y teléfonos activos 24 horas. Móviles en todas las comunas.';
require_once __DIR__ . '/includes/header.php';

// Manejo dinámico del formulario de contacto
$form_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS);
    $comuna = filter_input(INPUT_POST, 'comuna', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($nombre) && !empty($telefono)) {
        $form_sent = true;
    }
}
?>

<!-- Header de Página -->
<section class="inner-page-hero">
    <div class="container">
        <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-bottom: 12px;">
            <span class="section-tag" style="background: rgba(245,166,35,0.2); color: var(--primary); margin-bottom: 0;">Atención Telefónica y Terreno 24 Horas</span>
            <div class="page-rating-badge" style="margin-bottom: 0;">
                <span class="stars-gold">★★★★★</span> <strong>5/5</strong> (6.747)
            </div>
        </div>
        <h1 class="inner-page-title">Central de Contacto y Emergencias</h1>
        <p class="inner-page-desc">
            Comunícate de inmediato con nuestra guardia de técnicos gasfíteres autorizados SEC para asistencia urgente en Santiago.
        </p>
    </div>
</section>

<!-- Contenido Principal -->
<section class="section-padding" style="background-color: white;">
    <div class="container contact-grid-layout">
        <!-- Formulario y Mensaje Urgente -->
        <div>
            <!-- Alerta de Seguridad ante Fuga de Gas -->
            <div class="alert-box-protocol">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 10px;">
                    <span style="font-size: 1.6rem;">🚨</span>
                    <h3 style="color: #991B1B; font-size: 1.25rem;">¡Protocolo Vital Si Huele a Gas!</h3>
                </div>
                <ul style="color: #7F1D1D; font-size: 0.92rem; line-height: 1.6; display: flex; flex-direction: column; gap: 6px; padding-left: 20px;">
                    <li><strong>1. No encienda ni apague interruptores eléctricos</strong> ni electrodomésticos (riesgo de chispa).</li>
                    <li><strong>2. Cierre inmediatamente la llave de paso</strong> general del gas o del medidor.</li>
                    <li><strong>3. Ventile la propiedad</strong> abriendo ventanas y puertas al exterior.</li>
                    <li><strong>4. Evacúe el recinto</strong> y llámenos desde la calle o un lugar seguro.</li>
                </ul>
            </div>

            <?php if ($form_sent): ?>
            <div style="background-color: #F0FDF4; border: 2px solid #22C55E; border-radius: var(--radius-md); padding: 24px; margin-bottom: 30px; text-align: center;">
                <h3 style="color: #15803D; margin-bottom: 10px;">¡Mensaje Recibido Correctamente!</h3>
                <p style="color: var(--text-main); margin-bottom: 16px;">
                    Estimado(a) <strong><?= htmlspecialchars($nombre) ?></strong>, un técnico SEC de guardia en <strong><?= htmlspecialchars($comuna) ?></strong> revisará tu requerimiento a la brevedad.
                </p>
                <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= urlencode("Hola, acabo de enviar una solicitud web para la comuna de $comuna. Nombre: $nombre. Teléfono: $telefono.") ?>" class="btn-mezon-whatsapp" target="_blank" rel="noopener">
                    Acelerar Atención por WhatsApp
                </a>
            </div>
            <?php endif; ?>

            <div class="contact-form-card">
                <h2 style="font-size: 1.6rem; margin-bottom: 8px;">Envíanos un Mensaje</h2>
                <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 24px;">Para consultas de presupuesto, normalización o coordinación de visitas programadas:</p>

                <form action="contacto.php" method="POST" style="display: flex; flex-direction: column; gap: 18px;">
                    <div>
                        <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 6px;">Nombre Completo:</label>
                        <input type="text" name="nombre" required placeholder="Ej: Marcela Contreras" style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); border: 1px solid var(--border-color); font-size: 0.95rem;">
                    </div>

                    <div class="grid-2-cols">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 6px;">Teléfono de Contacto:</label>
                            <input type="tel" name="telefono" required placeholder="Ej: +56 9 1234 5678" style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); border: 1px solid var(--border-color); font-size: 0.95rem;">
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 6px;">Comuna en Santiago:</label>
                            <select name="comuna" style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); border: 1px solid var(--border-color); font-size: 0.95rem; background: white;">
                                <?php foreach ($cobertura_comunas as $c): ?>
                                <option value="<?= $c ?>"><?= $c ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 6px;">Describe tu Fuga o Requerimiento:</label>
                        <textarea name="mensaje" rows="4" placeholder="Indícanos si sientes olor, si es gas natural o licuado, o si te pusieron sello rojo..." style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); border: 1px solid var(--border-color); font-size: 0.95rem; font-family: inherit;"></textarea>
                    </div>

                    <button type="submit" class="btn-mezon-primary" style="align-self: flex-start;">
                        <span>Enviar Solicitud</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Columna Derecha: Canales Directos y Foto Móvil -->
        <div>
            <div class="sidebar-sticky-box" style="margin-bottom: 30px;">
                <span class="badge-accent-dark" style="margin-bottom: 14px;">⚡ LÍNEAS DIRECTAS</span>
                <h3 style="color: white; font-size: 1.35rem; margin-bottom: 18px;">Teléfonos de Urgencia</h3>

                <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 24px;">
                    <a href="tel:<?= PHONE_PRIMARY_RAW ?>" style="background: rgba(255,255,255,0.06); padding: 14px 18px; border-radius: var(--radius-md); display: flex; align-items: center; gap: 14px; border: 1px solid rgba(255,255,255,0.1);">
                        <div style="width: 40px; height: 40px; background: var(--primary); color: var(--dark-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            📞
                        </div>
                        <div>
                            <span style="font-size: 0.75rem; color: #94A3B8; display: block;">Línea Principal (24 Horas):</span>
                            <strong style="color: white; font-size: 1.15rem;"><?= PHONE_PRIMARY ?></strong>
                            <div style="font-size: 0.76rem; color: #CBD5E1; display: flex; align-items: center; gap: 4px; margin-top: 2px;">
                                <span class="stars-gold">★★★★★</span> <strong>5/5</strong> (6.747)
                            </div>
                        </div>
                    </a>

                    <a href="tel:<?= PHONE_SECONDARY_RAW ?>" style="background: rgba(255,255,255,0.06); padding: 14px 18px; border-radius: var(--radius-md); display: flex; align-items: center; gap: 14px; border: 1px solid rgba(255,255,255,0.1);">
                        <div style="width: 40px; height: 40px; background: var(--primary); color: var(--dark-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            📞
                        </div>
                        <div>
                            <span style="font-size: 0.75rem; color: #94A3B8; display: block;">Línea Alternativa:</span>
                            <strong style="color: white; font-size: 1.15rem;"><?= PHONE_SECONDARY ?></strong>
                        </div>
                    </a>
                </div>

                <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn-mezon-whatsapp w-100" style="margin-bottom: 24px;">
                    Chatear Directo por WhatsApp
                </a>

                <div style="font-size: 0.88rem; color: #94A3B8; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 18px;">
                    <p style="margin-bottom: 6px;">📍 <strong>Oficina Central:</strong></p>
                    <address style="font-style: normal; color: #CBD5E1;"><?= OFFICE_ADDRESS ?></address>
                </div>
            </div>

            <!-- Foto Móvil de Emergencia en Santiago -->
            <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="assets/img/emergency-van.webp" alt="Móvil de Emergencia Gasfiter SEC en Santiago" width="600" height="400" loading="lazy" style="width: 100%; height: auto;">
                <div style="background: #F1F5F9; padding: 12px 16px; font-size: 0.82rem; color: var(--text-muted); text-align: center;">
                    Unidad de respuesta rápida con equipos de inyección Prodoral R6-1 en terreno.
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
