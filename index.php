<?php
// ==========================================
// CONFIGURACIÓN SEO Y DATOS DINÁMICOS
// ==========================================
$title = "¿Qué es Jelpit? Ejemplos de Servicios y Cómo se Paga | Guía Completa";
$description = "Descubre qué es Jelpit en Colombia, conoce ejemplos de sus servicios para el hogar y empresas, y aprende cómo funciona y cuáles son los medios de pago.";
$keywords = "qué es jelpit, jelpit colombia, servicios jelpit, cómo pagar en jelpit, aseo en casa, reparaciones hogar colombia";
$canonical_url = "https://tudominio.com/jelpit"; // Cambia por tu URL real

// Array de ejemplos de servicios para iterar dinámicamente
$servicios = [
    [
        "titulo" => "Aseo en casa",
        "descripcion" => "Limpieza general o profunda por horas, con personal verificado y de confianza.",
        "icono" => "🧹",
        "imagen" => "https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=400&q=80"
    ],
    [
        "titulo" => "Plomería y Electricidad",
        "descripcion" => "Solución a filtraciones, cortocircuitos, instalación de griferías y rosetas.",
        "icono" => "🔧",
        "imagen" => "https://images.unsplash.com/photo-1607472586893-edb57cbceb42?auto=format&fit=crop&w=400&q=80"
    ],
    [
        "titulo" => "Ayudante en casa (Todero)",
        "descripcion" => "Ideal para colgar cuadros, instalar repisas, armar muebles o instalar soportes de TV.",
        "icono" => "🛠️",
        "imagen" => "https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=400&q=80"
    ],
    [
        "titulo" => "Servicios para Mascotas",
        "descripcion" => "Baño, peluquería y paseos para perros y gatos a domicilio.",
        "icono" => "🐶",
        "imagen" => "https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?auto=format&fit=crop&w=400&q=80"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Básico -->
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <!-- Open Graph / Redes Sociales -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="https://images.unsplash.com/photo-1556910103-1c02745a872f?auto=format&fit=crop&w=1200&q=80">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">

    <!-- Estilos CSS (Inline para máxima velocidad de carga en 1 solo archivo) -->
    <style>
        :root {
            --primary: #4F46E5;
            --secondary: #ec4899;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f3f4f6;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', system-ui, sans-serif; }
        body { color: var(--text-dark); line-height: 1.6; background-color: #fff; }
        
        /* Contenedores y Layout */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        header { background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; padding: 80px 20px; text-align: center; }
        header h1 { font-size: 2.5rem; margin-bottom: 20px; }
        header p { font-size: 1.2rem; max-width: 800px; margin: 0 auto; }
        
        section { padding: 60px 0; }
        .bg-gray { background-color: var(--bg-light); }
        
        h2 { font-size: 2rem; color: var(--primary); text-align: center; margin-bottom: 40px; }
        h3 { font-size: 1.3rem; margin-bottom: 10px; }
        p { margin-bottom: 15px; color: var(--text-light); }
        
        /* Grid de Servicios */
        .grid-servicios { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .card img { width: 100%; height: 200px; object-fit: cover; }
        .card-body { padding: 25px; }
        .card-body span { font-size: 2rem; display: block; margin-bottom: 10px; }
        
        /* Lista de pagos */
        .pagos-list { list-style: none; display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 30px; }
        .pagos-list li { background: white; padding: 15px 30px; border-radius: 50px; font-weight: bold; color: var(--primary); box-shadow: 0 2px 4px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; }

        footer { background: var(--text-dark); color: white; text-align: center; padding: 30px 20px; }
        
        /* Responsive */
        @media (max-width: 768px) {
            header h1 { font-size: 2rem; }
        }
    </style>

    <!-- Schema.org (JSON-LD para Rich Snippets en Google de FAQ) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "¿Qué es Jelpit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Jelpit es una plataforma digital colombiana que conecta a usuarios con expertos en servicios para el hogar y empresas, ofreciendo soluciones de limpieza, mantenimiento, instalación y remodelación."
        }
      }, {
        "@type": "Question",
        "name": "¿Cómo se paga en Jelpit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Jelpit acepta pagos 100% digitales a través de la pasarela de PayU. Puedes pagar usando Tarjetas de Crédito, PSE (Cuentas de ahorro y corriente) y billeteras digitales como DaviPlata."
        }
      }]
    }
    </script>
</head>
<body>

    <!-- HERO SECTION -->
    <header>
        <div class="container">
            <h1>¿Qué es Jelpit? Todo lo que necesitas saber</h1>
            <p>Descubre la plataforma líder en Colombia que está revolucionando la forma en que contratamos servicios para el hogar, el auto y la empresa.</p>
        </div>
    </header>

    <!-- ¿QUÉ ES JELPIT? -->
    <section id="que-es" class="container">
        <h2>¿Qué es Jelpit exactamente?</h2>
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <p><strong>Jelpit</strong> es una plataforma tecnológica de origen colombiano, respaldada por el ecosistema del Grupo Bolívar. Su objetivo principal es facilitar la vida de las personas al conectar sus necesidades de mantenimiento, limpieza y reparaciones con profesionales altamente capacitados y verificados.</p>
            <p>Ya no tienes que buscar recomendaciones a ciegas; la plataforma centraliza la cotización, la agenda y el pago de especialistas para tu casa, conjunto residencial o negocio, todo desde tu celular o computador.</p>
        </div>
    </section>

    <!-- EJEMPLOS DE SERVICIOS (Generado con PHP) -->
    <section id="ejemplos" class="bg-gray">
        <div class="container">
            <h2>Ejemplos de Servicios Populares</h2>
            <div class="grid-servicios">
                <?php foreach ($servicios as $servicio): ?>
                <article class="card">
                    <img src="<?php echo $servicio['imagen']; ?>" alt="Servicio de <?php echo strtolower($servicio['titulo']); ?> en Jelpit">
                    <div class="card-body">
                        <span><?php echo $servicio['icono']; ?></span>
                        <h3><?php echo $servicio['titulo']; ?></h3>
                        <p><?php echo $servicio['descripcion']; ?></p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CÓMO SE PAGA -->
    <section id="como-pagar" class="container">
        <h2>¿Cómo se paga en Jelpit?</h2>
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <p>Una de las mayores ventajas de Jelpit es la seguridad en sus transacciones. Al no manejar efectivo con el técnico directamente, evitas riesgos. Todo el proceso de facturación y pago se realiza de forma anticipada y digital mediante integraciones seguras (como PayU).</p>
            
            <ul class="pagos-list">
                <li>💳 Tarjetas de Crédito (Visa, MasterCard, Amex)</li>
                <li>🏦 PSE (Cuentas de Ahorro y Corriente)</li>
                <li>📱 DaviPlata</li>
                <li>💳 Tarjeta Diners Club</li>
            </ul>
            
            <p style="margin-top: 30px;"><strong>Nota:</strong> Como Jelpit es parte del Grupo Bolívar, los pagos a través de canales como DaviPlata o tarjetas Davivienda suelen contar ocasionalmente con beneficios o descuentos especiales.</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> - Guía Informativa sobre Jelpit. Creado para optimización SEO.</p>
        </div>
    </footer>

</body>
</html>
