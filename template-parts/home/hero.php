<?php
$img_path = get_template_directory_uri() . '/assets/images';
$team_image = $img_path . '/equipe-eli-services.jpg';
?>


<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-badge">
                    ⭐ Entreprise éthique depuis 2011
                </div>
                <h1>Un service de qualité,<br><em>avec respect</em></h1>
                <p>Aide ménagère et repassage à domicile via les titres-services. Chez Eli Services, l'humain passe avant le profit.</p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url(home_url('/tarifs')); ?>#simulateur" class="btn btn-primary">Simuler mon repassage →</a>
                    <div class="dropdown-wrapper">
                        <button class="btn btn-outline dropdown-trigger">
                            Découvrir nos services <span class="dropdown-arrow">▾</span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="<?php echo esc_url(home_url('/aide-menagere/')); ?>" class="dropdown-item">
                                <div>
                                    <strong>Aide ménagère</strong>
                                </div>
                            </a>
                            <a href="<?php echo esc_url(home_url('/atelier-de-repassage/')); ?>" class="dropdown-item">
                                <div>
                                    <strong>Repassage</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-image-main">
                    <div class="hero-image-main">
                        <img src="<?php echo $team_image; ?>" alt="L'équipe Eli Services" class="hero-team-image">
                    </div>
                </div>
                <div class="hero-float-card card-1">
                    <div class="float-icon green">✓</div>
                    <div class="float-card-text">
                        <strong>+310 clients</strong>
                        nous recommandent
                    </div>
                </div>
                <div class="hero-float-card card-2">
                    <div class="float-icon blue">🏅</div>
                    <div class="float-card-text">
                        <strong>Agréé titres-services</strong>
                        Région wallonne
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>