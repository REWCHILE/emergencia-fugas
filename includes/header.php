<?php
require_once __DIR__ . '/../config.php';

// Variables SEO por página
$page_title = $page_title ?? 'Emergencia Fugas de Gas Santiago | Gasfiter Certificado SEC | Sellado Prodoral R6-1';
$page_desc  = $page_desc  ?? 'Gasfiter Certificado SEC para Emergencias de Fugas de Gas en Santiago. Sellado de cañerías sin romper con tecnología alemana Prodoral R6-1, detección con gas trazador y obtención de Sello Verde. Atención 24/7.';
$current_page = $current_page ?? 'home';
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?= SITE_URL . '/' . htmlspecialchars(basename($_SERVER['PHP_SELF'])) ?>">
    
    <!-- Open Graph / Redes Sociales -->
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta property="og:url" content="<?= SITE_URL . '/' . htmlspecialchars(basename($_SERVER['PHP_SELF'])) ?>">
    <meta property="og:site_name" content="Emergencia Fugas Chile">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/img/hero-technician.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="675">
    
    <!-- Geo Tags para Posicionamiento Local en Santiago de Chile -->
    <meta name="geo.region" content="CL-RM">
    <meta name="geo.placename" content="Santiago">
    <meta name="geo.position" content="-33.448890;-70.669265">
    <meta name="ICBM" content="-33.448890, -70.669265">

    <!-- Tipografía Google Fonts: Outfit & Inter (Estilo Mezon Theme) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Estilos Principales -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logotipo.jpg" type="image/jpeg">

    <!-- Schema.org Rich Snippet JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": ["EmergencyService", "Plumber", "LocalBusiness"],
          "@id": "<?= SITE_URL ?>/#organization",
          "name": "Emergencia Fugas - Gasfiter Certificado SEC",
          "alternateName": "Instalgaschile® Emergencia Fugas",
          "url": "<?= SITE_URL ?>",
          "logo": "<?= SITE_URL ?>/assets/img/logotipo.jpg",
          "image": "<?= SITE_URL ?>/assets/img/hero-technician.jpg",
          "description": "Servicio de urgencia en detección y sellado de fugas de gas sin romper con Prodoral R6-1 en Santiago. Instaladores autorizados por la SEC.",
          "telephone": "<?= PHONE_PRIMARY ?>",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av Libertador Bernardo O'Higgins 1302",
            "addressLocality": "Santiago",
            "addressRegion": "Región Metropolitana",
            "postalCode": "8320000",
            "addressCountry": "CL"
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "00:00",
            "closes": "23:59"
          }
        }
      ]
    }
    </script>
</head>
<body>

    <!-- TOPBAR ESTILO MEZON THEME 01 -->
    <div class="topbar-mezon">
        <div class="container topbar-container">
            <div class="topbar-left">
                <span class="topbar-badge"><span class="pulse-dot"></span> 24/7 EN SANTIAGO</span>
                <span class="topbar-info hide-mobile"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> Llegada estimada: 30 a 45 min</span>
                <span class="topbar-info hide-tablet"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg> Gasfiter Autorizado SEC</span>
            </div>
            <div class="topbar-right">
                <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="topbar-link topbar-phone">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5c-1.2 0-2.4-.2-3.6-.6-.3-.1-.7 0-1 .2l-2.2 2.2c-2.8-1.4-5.1-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1-.4-1.1-.6-2.3-.6-3.5 0-.6-.4-1-1-1H4c-.6 0-1 .4-1 1 0 9.4 7.6 17 17 17 .6 0 1-.4 1-1v-3.5c0-.6-.4-1-1-1zM19 12h2c0-4.97-4.03-9-9-9v2c3.87 0 7 3.13 7 7zm-4 0h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3z"/></svg>
                    <span>Central: <strong><?= PHONE_PRIMARY ?></strong></span>
                </a>
                <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="topbar-link topbar-wa hide-mobile">
                    <span>WhatsApp 24 Horas</span>
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR ESTILO MEZON (STICKY EN TODOS LOS DISPOSITIVOS) -->
    <header class="mezon-header" id="siteHeader">
        <div class="container header-container">
            <!-- Brand Logo -->
            <a href="index.php" class="mezon-logo">
                <div class="logo-image-wrap">
                    <img src="assets/img/logotipo.jpg" alt="Logo Emergencia Fugas" width="46" height="46">
                </div>
                <div class="logo-text">
                    <span class="logo-title">EMERGENCIA <span class="text-accent">FUGAS</span></span>
                    <span class="logo-subtitle">GASFITER CERTIFICADO SEC</span>
                </div>
            </a>

            <!-- Navigation Links (Desktop) -->
            <nav class="mezon-nav" id="mainNav">
                <ul class="nav-list">
                    <li class="nav-item <?= $current_page === 'home' ? 'active' : '' ?>">
                        <a href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item has-dropdown <?= in_array($current_page, ['prodoral', 'deteccion', 'certificacion', 'servicios']) ? 'active' : '' ?>">
                        <a href="sellado-de-fugas-de-gas-con-prodoral.php" class="nav-link">
                            Servicios <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="sellado-de-fugas-de-gas-con-prodoral.php" class="dropdown-item">
                                    <div class="dropdown-item-content">
                                        <strong>Sellado con Prodoral R6-1</strong>
                                        <span>Sin romper paredes ni pisos (Alemania)</span>
                                    </div>
                                    <span class="tag-hot">Destacado</span>
                                </a>
                            </li>
                            <li>
                                <a href="deteccion-de-fugas-de-gas.php" class="dropdown-item">
                                    <div class="dropdown-item-content">
                                        <strong>Detección con Gas Trazador</strong>
                                        <span>Localización acústica y geófono digital</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="certificacion-sello-verde-sec.php" class="dropdown-item">
                                    <div class="dropdown-item-content">
                                        <strong>Certificación Sello Verde SEC</strong>
                                        <span>Levantamiento de sellos rojos y TC-6</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="sellado-de-fugas-de-gas-con-prodoral.php#matrices" class="dropdown-item">
                                    <div class="dropdown-item-content">
                                        <strong>Reparación de Cañerías</strong>
                                        <span>Cobre, Acero, Fierro y Matrices</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?= $current_page === 'prodoral' ? 'active' : '' ?>">
                        <a href="sellado-de-fugas-de-gas-con-prodoral.php" class="nav-link">
                            Prodoral R6-1
                            <span class="nav-pill-badge">Sin Romper</span>
                        </a>
                    </li>
                    <li class="nav-item <?= $current_page === 'sello-verde' ? 'active' : '' ?>">
                        <a href="certificacion-sello-verde-sec.php" class="nav-link">Sello Verde SEC</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#cotizador" class="nav-link">Cotizador</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#faq" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item <?= $current_page === 'contacto' ? 'active' : '' ?>">
                        <a href="contacto.php" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </nav>

            <!-- Header Action CTA Buttons -->
            <div class="header-actions">
                <!-- Phone Info Box (Desktop) -->
                <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="header-phone-box">
                    <div class="phone-icon-pulse">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                    </div>
                    <div class="phone-meta">
                        <span class="phone-label">Llámanos 24/7</span>
                        <span class="phone-number"><?= PHONE_PRIMARY ?></span>
                    </div>
                </a>

                <!-- Urgency Button (Desktop & Tablet) -->
                <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn-mezon-primary btn-pulse header-cta-desktop">
                    <span>¡Urgencia Gas!</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>

                <!-- Mobile Quick Call Icon Button -->
                <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="mobile-phone-btn" aria-label="Llamar a Emergencia Fugas">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                </a>

                <!-- Mobile Hamburger Toggle Button (Tablets & Mobile) -->
                <button type="button" class="mobile-toggle" id="mobileMenuToggle" aria-label="Abrir menú de navegación">
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- MOBILE DRAWER MENU (Fluido y Completo) -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="mobile-drawer-header">
            <div class="mobile-brand">
                <img src="assets/img/logotipo.jpg" alt="Emergencia Fugas" width="42" height="42">
                <div>
                    <strong>EMERGENCIA FUGAS</strong>
                    <small>Gasfiter Certificado SEC</small>
                </div>
            </div>
            <button type="button" class="drawer-close" id="mobileDrawerClose" aria-label="Cerrar menú">&times;</button>
        </div>
        <ul class="mobile-nav-list">
            <li><a href="index.php">🏠 Inicio</a></li>
            <li><a href="sellado-de-fugas-de-gas-con-prodoral.php">🔥 Sellado con Prodoral R6-1 (Sin Romper)</a></li>
            <li><a href="deteccion-de-fugas-de-gas.php">🔍 Detección con Gas Trazador</a></li>
            <li><a href="certificacion-sello-verde-sec.php">🏅 Certificación y Sello Verde SEC</a></li>
            <li><a href="index.php#cotizador">⚡ Cotizador Interactivo de Urgencias</a></li>
            <li><a href="index.php#faq">❓ Preguntas Frecuentes</a></li>
            <li><a href="contacto.php">📞 Contacto Directo</a></li>
        </ul>
        <div class="mobile-drawer-actions">
            <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="btn-mezon-primary w-100">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5c-1.2 0-2.4-.2-3.6-.6-.3-.1-.7 0-1 .2l-2.2 2.2c-2.8-1.4-5.1-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1-.4-1.1-.6-2.3-.6-3.5 0-.6-.4-1-1-1H4c-.6 0-1 .4-1 1 0 9.4 7.6 17 17 17 .6 0 1-.4 1-1v-3.5c0-.6-.4-1-1-1z"/></svg>
                Llamar Urgente: <?= PHONE_PRIMARY ?>
            </a>
            <a href="https://wa.me/<?= PHONE_PRIMARY_RAW ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn-mezon-whatsapp w-100">
                Chatear por WhatsApp 24/7
            </a>
        </div>
    </div>
    <div class="drawer-backdrop" id="drawerBackdrop"></div>
