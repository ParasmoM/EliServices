<?php
$img_path = get_template_directory_uri() . '/assets/images';
$team_image = $img_path . '/eli-aide-menagere.png';
?>

<section class="intro">
    <div class="container">
        <div class="intro-layout">
            <div class="intro-img"><img src="<?php echo $team_image; ?>" alt="L'équipe Eli Services"></div>
            <div class="intro-text">
                <h2>Un intérieur impeccable, chaque semaine</h2>
                <p>Avant d'accueillir votre aide-ménagère, vérifiez le matériel et les produits que vous mettez à sa disposition. Consultez notre check-list ci-dessous.</p>
                <p>La région wallonne, dont Eli Services relève car son siège est en Wallonie, impose une convention écrite entre l'entreprise de titres-services et ses clients pour l'activité d'aide-ménagère.</p>
                <a href="<?php echo esc_url(home_url('/contactez-nous/')); ?>" class="btn btn-primary">Nous contacter →</a>
            </div>
        </div>
    </div>
</section>