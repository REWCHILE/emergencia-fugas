<?php
/**
 * Configuración Global - Emergencia Fugas
 * Sitio: https://emergencia-fugas.cl
 */

define('SITE_NAME', 'Emergencia Fugas');
define('SITE_TAGLINE', 'Gasfiter Certificado SEC • Sellado de Fugas sin Romper con Prodoral R6-1');
define('SITE_URL', 'http://127.0.0.1:8080'); // O https://emergencia-fugas.cl en producción
define('PHONE_PRIMARY', '+56 9 4987 7316');
define('PHONE_PRIMARY_RAW', '56949877316');
define('PHONE_SECONDARY', '+56 9 9748 1755');
define('PHONE_SECONDARY_RAW', '56997481755');
define('EMAIL_CONTACT', 'contacto@emergencia-fugas.cl');
define('OFFICE_ADDRESS', "Av. Libertador Bernardo O'Higgins 1302, Santiago, Región Metropolitana, Chile");
define('WHATSAPP_DEFAULT_MSG', urlencode('Hola Emergencia Fugas, tengo una urgencia por fuga de gas en mi domicilio y requiero atención hoy.'));

// Redes de cobertura
$cobertura_comunas = [
    'Las Condes', 'Providencia', 'Ñuñoa', 'Santiago Centro', 'Vitacura', 
    'Lo Barnechea', 'La Reina', 'Peñalolén', 'La Florida', 'Maipú', 
    'San Miguel', 'Macul', 'Estación Central', 'Huechuraba', 'Recoleta', 
    'Independencia', 'Quilicura', 'San Joaquín', 'Pudahuel', 'Colina / Chicureo'
];

// Servicios destacados
$servicios_data = [
    [
        'id' => 'sellado-prodoral',
        'title' => 'Sellado de Fugas con Prodoral R6-1',
        'badge' => 'Tecnología Alemana Sin Romper',
        'url' => 'sellado-de-fugas-de-gas-con-prodoral.php',
        'icon' => 'shield-check',
        'desc' => 'Sellado polimérico interno para microfugas en cañerías de cobre, acero y fierro galvanizado. Sin demoler muros, cerámicas ni pisos.',
        'beneficio' => 'Ahorro del 60% vs obra tradicional y listo en horas.'
    ],
    [
        'id' => 'deteccion-fugas',
        'title' => 'Detección con Gas Trazador y Geófono',
        'badge' => 'Diagnóstico No Invasivo',
        'url' => 'deteccion-de-fugas-de-gas.php',
        'icon' => 'search',
        'desc' => 'Localización milimétrica del punto exacto de filtración mediante mezcla de hidrógeno/nitrógeno inerte y sensores ultrasónicos.',
        'beneficio' => 'Detección exacta sin perforaciones a ciegas.'
    ],
    [
        'id' => 'certificacion-sec',
        'title' => 'Certificación SEC y Sello Verde',
        'badge' => 'Instaladores Autorizados Clase 1',
        'url' => 'certificacion-sello-verde-sec.php',
        'icon' => 'award',
        'desc' => 'Normalización técnica de instalaciones de gas residenciales, comerciales e industriales. Levantamiento de Sellos Rojos o Amarillos.',
        'beneficio' => 'Trámite oficial TC-6 y manometría certificada SEC.'
    ],
    [
        'id' => 'reparacion-redes',
        'title' => 'Reparación de Cañerías y Matrices',
        'badge' => 'Cobre, HDPE, Acero y Fierro',
        'url' => 'sellado-de-fugas-de-gas-con-prodoral.php#matrices',
        'icon' => 'tool',
        'desc' => 'Reparación integral de redes de gas natural (GN) y gas licuado (GLP), verticales, salas de calderas y medidores en comunidades.',
        'beneficio' => 'Soldadura calificada y pruebas de hermeticidad.'
    ],
    [
        'id' => 'emergencia-24-7',
        'title' => 'Urgencias Fugas de Gas 24/7',
        'badge' => 'Llegada en Menos de 45 Min',
        'url' => 'contacto.php',
        'icon' => 'flame',
        'desc' => 'Atención inmediata ante fuerte olor a gas, cortes por compañía suministradora (Metrogas, Lipigas, Gasco, Abastible) o roturas accidentales.',
        'beneficio' => 'Técnicos de guardia activos todos los días.'
    ],
    [
        'id' => 'gas-agua',
        'title' => 'Detección y Reparación Fugas de Agua',
        'badge' => 'Cámaras Térmicas y Geófono',
        'url' => 'contacto.php#agua',
        'icon' => 'droplet',
        'desc' => 'Detección de filtraciones ocultas de agua fría y caliente en losas, pisos radiantes y matrices subterráneas con termografía infrarroja.',
        'beneficio' => 'Ubicación sin roturas innecesarias.'
    ]
];

// Preguntas frecuentes para FAQ y Rich Snippet Schema
$faqs_data = [
    [
        'q' => '¿Qué es Prodoral R6-1 y cómo repara fugas de gas sin romper?',
        'a' => 'Prodoral R6-1 es un compuesto sellante de ingeniería alemana desarrollado especialmente para redes de gas natural y GLP. Se inyecta de forma líquida a presión por el interior de la cañería ya existente, impregnando y sellando herméticamente uniones roscadas y microfisuras desde dentro. Luego se evacúa el exceso y se cura con aire comprimido, sin necesidad de picar muros, remover cerámicas ni levantar pisos.'
    ],
    [
        'q' => '¿El sellado con Prodoral cumple con la normativa de la SEC en Chile?',
        'a' => 'Sí. La Superintendencia de Electricidad y Combustibles (SEC) reconoce los procedimientos de sellado interno siempre que sean ejecutados por instaladores certificados y cumplan con las pruebas de hermeticidad y estanqueidad manométrica normadas (Decreto Supremo Nº 66).'
    ],
    [
        'q' => '¿Cuánto tiempo demora la reparación de una fuga con Prodoral?',
        'a' => 'Un procedimiento típico de sellado con Prodoral R6-1 se completa en el mismo día (usualmente entre 3 a 5 horas, según la extensión de la red). La obra tradicional de picar, reemplazar tubería y reparar albañilería puede tardar entre 4 a 10 días.'
    ],
    [
        'q' => '¿Qué debo hacer de inmediato si siento un fuerte olor a gas en mi hogar?',
        'a' => '1. No accione interruptores de luz ni encienda fósforos o artefactos eléctricos. 2. Cierre inmediatamente la llave de paso general del gas o del medidor. 3. Ventile abriendo puertas y ventanas. 4. Evacúe el área y llámenos de urgencia al +56 9 4987 7316 desde el exterior.'
    ],
    [
        'q' => '¿En qué comunas de Santiago atienden emergencias?',
        'a' => 'Tenemos móviles de guardia en todas las comunas del Gran Santiago: Las Condes, Providencia, Vitacura, Lo Barnechea, Ñuñoa, La Reina, Santiago Centro, Maipú, La Florida, Peñalolén, San Miguel, Macul, Colina, Chicureo y alrededores.'
    ],
    [
        'q' => '¿Qué garantía tiene la reparación de fuga?',
        'a' => 'Todas nuestras intervenciones cuentan con garantía escrita y entrega de informe técnico de manometría con instalador autorizado SEC, asegurando hermeticidad total al 100%.'
    ]
];
