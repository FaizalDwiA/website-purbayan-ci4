<?php
/**
 * View: kontak/index.php
 * Halaman Kontak & Hubungi Kami (Eco-Modern Premium Redesign)
 * @var array $kontak
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'kontak',
    'content'     => '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Page Banner -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Hubungi Kami</h1>
    </div>
  </section>

  <!-- Offset Content Container -->
  <div class="container">
    <div class="modern-content-box">
      <p>Terima kasih atas minat dan kepedulian Anda terhadap **Proklim Purbayan**. Kami senantiasa menyambut hangat pertanyaan, saran kolaborasi lingkungan, kemitraan program, serta pendaftaran kader relawan baru. Silakan hubungi kami melalui detail di bawah ini:</p>
      
      <!-- Styled Two-Column Contact Block -->
      <div class="contact-block" style="display: flex; gap: 40px; margin-top: 40px; flex-wrap: wrap;">
        
        <!-- Left Column: Contact Detail Cards -->
        <div style="flex: 1; min-width: 320px; display: flex; flex-direction: column; gap: 20px;">
          
          <!-- Card: Address -->
          <div style="background: var(--bg-site); padding: 24px; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; gap: 18px; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.boxShadow=\'var(--shadow-sm)\';" onmouseout="this.style.borderColor=\'var(--border-light)\'; this.style.boxShadow=\'none\';">
            <div style="width: 46px; height: 46px; border-radius: var(--radius-sm); background: var(--grad-eco-light); display: flex; align-items: center; justify-content: center; color: var(--primary-dark); font-size: 1.15rem; flex-shrink: 0;">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark); text-transform: uppercase; letter-spacing: 0.5px; font-family: var(--font-heading);">Alamat Sekretariat</h4>
              <p style="margin-bottom: 0; font-size: 0.95rem; color: var(--slate-700); line-height: 1.65;">
                Perumahan Kelapa Gading, RT.03/ RW.11, Dusun I,<br />Purbayan, Kec. Baki, Kabupaten Sukoharjo, Jawa Tengah<br />Kode Pos: 57556
              </p>
            </div>
          </div>

          <!-- Card: Phone/WA -->
          <div style="background: var(--bg-site); padding: 24px; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; gap: 18px; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.boxShadow=\'var(--shadow-sm)\';" onmouseout="this.style.borderColor=\'var(--border-light)\'; this.style.boxShadow=\'none\';">
            <div style="width: 46px; height: 46px; border-radius: var(--radius-sm); background: var(--grad-eco-light); display: flex; align-items: center; justify-content: center; color: var(--primary-dark); font-size: 1.15rem; flex-shrink: 0;">
              <i class="fab fa-whatsapp"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark); text-transform: uppercase; letter-spacing: 0.5px; font-family: var(--font-heading);">Telepon / WhatsApp</h4>
              <p style="margin-bottom: 0; font-size: 1.05rem; color: var(--slate-700); font-weight: 700;">
                ' . esc($kontak['nomor'] ?? '-') . '
              </p>
            </div>
          </div>

          <!-- Card: Email -->
          <div style="background: var(--bg-site); padding: 24px; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; gap: 18px; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.boxShadow=\'var(--shadow-sm)\';" onmouseout="this.style.borderColor=\'var(--border-light)\'; this.style.boxShadow=\'none\';">
            <div style="width: 46px; height: 46px; border-radius: var(--radius-sm); background: var(--grad-eco-light); display: flex; align-items: center; justify-content: center; color: var(--primary-dark); font-size: 1.15rem; flex-shrink: 0;">
              <i class="far fa-envelope"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark); text-transform: uppercase; letter-spacing: 0.5px; font-family: var(--font-heading);">Surel / Email Resmi</h4>
              <p style="margin-bottom: 0; font-size: 1.05rem; color: var(--slate-700); font-weight: 700;">
                ' . esc($kontak['email'] ?? '-') . '
              </p>
            </div>
          </div>

          <!-- Card: Instagram -->
          <div style="background: var(--bg-site); padding: 24px; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; gap: 18px; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.boxShadow=\'var(--shadow-sm)\';" onmouseout="this.style.borderColor=\'var(--border-light)\'; this.style.boxShadow=\'none\';">
            <div style="width: 46px; height: 46px; border-radius: var(--radius-sm); background: var(--grad-eco-light); display: flex; align-items: center; justify-content: center; color: var(--primary-dark); font-size: 1.15rem; flex-shrink: 0;">
              <i class="fab fa-instagram"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark); text-transform: uppercase; letter-spacing: 0.5px; font-family: var(--font-heading);">Instagram Resmi</h4>
              <p style="margin-bottom: 0; font-size: 1.05rem;">
                <a href="' . esc($kontak['sosmed'] ?? '#') . '" target="_blank" rel="noopener noreferrer" style="color: var(--primary-dark); font-weight: 700; text-decoration: none;">@bungaraya_purbayan</a>
              </p>
            </div>
          </div>

        </div>
        
        <!-- Right Column: Styled Google Maps Frame -->
        <div style="flex: 1.2; min-width: 320px; display: flex; flex-direction: column;">
          <div style="width: 100%; height: 100%; min-height: 400px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid var(--border-light); background: #ffffff; padding: 12px; display: flex; flex-direction: column;">
            <iframe decoding="async" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0089671441096!2d110.77445747418606!3d-7.5740000748136715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a151923da6395%3A0x1673d78197234f0f!2sBank%20Sampah%20Bunga%20Raya!5e0!3m2!1sid!2sid!4v1686552373950!5m2!1sid!2sid" style="width:100%; height:100%; border:0; flex-grow: 1; border-radius: var(--radius-sm);" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            <div style="padding: 16px 10px 6px 10px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
              <span style="font-size: 0.9rem; color: var(--text-muted); font-weight: 600;"><i class="fas fa-info-circle" style="color: var(--primary); margin-right: 4px;"></i> Akses rute peta interaktif</span>
              <a href="https://goo.gl/maps/iRfdiai746TTdCos9" target="_blank" rel="noopener noreferrer" class="btn-modern btn-primary" style="font-size: 0.85rem; padding: 10px 22px;">
                Buka Peta Maps <i class="fas fa-external-link-alt" style="font-size: 0.8rem; margin-left: 6px;"></i>
              </a>
            </div>
          </div>
        </div>

      </div>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 50px 0 40px 0;">
      
      <div style="text-align: center; padding: 20px 0;">
        <p style="margin-bottom: 5px; color: var(--text-muted); font-size: 0.95rem;">Salam Hijau &amp; Lestari,</p>
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700;">Sekretariat Kerja Proklim Purbayan</h4>
      </div>
    </div>
  </div>
</main>
',
]);
