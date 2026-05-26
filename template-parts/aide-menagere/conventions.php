<?php
$pdf_path = get_template_directory_uri() . '/assets/pdf';
$convention_wallonie = $pdf_path . '/convention-wallonie.pdf';
$convention_bx = $pdf_path . '/convention-bx.pdf';
?>

<section class="conventions">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Conventions</span>
            <h2>Conventions par régions</h2>
            <p>Nos conventions prévoient le paiement d'un supplément par heure prestée pour l'aide-ménagère.</p>
        </div>
        <div class="conv-grid">
            <div class="conv-card">
                <div class="conv-icon">🇧🇪</div>
                <h3>Région wallonne</h3>
                <p>Convention pour les clients et clientes de Wallonie.</p>
                <a href="<?php echo esc_url($convention_wallonie); ?>" download>Voir le document →</a>
            </div>
            <div class="conv-card">
                <div class="conv-icon">🇧🇪</div>
                <h3>Région flamande</h3>
                <p>Convention pour les clients et clientes de Flandre.</p>
                <a href="<?php echo esc_url($convention_wallonie); ?>" download>Voir le document →</a>
            </div>
            <div class="conv-card">
                <div class="conv-icon">🇧🇪</div>
                <h3>Région bruxelloise</h3>
                <p>Convention pour les clients et clientes de Bruxelles.</p>
                <a href="<?php echo esc_url($convention_bx); ?>" download>Voir le document →</a>
            </div>
        </div>
    </div>
</section>