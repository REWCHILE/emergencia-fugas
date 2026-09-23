# Emergencia Fugas - Gasfiter Certificado SEC (Santiago, Chile)

Sitio web dinámico y de alta conversión para **Emergencia Fugas** (`emergencia-fugas.cl`), desarrollado en **PHP 8.3, Vanilla JavaScript y CSS3 Moderno (Mobile-First)**. Inspirado en el diseño y arquitectura del tema **Mezon Theme 01 (Plumber & Handyman Services)** de ThemeForest.

## 🚀 Características Principales

- **Arquitectura Limpia & Ligera:** Desarrollado 100% en PHP nativo, Vanilla JS y CSS puro, sin frameworks pesados ni dependencias externas lentas.
- **Diseño 100% Mobile-First:** Adaptabilidad fluida en teléfonos móviles (320px - 480px), tablets y pantallas ultra anchas.
- **Header Sticky:** Barra de navegación fija con micro-animaciones, menú hamburguesa táctil y menú lateral (Drawer) con superposición absoluta.
- **Herramienta Interactiva:** Cotizador y pre-diagnóstico de emergencias en tiempo real con redirección directa a WhatsApp (`+56 9 4987 7316`).
- **Páginas Pilares de SEO Local:**
  - `index.php`: Home 01 con contadores, comparador de métodos, testimonios y acordeón FAQ.
  - `sellado-de-fugas-de-gas-con-prodoral.php`: Explicación técnica de sellado no destructivo con tecnología alemana Prodoral R6-1.
  - `deteccion-de-fugas-de-gas.php`: Detección acústica con geófono electroacústico y gas trazador (formiergas).
  - `certificacion-sello-verde-sec.php`: Regularización bajo Decreto Supremo Nº 66 y levantamiento de Sellos Rojos de Metrogas.
  - `contacto.php`: Formulario dinámico con protocolos de seguridad inmediatos.
- **SEO & Rich Snippets:** Integración de Schema.org JSON-LD (`EmergencyService`, `Plumber`, `LocalBusiness`), OpenGraph, Geo-tags y código QR oficial de validación SEC.
- **Barra de Acción Rápida Flotante:** Acceso inmediato a llamadas telefónicas y WhatsApp en dispositivos móviles.

## 🛠️ Tecnologías

- **Backend:** PHP 8.1+ (probado en PHP 8.3)
- **Frontend:** HTML5 semántico, CSS3 moderno (Custom Properties, Grid & Flexbox, Fluid Clamp Typography), JavaScript ES6+ Vanilla
- **Servidor Web compatible:** Apache, Nginx o servidor integrado PHP (`php -S`)

## 💻 Instalación y Despliegue Local

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/REWCHILE/emergencia-fugas.git
   ```
2. Mover la carpeta a tu entorno de servidor local (Laragon, XAMPP o similar) o iniciar con el CLI de PHP:
   ```bash
   php -S 127.0.0.1:8080
   ```
3. Abrir en el navegador:
   ```
   http://127.0.0.1:8080
   ```

## 📄 Configuración

Toda la información de la empresa (teléfonos, WhatsApp, correos, dirección y comunas de cobertura) se centraliza en:
- `config.php`
