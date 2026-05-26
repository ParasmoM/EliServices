<?php
$img_path = get_template_directory_uri() . '/assets/images';
$image = $img_path . '/repassage.png';
?>

<section class="intro">
        <div class="container">
            <div class="intro-layout">
                <div class="intro-img"><img src="<?php echo $image; ?>" alt="Repassage en atelier"></div>
                <div class="intro-text">
                    <h2>Un repassage professionnel en atelier</h2>
                    <p>Confiez-nous votre linge. Il est traité dans notre atelier de repassage avec du matériel professionnel et restitué impeccable.</p>
                    <p>Nous réalisons aussi pour vous de petits travaux de couture (raccommodage, retouches...).</p>
                    <div class="intro-cta">
                        <a href="<?php echo esc_url(home_url('/tarifs')); ?>#simulateur" class="btn btn-primary">Voir notre tarif →</a>
                        <a href="<?php echo esc_url(home_url('/contactez-nous/')); ?>" class="btn btn-outline">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>