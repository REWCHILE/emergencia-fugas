<?php
/**
 * Plantilla Dinámica de Landing Page Local por Comuna
 * Maneja las 19 URLs geolocalizadas indexadas en Google:
 * /fuga-de-gas-en-{comuna}/
 */

require_once __DIR__ . '/config.php';

// Base de datos de comunas y regiones indexadas con metadatos hiperlocales
$comunas_data = [
    'las-condes' => [
        'nombre' => 'Las Condes',
        'articulo' => 'en',
        'zona' => 'Sector Oriente de Santiago',
        'tiempo' => '25 a 40 minutos',
        'barrios' => 'El Golf, San Damián, Los Dominicos, Manquehue, Colón Oriente, El Remanso',
        'redes' => 'Red Metrogas, estanques centrales de gas licuado (GLP), calderas comunitarias',
        'meta_desc' => 'Gasfiter Autorizado SEC de Urgencia en Las Condes por fuga de gas. Llegada rápida en 25 a 40 min en El Golf, Los Dominicos y alrededores. Sellado sin picar con Prodoral R6-1.',
    ],
    'providencia' => [
        'nombre' => 'Providencia',
        'articulo' => 'en',
        'zona' => 'Sector Oriente de Santiago',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'Pedro de Valdivia, Los Leones, Manuel Montt, Barrio Italia, Bellavista, Pocuro',
        'redes' => 'Edificios residenciales, redes de gas natural Metrogas, locales comerciales y gastronómicos',
        'meta_desc' => 'Emergencia de fuga de gas en Providencia 24/7. Gasfiter certificado SEC con llegada en 20 a 35 minutos. Reparación sin picar muros ni cerámicas con Prodoral R6-1.',
    ],
    'nunoa' => [
        'nombre' => 'Ñuñoa',
        'articulo' => 'en',
        'zona' => 'Sector Oriente de Santiago',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'Plaza Ñuñoa, Parque Bustamante, Suárez Mujica, Villa Frei, Simón Bolívar, Irarrázaval',
        'redes' => 'Comunidades de edificios nuevos y tradicionales, red Metrogas, califonts y calderas murales',
        'meta_desc' => 'Servicio urgente por fuga de gas en Ñuñoa. Atención técnica autorizada SEC en 20 a 35 min. Sellado interno con tecnología Prodoral sin obras destructivas.',
    ],
    'la-reina' => [
        'nombre' => 'La Reina',
        'articulo' => 'en',
        'zona' => 'Sector Oriente de Santiago',
        'tiempo' => '25 a 40 minutos',
        'barrios' => 'La Reina Alta, Príncipe de Gales, Blest Gana, Larraín, Parque Mahuida',
        'redes' => 'Casas unifamiliares, condominios residenciales, redes subterráneas y estanques de gas',
        'meta_desc' => 'Gasfiter SEC para emergencias de gas en La Reina. Detección acústica con gas trazador y sellado de cañerías sin romper pisos ni muros. Llegada en 25 a 40 min.',
    ],
    'lo-barnechea' => [
        'nombre' => 'Lo Barnechea',
        'articulo' => 'en',
        'zona' => 'Sector Oriente - Cordillera',
        'tiempo' => '30 a 50 minutos',
        'barrios' => 'La Dehesa, El Arrayán, El Huinganal, Los Trapenses, Santa Blanca',
        'redes' => 'Condominios de alta exigencia, matrices subterráneas extensas, estanques GLP y gas natural',
        'meta_desc' => 'Urgencias por fuga de gas en Lo Barnechea y La Dehesa. Instaladores autorizados SEC 24 horas. Solución definitiva sin romper con tecnología alemana Prodoral.',
    ],
    'santiago' => [
        'nombre' => 'Santiago Centro',
        'articulo' => 'en',
        'zona' => 'Centro Histórico y Cívico',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'Barrio Lastarria, Santa Lucía, Barrio Yungay, Bellas Artes, República, Diez de Julio',
        'redes' => 'Edificios de gran altura, ductos comunitarios, sellos rojos Metrogas y redes de cobre/acero',
        'meta_desc' => 'Atención urgente por fuga de gas en Santiago Centro. Levantamiento de Sellos Rojos Metrogas, sellado de cañerías sin picar y certificación SEC. Llegada 20 a 35 min.',
    ],
    'maipu' => [
        'nombre' => 'Maipú',
        'articulo' => 'en',
        'zona' => 'Sector Poniente de Santiago',
        'tiempo' => '30 a 45 minutos',
        'barrios' => 'Plaza de Maipú, Los Pajaritos, El Abrazo, Ciudad Satélite, Rinconada, Monte Tabor',
        'redes' => 'Viviendas familiares, condominios cerrados, redes de gas natural y cilindros Lipigas/Gasco/Abastible',
        'meta_desc' => 'Servicio de emergencia por fuga de gas en Maipú. Gasfiter SEC urgente 24 horas. Detección no destructiva y reparación garantizada de cañerías.',
    ],
    'la-florida' => [
        'nombre' => 'La Florida',
        'articulo' => 'en',
        'zona' => 'Sector Suroriente de Santiago',
        'tiempo' => '25 a 45 minutos',
        'barrios' => 'Vicuña Mackenna, Bellavista de La Florida, Walker Martínez, Rojas Magallanes, La Florida Alta',
        'redes' => 'Conjuntos habitacionales, condominios, redes matrices y artefactos a gas licuado / natural',
        'meta_desc' => 'Técnico gasfiter autorizado SEC urgente en La Florida. Asistencia inmediata ante fuga u olor a gas en 25 a 45 min. Sellado de cañerías sin romper cerámicas.',
    ],
    'puente-alto' => [
        'nombre' => 'Puente Alto',
        'articulo' => 'en',
        'zona' => 'Sector Sur de Santiago',
        'tiempo' => '30 a 50 minutos',
        'barrios' => 'Plaza de Puente Alto, Ciudad del Este, Las Vizcachas, Concha y Toro, Bajos de Mena',
        'redes' => 'Viviendas unifamiliares, condominios en Las Vizcachas, redes de gas licuado y natural',
        'meta_desc' => 'Gasfiter de emergencia por fuga de gas en Puente Alto. Móvil de guardia 24/7. Inspección manométrica y sellado certificado SEC sin obras destructivas.',
    ],
    'recoleta' => [
        'nombre' => 'Recoleta',
        'articulo' => 'en',
        'zona' => 'Sector Norte de Santiago',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'El Salto, Einstein, Patronato, Bellavista Norte, Cerro Blanco, Zapadores',
        'redes' => 'Instalaciones residenciales y comerciales, redes de distribución Metrogas y cilindros',
        'meta_desc' => 'Atención de fugas de gas urgente en Recoleta. Técnicos instaladores SEC de guardia. Detección electrónica de fugas y reparación garantizada.',
    ],
    'independencia' => [
        'nombre' => 'Independencia',
        'articulo' => 'en',
        'zona' => 'Sector Norte de Santiago',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'Hospitales, Plaza Chacabuco, Vivaceta, Fermín Vivaceta, Coronel Alvarado',
        'redes' => 'Edificios residenciales de altura, casas antiguas, redes de gas natural y GLP',
        'meta_desc' => 'Gasfiter SEC para fugas de gas en Independencia. Llegada urgente en 20 a 35 minutos. Sellado de fugas con Prodoral R6-1 y certificación Sello Verde.',
    ],
    'san-miguel' => [
        'nombre' => 'San Miguel',
        'articulo' => 'en',
        'zona' => 'Sector Sur de Santiago',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'Gran Avenida, El Llano Subercaseaux, Departamental, San Nicolás, Ciudad del Niño',
        'redes' => 'Alta concentración de edificios residenciales nuevos, redes de gas natural y calderas centrales',
        'meta_desc' => 'Emergencias por fuga de gas en San Miguel y El Llano. Instalador autorizado SEC con llegada en 20 a 35 min. Sellado sin picar y levantamiento de sellos rojos.',
    ],
    'estacion-central' => [
        'nombre' => 'Estación Central',
        'articulo' => 'en',
        'zona' => 'Sector Poniente de Santiago',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'Alameda, Las Rejas, Villa Portales, General Velásquez, Los Nogales',
        'redes' => 'Edificios de departamentos de alta densidad, redes de distribución vertical y medidores individuales',
        'meta_desc' => 'Servicio de urgencia por fuga de gas en Estación Central. Asistencia prioritaria para edificios y casas con instalador certificado SEC 24 horas.',
    ],
    'quinta-normal' => [
        'nombre' => 'Quinta Normal',
        'articulo' => 'en',
        'zona' => 'Sector Poniente de Santiago',
        'tiempo' => '20 a 35 minutos',
        'barrios' => 'Parque Quinta Normal, Matucana, Carrascal, Mapocho Poniente, Walker Martínez',
        'redes' => 'Casas tradicionales, talleres, redes domiciliarias de cobre y acero galvanizado',
        'meta_desc' => 'Fuga de gas urgente en Quinta Normal. Gasfiter certificado SEC listo para acudir en 20 a 35 min. Sellado hermético no destructivo con garantía escrita.',
    ],
    'pedro-aguirre-cerda' => [
        'nombre' => 'Pedro Aguirre Cerda',
        'articulo' => 'en',
        'zona' => 'Sector Sur de Santiago',
        'tiempo' => '25 a 40 minutos',
        'barrios' => 'Ochagavía, Villa Sur, Club Hípico Sur, Carlos Valdovinos, La Marina',
        'redes' => 'Viviendas residenciales, cañerías empotradas bajo radier y redes de gas licuado',
        'meta_desc' => 'Técnico autorizado SEC para fugas de gas en Pedro Aguirre Cerda. Asistencia inmediata ante cortes y olor a gas. Detección y sellado sin romper.',
    ],
    'penalolen' => [
        'nombre' => 'Peñalolén',
        'articulo' => 'en',
        'zona' => 'Sector Suroriente de Santiago',
        'tiempo' => '25 a 45 minutos',
        'barrios' => 'Consistorial, Las Pircas, Quilín, Los Presidentes, Tobalaba Poniente, San Luis',
        'redes' => 'Condominios residenciales en altura y precordillera, redes subterráneas de gas natural y GLP',
        'meta_desc' => 'Atención prioritaria por fuga de gas en Peñalolén y Las Pircas. Gasfiter SEC con móvil en terreno. Sellado alemán Prodoral R6-1 sin romper muros.',
    ],
    'padre-hurtado' => [
        'nombre' => 'Padre Hurtado',
        'articulo' => 'en',
        'zona' => 'Sector Surponiente (RM)',
        'tiempo' => '35 a 50 minutos',
        'barrios' => 'Camino a Melipilla, Santa Rosa de Chena, El Trebal, San Ignacio, Laguna del Sol',
        'redes' => 'Condominios familiares cerrados, parcelas, redes de gas licuado con estanque y red natural',
        'meta_desc' => 'Urgencias de gas en Padre Hurtado. Gasfiter autorizado SEC para detección acústica y sellado de fugas de gas sin obras molestas. Atención 24/7.',
    ],
    'valparaiso' => [
        'nombre' => 'Valparaíso',
        'articulo' => 'en',
        'zona' => 'V Región de Valparaíso',
        'tiempo' => 'Despacho de Urgencia Regional',
        'barrios' => 'Plan de Valparaíso, Cerro Alegre, Cerro Concepción, Playa Ancha, Almendral, Viña del Mar y alrededores',
        'redes' => 'Redes históricas de cobre y fierro, edificios patrimoniales, red Gasvalpo y cilindros GLP',
        'meta_desc' => 'Servicio especializado por fuga de gas en Valparaíso y V Región. Instalador autorizado SEC con tecnología no destructiva Prodoral R6-1 para sellar sin picar muros.',
    ],
    'rancagua' => [
        'nombre' => 'Rancagua',
        'articulo' => 'en',
        'zona' => 'VI Región de O\'Higgins',
        'tiempo' => 'Despacho de Urgencia Regional',
        'barrios' => 'Centro de Rancagua, Machalí, Manzanal, Alameda, San Damián, Carretera del Cobre',
        'redes' => 'Casas residenciales, condominios en Machalí, redes de gas natural y estanques de gas licuado',
        'meta_desc' => 'Detección y sellado de fugas de gas en Rancagua y Machalí. Técnicos certificados SEC con equipamiento alemán de sellado interno sin romper. Atención coordinada de urgencia.',
    ]
];

// Obtener y normalizar el slug solicitado
$raw_slug = $_GET['slug'] ?? '';
$clean_slug = str_replace('fuga-de-gas-en-', '', strtolower(trim($raw_slug, '/')));

// Validar que la comuna exista en nuestro registro; si no, redirigir 301 a la landing principal
if (!isset($comunas_data[$clean_slug])) {
    header('Location: /fuga-de-gas-servicio-urgente', true, 301);
    exit;
}

$comuna = $comunas_data[$clean_slug];
$current_page = 'servicio-urgente';
$page_title = "Fuga de Gas en {$comuna['nombre']} | Gasfiter Urgente 24/7 SEC | Sellado Sin Romper";
$page_desc = $comuna['meta_desc'];
$canonical_url = SITE_URL . "/fuga-de-gas-en-{$clean_slug}";

require_once __DIR__ . '/includes/header.php';

// Manejo dinámico del formulario de despacho
$form_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS);
    $comuna_form = filter_input(INPUT_POST, 'comuna', FILTER_SANITIZE_SPECIAL_CHARS);
    $urgencia = filter_input(INPUT_POST, 'urgencia', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($nombre) && !empty($telefono)) {
        $form_sent = true;
    }
}
?>

<!-- HERO HIPERLOCAL DE EMERGENCIA -->
<section class="inner-page-hero" style="background: linear-gradient(135deg, #0B1120 0%, #0F172A 50%, #1E293B 100%); padding: 50px 0 60px; position: relative; overflow: hidden;">
    <div class="container">
        <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-bottom: 16px;">
            <span class="section-tag" style="background: #B91C1C; color: #FFFFFF; font-weight: 800; letter-spacing: 0.5px; margin-bottom: 0; padding: 6px 14px; border-radius: 20px; display: inline-flex; align-items: center; gap: 8px;">
                <span class="pulse-dot" style="background: #FFFFFF;"></span> DESPACHO URGENTE EN <?= strtoupper(htmlspecialchars($comuna['nombre'])) ?>
            </span>
            <div class="page-rating-badge" style="margin-bottom: 0; background: rgba(255,255,255,0.08); border: 1px solid rgba(245,166,35,0.3); padding: 5px 12px; border-radius: 20px; color: #F8FAFC;">
                <span class="stars-gold">★★★★★</span> <strong>5/5</strong> (6.747 reseñas)
            </div>
            <span style="color: #22C55E; font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#22C55E;"></span> Móvil de Guardia en Terreno
            </span>
        </div>

        <h1 class="inner-page-title" style="font-size: clamp(2rem, 4vw, 3.1rem); line-height: 1.15; max-width: 950px; margin-bottom: 18px; color: #FFFFFF;">
            Fuga de Gas en <?= htmlspecialchars($comuna['nombre']) ?>: Gasfiter Urgente 24/7 Autorizado SEC
        </h1>

        <p class="inner-page-desc" style="max-width: 850px; font-size: 1.12rem; color: #CBD5E1; line-height: 1.7; margin-bottom: 25px;">
            Atención prioritaria e inmediata ante <strong>fuerte olor a gas</strong>, cortes de suministro o <strong>Sellos Rojos</strong> en <strong><?= htmlspecialchars($comuna['nombre']) ?></strong> (<?= htmlspecialchars($comuna['zona']) ?>). Tiempo estimado de llegada técnica: <strong><?= htmlspecialchars($comuna['tiempo']) ?></strong>. Detección milimétrica no destructiva y reparación interna de cañerías <strong>sin romper pisos ni muros</strong> con tecnología alemana Prodoral R6-1.
        </p>

        <!-- Píldoras de Cobertura Local -->
        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 30px; font-size: 0.88rem; color: #94A3B8;">
            <span style="background: rgba(255,255,255,0.06); padding: 5px 12px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.1);">📍 Cobertura: <?= htmlspecialchars($comuna['barrios']) ?></span>
            <span style="background: rgba(255,255,255,0.06); padding: 5px 12px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.1);">⚡ Redes: <?= htmlspecialchars($comuna['redes']) ?></span>
        </div>

        <!-- CTA Buttons -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; max-width: 850px;">
            <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="btn-mezon-primary btn-pulse" style="display: flex; align-items: center; justify-content: center; gap: 12px; padding: 18px 24px; font-size: 1.15rem; font-weight: 800; border-radius: var(--radius-md); box-shadow: 0 10px 25px rgba(245,166,35,0.4); text-align: center;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                <span>Llamar en <?= htmlspecialchars($comuna['nombre']) ?>: <?= PHONE_PRIMARY ?></span>
            </a>

            <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= urlencode("URGENTE: Tengo una fuga de gas en {$comuna['nombre']} y necesito la llegada de un instalador SEC lo antes posible.") ?>" target="_blank" rel="noopener" class="btn-mezon-whatsapp" style="display: flex; align-items: center; justify-content: center; gap: 12px; padding: 18px 24px; font-size: 1.15rem; font-weight: 800; border-radius: var(--radius-md); box-shadow: 0 10px 25px rgba(34,197,94,0.3); text-align: center;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>WhatsApp Urgencias <?= htmlspecialchars($comuna['nombre']) ?></span>
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
                    <h2 style="color: #991B1B; font-size: 1.35rem; font-weight: 800; margin-bottom: 4px;">¿Siente Olor a Gas en <?= htmlspecialchars($comuna['nombre']) ?>? Siga este Protocolo Vital:</h2>
                    <p style="color: #7F1D1D; font-size: 0.92rem; margin: 0;">Actúe con precaución y rapidez para proteger la integridad de su familia y propiedad.</p>
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 16px; margin-top: 16px;">
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">1. NO Accione Interruptores</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">No encienda luces, timbres ni electrodomésticos. Una chispa mínima puede provocar una ignición.</span>
                </div>
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">2. Cierre la Llave de Paso</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">Corte la llave del medidor general o el regulador del estanque/cilindro de gas inmediatamente.</span>
                </div>
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">3. Ventile Abriendo Ventanas</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">Genere corriente de aire para disminuir la concentración de gas combustible en el inmueble.</span>
                </div>
                <div style="background: #FFF5F5; padding: 14px; border-radius: var(--radius-sm); border: 1px solid #FED7D7;">
                    <strong style="color: #991B1B; display: block; margin-bottom: 6px;">4. Evacúe y Llámenos</strong>
                    <span style="color: #4A5568; font-size: 0.88rem;">Desde un área exterior despejada, llámenos al <strong><?= PHONE_PRIMARY ?></strong> para despachar la cuadrilla de guardia.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENIDO PRINCIPAL Y FORMULARIO DE DESPACHO -->
<section class="section-padding" style="background-color: white;">
    <div class="container page-layout-sidebar">
        <!-- Columna Izquierda: Información de Servicio Local -->
        <div>
            <div style="margin-bottom: 40px;">
                <span class="section-tag">TECNOLOGÍA ALEMANA SIN ROMPER</span>
                <h2 style="font-size: 2rem; color: #0F172A; margin-bottom: 16px;">
                    Reparación Definitiva de Fugas de Gas en <?= htmlspecialchars($comuna['nombre']) ?>
                </h2>
                <p style="color: #475569; font-size: 1.05rem; line-height: 1.75; margin-bottom: 20px;">
                    En <strong><?= htmlspecialchars($comuna['nombre']) ?></strong>, una fuga de gas en cañerías empotradas bajo pisos o detrás de muros ya no requiere obras de albañilería demoledoras. En <strong>Emergencia Fugas</strong> aplicamos el método internacional de sellado interno mediante <strong>Prodoral R6-1</strong>, polímero líquido alemán normado por DIN EN 13090 y validado por la SEC en Chile.
                </p>

                <!-- Tarjeta Comparativa Destacada -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 24px 0;">
                    <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: var(--radius-md); padding: 20px;">
                        <h4 style="color: #B91C1C; display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                            <span>❌</span> Método Tradicional (Destructivo)
                        </h4>
                        <ul style="color: #64748B; font-size: 0.9rem; line-height: 1.6; padding-left: 20px; margin: 0;">
                            <li>Picar cerámicas, pisos flotantes y muros de hormigón.</li>
                            <li>Demora de 5 a 12 días sin gas en la propiedad.</li>
                            <li>Elevado costo en albañiles, pintura y reposición de materiales.</li>
                        </ul>
                    </div>

                    <div style="background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: var(--radius-md); padding: 20px;">
                        <h4 style="color: #166534; display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                            <span>✅</span> Solución Prodoral R6-1 en <?= htmlspecialchars($comuna['nombre']) ?>
                        </h4>
                        <ul style="color: #15803D; font-size: 0.9rem; line-height: 1.6; padding-left: 20px; margin: 0;">
                            <li><strong>Sin romper ni picar:</strong> sellado por inyección manométrica interna.</li>
                            <li><strong>Resuelto en el mismo día:</strong> promedio de 3 a 5 horas.</li>
                            <li>Prueba de hermeticidad digital con manómetros certificados SEC.</li>
                            <li>Garantía escrita y habilitación inmediata del servicio.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Cobertura y Detalles Locales -->
            <div style="background: #F8FAFC; border-radius: var(--radius-md); padding: 24px; border: 1px solid #E2E8F0; margin-bottom: 35px;">
                <h3 style="color: #0F172A; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;">
                    📍 Cuadrilla Técnica Asignada a <?= htmlspecialchars($comuna['nombre']) ?>
                </h3>
                <p style="color: #475569; font-size: 0.95rem; line-height: 1.6; margin-bottom: 14px;">
                    Nuestras unidades móviles circulan permanentemente por <strong><?= htmlspecialchars($comuna['zona']) ?></strong>, permitiéndonos llegar con prontitud ante cualquier llamado de emergencia en sectores tales como: <em><?= htmlspecialchars($comuna['barrios']) ?></em>.
                </p>
                <div style="display: flex; gap: 16px; flex-wrap: wrap; font-size: 0.9rem;">
                    <div style="display: flex; align-items: center; gap: 8px; color: #1E293B;">
                        <strong>⏱️ Tiempo de Respuesta:</strong> <span><?= htmlspecialchars($comuna['tiempo']) ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; color: #1E293B;">
                        <strong>🛡️ Acreditación:</strong> <span>Instalador SEC Clase 1 y 2</span>
                    </div>
                </div>
            </div>

            <!-- Preguntas Frecuentes de la Comuna -->
            <div style="margin-top: 30px;">
                <h3 style="font-size: 1.4rem; color: #0F172A; margin-bottom: 18px;">
                    Preguntas Frecuentes sobre Fugas de Gas en <?= htmlspecialchars($comuna['nombre']) ?>
                </h3>
                
                <div style="display: flex; flex-direction: column; gap: 14px;">
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: var(--radius-sm); padding: 18px;">
                        <h4 style="font-size: 1.05rem; color: #0F172A; margin-bottom: 8px;">¿Cuánto tarda en llegar un gasfiter SEC a <?= htmlspecialchars($comuna['nombre']) ?>?</h4>
                        <p style="color: #64748B; font-size: 0.92rem; line-height: 1.6; margin: 0;">
                            Nuestro tiempo promedio de arribo en <?= htmlspecialchars($comuna['nombre']) ?> es de <strong><?= htmlspecialchars($comuna['tiempo']) ?></strong> gracias a nuestras cuadrillas móviles distribuidas en el sector.
                        </p>
                    </div>

                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: var(--radius-sm); padding: 18px;">
                        <h4 style="font-size: 1.05rem; color: #0F172A; margin-bottom: 8px;">¿Qué pasa si Metrogas o la distribuidora me cortó el gas con Sello Rojo?</h4>
                        <p style="color: #64748B; font-size: 0.92rem; line-height: 1.6; margin: 0;">
                            Detectamos la pérdida con gas trazador, sellamos la cañería con Prodoral R6-1, realizamos la prueba manométrica digital bajo DS 66 y emitimos el certificado oficial SEC para la reposición inmediata del suministro.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna Derecha: Formulario de Despacho Prioritario -->
        <aside class="sidebar-sticky" style="top: 90px;">
            <div style="background: #0F172A; border-radius: var(--radius-md); padding: 28px; color: white; box-shadow: var(--shadow-lg); border: 1px solid rgba(255,255,255,0.1);">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                    <span style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background: #22C55E;"></span>
                    <span style="color: #22C55E; font-weight: 700; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.5px;">Despacho Directo en Terreno</span>
                </div>
                
                <h3 style="color: white; font-size: 1.35rem; margin-bottom: 8px; font-weight: 700;">
                    Solicitar Técnico en <?= htmlspecialchars($comuna['nombre']) ?>
                </h3>
                <p style="color: #94A3B8; font-size: 0.88rem; line-height: 1.5; margin-bottom: 20px;">
                    Complete sus datos y un instalador autorizado SEC se comunicará en menos de 5 minutos para coordinar la llegada:
                </p>

                <?php if ($form_sent): ?>
                    <div style="background: #14532D; border: 1px solid #22C55E; border-radius: var(--radius-sm); padding: 18px; text-align: center;">
                        <span style="font-size: 2rem;">✅</span>
                        <h4 style="color: white; font-size: 1.1rem; margin: 8px 0 4px;">¡Solicitud Recibida!</h4>
                        <p style="color: #BBF7D0; font-size: 0.85rem; margin: 0;">Un técnico de guardia para <?= htmlspecialchars($comuna['nombre']) ?> le llamará de inmediato.</p>
                    </div>
                <?php else: ?>
                    <form method="POST" action="">
                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-size: 0.82rem; color: #CBD5E1; margin-bottom: 5px; font-weight: 600;">Nombre Completo:</label>
                            <input type="text" name="nombre" required placeholder="Ej: Marcela González" style="width: 100%; padding: 10px 14px; border-radius: var(--radius-sm); background: #1E293B; border: 1px solid #334155; color: white; font-size: 0.95rem;">
                        </div>

                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-size: 0.82rem; color: #CBD5E1; margin-bottom: 5px; font-weight: 600;">Teléfono de Contacto (Móvil):</label>
                            <input type="tel" name="telefono" required placeholder="+56 9 1234 5678" style="width: 100%; padding: 10px 14px; border-radius: var(--radius-sm); background: #1E293B; border: 1px solid #334155; color: white; font-size: 0.95rem;">
                        </div>

                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-size: 0.82rem; color: #CBD5E1; margin-bottom: 5px; font-weight: 600;">Comuna / Sector:</label>
                            <input type="text" name="comuna" value="<?= htmlspecialchars($comuna['nombre']) ?>" readonly style="width: 100%; padding: 10px 14px; border-radius: var(--radius-sm); background: #1E293B; border: 1px solid #334155; color: #F5A623; font-weight: 700; font-size: 0.95rem;">
                        </div>

                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-size: 0.82rem; color: #CBD5E1; margin-bottom: 5px; font-weight: 600;">Nivel de Urgencia:</label>
                            <select name="urgencia" style="width: 100%; padding: 10px 14px; border-radius: var(--radius-sm); background: #1E293B; border: 1px solid #334155; color: white; font-size: 0.9rem;">
                                <option value="inmediata">🚨 Urgente (Olor fuerte / Sello Rojo hoy)</option>
                                <option value="coordinada">📅 Coordinar para hoy / mañana</option>
                                <option value="cotizacion">🔍 Cotización de sellado Prodoral</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 18px;">
                            <label style="display: block; font-size: 0.82rem; color: #CBD5E1; margin-bottom: 5px; font-weight: 600;">Detalle de la Fuga / Situación:</label>
                            <textarea name="mensaje" rows="2" placeholder="Olor a gas en cocina, medidor cerrado, etc." style="width: 100%; padding: 10px 14px; border-radius: var(--radius-sm); background: #1E293B; border: 1px solid #334155; color: white; font-size: 0.9rem;"></textarea>
                        </div>

                        <button type="submit" class="btn-mezon-primary" style="width: 100%; padding: 14px; font-size: 1.05rem; font-weight: 700; border-radius: var(--radius-sm); cursor: pointer; border: none;">
                            Despachar Técnico en <?= htmlspecialchars($comuna['nombre']) ?>
                        </button>
                    </form>
                <?php endif; ?>

                <div style="margin-top: 20px; padding-top: 18px; border-top: 1px solid rgba(255,255,255,0.1); text-align: center;">
                    <span style="font-size: 0.8rem; color: #94A3B8; display: block; margin-bottom: 8px;">¿Emergencia crítica inmediata?</span>
                    <a href="tel:<?= PHONE_PRIMARY_RAW ?>" style="color: #F5A623; font-weight: 800; font-size: 1.1rem; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        📞 <?= PHONE_PRIMARY ?>
                    </a>
                </div>
            </div>
        </aside>
    </div>
</section>

<!-- JSON-LD LOCAL BUSINESS ESPECÍFICO DE COMUNA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Emergencia Fugas <?= htmlspecialchars($comuna['nombre']) ?>",
  "description": "<?= htmlspecialchars($comuna['meta_desc']) ?>",
  "telephone": "<?= PHONE_PRIMARY ?>",
  "areaServed": "<?= htmlspecialchars($comuna['nombre']) ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?= htmlspecialchars($comuna['nombre']) ?>",
    "addressRegion": "Región Metropolitana",
    "addressCountry": "CL"
  },
  "priceRange": "$$",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "00:00",
    "closes": "23:59"
  }
}
</script>

<!-- COBERTURA COMUNAL DE SANTIAGO -->
<section style="background: var(--bg-light); padding: 75px 0 135px; border-top: 1px solid var(--border-color); position: relative;">
    <div class="container" style="text-align: center;">
        <span class="section-tag" style="margin-bottom: 14px;">Red de Asistencia en Santiago</span>
        <h3 style="font-size: clamp(1.6rem, 3.5vw, 2.2rem); margin-bottom: 14px; color: var(--dark-bg); font-weight: 800;">
            Móviles de Guardia en <?= htmlspecialchars($comuna['nombre']) ?> y Comunas Vecinas
        </h3>
        <p style="color: var(--text-muted); max-width: 720px; margin: 0 auto 36px; font-size: 1rem; line-height: 1.65;">
            Despacho coordinado las 24 horas del día con llegada técnica en <strong>30 a 45 minutos</strong>:
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
            foreach ($cobertura_comunas as $com_item): 
                $target_url = $slug_map[$com_item] ?? 'fuga-de-gas-servicio-urgente';
                $is_current = (strtolower(trim($com_item)) === strtolower(trim($comuna['nombre'])));
            ?>
            <a href="<?= $target_url ?>" class="comuna-coverage-pill" style="<?= $is_current ? 'border-color: var(--primary); background: var(--primary-tint); font-weight: 800;' : '' ?>" title="Servicio urgente de fuga de gas en <?= htmlspecialchars($com_item) ?>">
                <svg class="pin-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3" fill="#DC2626"></circle></svg>
                <span><?= htmlspecialchars($com_item) ?><?= $is_current ? ' (Sector Actual)' : '' ?></span>
            </a>
            <?php endforeach; ?>
            <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="comuna-coverage-pill all-santiago-pill" title="Llamar para atención en todo el Gran Santiago">
                <span class="pulse-dot" style="background: #0F172A; width: 7px; height: 7px;"></span>
                <span>+ Todo el Gran Santiago 24/7</span>
            </a>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
