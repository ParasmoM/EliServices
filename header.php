<?php
$img_path = get_template_directory_uri() . '/assets/images';
$logo = $img_path . '/ELIServiceLogo.png';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- ===== TOP BAR ===== -->
    <div class="top-bar">
        <div class="container">
            <div>
                <span>📞 02 / 123 45 67</span>
                <a href="mailto:info@eliservices.be">info@eliservices.be</a>
            </div>
            <div class="lang-switch">
                <!-- <a href="#" class="active">FR</a>
                <a href="#">NL</a>
                <a href="#">EN</a> -->
            </div>
        </div>
    </div>

    <!-- ===== HEADER ===== -->
    <header>
        <div class="container header-inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo $logo; ?>" alt="Eli Services" class="logo-img">
            </a>

            <nav class="main-nav">
                <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>

                <div class="nav-item has-dropdown">
                    <span>Nos Services</span>
                    <div class="dropdown-menu">
                        <a href="<?php echo esc_url(home_url('/aide-menagere/')); ?>">Aide ménagère</a>
                        <a href="<?php echo esc_url(home_url('/atelier-de-repassage/')); ?>">Atelier de repassage</a>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/tarifs/')); ?>">Nos Tarifs</a>
                <a href="<?php echo esc_url(home_url('/a-propos-de-nous/')); ?>">À propos</a>
                <a href="<?php echo esc_url(home_url('/rejoignez-notre-equipe/')); ?>">Rejoignez-nous</a>
                <a href="<?php echo esc_url(home_url('/contactez-nous/')); ?>" class="nav-cta">Nous contacter</a>
            </nav>
        </div>
    </header>