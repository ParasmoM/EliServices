<?php
$title = '';
$text = '';
$btn1 = '';
$btn2 = '';

if (is_page('tarifs')) {
    $breadcrumb = '<a href="/">Accueil</a> / Nos Tarifs';
    $title = 'Nos Tarifs';
    $text = 'Des tarifs transparents grâce au système des titres-services. Découvrez combien coûtent nos services.';
} elseif (is_page('aide-menagere')) {
    $title = 'Aide Ménagère';
    $text = "Confiez l'entretien de votre intérieur à une aide-ménagère attitrée, formée et assurée. Payable en titres-services.";
} elseif (is_page('atelier-de-repassage')) {
    $title = 'Atelier de Repassage';
    $text = "5 repasseuses professionnelles expérimentées (repassant depuis 2011 pour la plus ancienne) prennent soin de votre linge dans notre atelier.";
} elseif (is_page('a-propos-de-nous')) {
    $title = 'À propos de nous';
    $text = "Une petite entreprise de titres-services fondée en 2011 qui place l'humanité avant le profit.";
} elseif (is_page('rejoignez-notre-equipe')) {
    $title = 'Rejoignez notre équipe';
    $text = "Intégrez une entreprise de titres-services qui place ses employés au centre de ses priorités.";
} elseif (is_page('contactez-nous')) {
    $title = 'Contactez-nous';
    $text = "Une question sur nos services ? Besoin d'un renseignement ? Nous sommes à votre écoute.";
}
?>

<?php if ($title) : ?>
    <div class="page-hero">
        <div class="container">
            <h1><?php echo esc_html($title); ?></h1>
            <p><?php echo esc_html($text); ?></p>
        </div>
    </div>
<?php endif; ?>