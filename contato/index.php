<?php
$base             = '..';
$active_page      = 'contato';
$page_title       = 'Contato | Siqueira e Blanco - Engenharia HVAC';
$page_description = 'Entre em contato com a Siqueira e Blanco para projetos HVAC, orçamentos e consultoria. Atendimento em Anápolis/GO e todo Brasil. WhatsApp: (62) 99225-0067.';
$og_title         = 'Contato | Siqueira e Blanco Engenharia HVAC';
$og_description   = 'Solicite orçamento para projetos HVAC. Atendemos todo o Brasil com projetos executivos, BIM e consultoria.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/contato/';
$canonical        = 'https://siqueiraeblanco.com.br/contato/';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "Contato - Siqueira e Blanco",
        "mainEntity": {
          "@type": "LocalBusiness",
          "name": "Siqueira e Blanco Engenharia",
          "telephone": "+55-62-99225-0067",
          "email": "nesken@fluxo.eng.br",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Contorno nº 751, Qd. 12 Lt. A, Residencial Arco Íris",
            "addressLocality": "Anápolis",
            "addressRegion": "GO",
            "postalCode": "75106-377",
            "addressCountry": "BR"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": -16.3281,
            "longitude": -48.9535
          },
          "openingHours": "Mo-Fr 08:00-18:00",
          "areaServed": {
            "@type": "Country",
            "name": "BR"
          }
        }
      }
      </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

<main id="main-content">
    <!-- Page Hero -->
    <section class="page-hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Contato</span>
        </nav>
        <span class="section__subtitle">Fale Conosco</span>
        <h1 class="page-hero__title">Entre em <span class="gradient-text">Contato</span></h1>
        <p class="page-hero__subtitle">Vamos conversar sobre seu projeto</p>
      </div>
    </section>

    <!-- Contato -->
    <section class="section">
      <div class="container">
        <div class="contact-grid">
          <!-- Formulário -->
          <div class="contact-form-wrapper fade-in">
            <h2>Solicite um Orçamento</h2>
            <p>Preencha o formulário abaixo ou entre em contato diretamente por WhatsApp ou e-mail.</p>
            
            <form class="contact-form" id="contact-form" action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
              <div class="form-group">
                <label for="name">Nome *</label>
                <input type="text" id="name" name="name" required placeholder="Seu nome completo">
              </div>
              
              <div class="form-row">
                <div class="form-group">
                  <label for="email">E-mail *</label>
                  <input type="email" id="email" name="email" required placeholder="seu@email.com">
                </div>
                <div class="form-group">
                  <label for="phone">Telefone</label>
                  <input type="tel" id="phone" name="phone" placeholder="(00) 00000-0000">
                </div>
              </div>
              
              <div class="form-group">
                <label for="company">Empresa</label>
                <input type="text" id="company" name="company" placeholder="Nome da empresa">
              </div>
              
              <div class="form-group">
                <label for="service">Tipo de Serviço *</label>
                <select id="service" name="service" required>
                  <option value="">Selecione...</option>
                  <option value="projeto-executivo">Projeto Executivo HVAC</option>
                  <option value="modelagem-bim">Modelagem BIM</option>
                  <option value="areas-limpas">Áreas Limpas / Cleanrooms</option>
                  <option value="consultoria">Consultoria Técnica</option>
                  <option value="comissionamento">Comissionamento / TAB</option>
                  <option value="pmoc">PMOC</option>
                  <option value="retrofit">Retrofit de Sistemas</option>
                  <option value="outro">Outro</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="sector">Setor</label>
                <select id="sector" name="sector">
                  <option value="">Selecione...</option>
                  <option value="farmaceutico">Farmacêutico</option>
                  <option value="hospitalar">Hospitalar</option>
                  <option value="datacenter">Data Center</option>
                  <option value="industrial">Industrial</option>
                  <option value="corporativo">Corporativo</option>
                  <option value="hoteleiro">Hoteleiro</option>
                  <option value="outro">Outro</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="message">Mensagem *</label>
                <textarea id="message" name="message" rows="5" required placeholder="Descreva seu projeto ou necessidade..."></textarea>
              </div>
              
              <button type="submit" class="btn-cta btn-cta--primary">
                <div class="btn-cta__icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
                </div>
                <div class="btn-cta__content">
                  <strong>Enviar Mensagem</strong>
                  <span>Retorno em até 24h</span>
                </div>
              </button>
            </form>
          </div>

          <!-- Informações de Contato -->
          <div class="contact-info fade-in">
            <div class="contact-card glass-card">
              <h3>Informações de Contato</h3>
              
              <div class="contact-item">
                <div class="contact-item__icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                </div>
                <div class="contact-item__content">
                  <strong>Endereço</strong>
                  <p>Av. Contorno nº 751, Qd. 12 Lt. A<br>Residencial Arco Íris<br>Anápolis - GO, 75106-377</p>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-item__icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                  </svg>
                </div>
                <div class="contact-item__content">
                  <strong>Telefone / WhatsApp</strong>
                  <p><a href="tel:+5562992250067">(62) 99225-0067</a></p>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-item__icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                </div>
                <div class="contact-item__content">
                  <strong>E-mail</strong>
                  <p><a href="mailto:nesken@fluxo.eng.br">nesken@fluxo.eng.br</a></p>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-item__icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                  </svg>
                </div>
                <div class="contact-item__content">
                  <strong>Horário de Atendimento</strong>
                  <p>Segunda a Sexta: 08:00 - 18:00</p>
                </div>
              </div>
            </div>

            <!-- WhatsApp CTA -->
            <a href="https://wa.me/5562992250067?text=Olá! Gostaria de solicitar um orçamento para projeto HVAC." class="btn-cta btn-cta--whatsapp" target="_blank" rel="noopener noreferrer">
              <div class="btn-cta__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
              </div>
              <div class="btn-cta__content">
                <strong>Fale pelo WhatsApp</strong>
                <span>Resposta rápida</span>
              </div>
            </a>

            <!-- Área de Atendimento -->
            <div class="coverage-card glass-card">
              <h3>Área de Atendimento</h3>
              <p>Sede em <strong>Anápolis/GO</strong>, com projetos em todo o Brasil:</p>
              <div class="coverage-states">
                <span>GO</span>
                <span>DF</span>
                <span>SP</span>
                <span>RJ</span>
                <span>MG</span>
                <span>BA</span>
                <span>PE</span>
                <span>PA</span>
                <span>MT</span>
                <span>MS</span>
                <span>TO</span>
                <span>MA</span>
              </div>
              <p class="coverage-note">Projetos executivos e consultoria podem ser realizados remotamente. Visitas técnicas programadas para acompanhamento de obra.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mapa -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Localização</span>
          <h2 class="section__title">Como <span class="gradient-text">Chegar</span></h2>
        </div>
        <div class="map-wrapper">
          <iframe
            src="https://maps.google.com/maps?q=Siqueira+e+Blanco,+Av.+Contorno+751,+Residencial+Arco+Iris,+Anapolis,+GO,+75106-377&t=&z=16&ie=UTF8&iwloc=B&output=embed"
            width="100%"
            height="450"
            class="contato__map-iframe"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Localização da Siqueira e Blanco em Anápolis/GO">
          </iframe>
        </div>
      </div>
    </section>
  </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php include '../includes/scripts.php'; ?>
  </body>
</html>
