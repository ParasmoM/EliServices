<?php
$pages_cta = [
    'front_page' => [
        'title' => 'Besoin d’un service fiable et humain ?',
        'text'  => 'Nous sommes à votre écoute pour vous accompagner au quotidien avec des solutions adaptées à vos besoins.',
        'btn1'  => [
            'label' => 'Nous contacter →',
            'link'  => home_url('/contactez-nous/'),
            'class' => 'btn btn-white',
        ],
        'btn2'  => [
            'label' => 'Rejoignez-nous →',
            'link'  => home_url('/rejoignez-notre-equipe/'),
            'class' => 'btn btn-primary',
        ],
    ],

    'aide-menagere' => [
        'title' => 'Besoin d\'une aide ménagère ?',
        'text'  => 'Contactez-nous pour organiser votre première prestation. Simple, rapide, en titres-services.',
        'btn1'  => [
            'label' => 'Nous contacter →',
            'link'  => home_url('/contactez-nous/'),
            'class' => 'btn btn-white',
        ],
        'btn2'  => [
            'label' => '',
            'link'  => '',
            'class' => 'btn btn-primary',
        ],
    ],

    'atelier-de-repassage' => [
        'title' => 'Envie d\'un linge impeccable ?',
        'text'  => 'Déposez votre linge à l\'atelier ou contactez-nous pour plus d\'informations.',
        'btn1'  => [
            'label' => 'Nous contacter →',
            'link'  => home_url('/contactez-nous/'),
            'class' => 'btn btn-white',
        ],
        'btn2'  => [
            'label' => '',
            'link'  => '',
            'class' => 'btn btn-primary',
        ],
    ],

    'a-propos-de-nous' => [
        'title' => 'Envie de travailler avec nous ?',
        'text'  => 'Que vous soyez client ou futur employé, nous serions ravis d\'échanger avec vous.',
        'btn1'  => [
            'label' => 'Nous contacter →',
            'link'  => home_url('/contactez-nous/'),
            'class' => 'btn btn-white',
        ],
        'btn2'  => [
            'label' => 'Rejoignez-nous →',
            'link'  => home_url('/rejoignez-notre-equipe/'),
            'class' => 'btn btn-primary',
        ],
    ],

    'rejoignez-notre-equipe' => [
        'title' => '',
        'text'  => '',
        'btn1'  => [
            'label' => '',
            'link'  => '',
            'class' => 'btn btn-white',
        ],
        'btn2'  => [
            'label' => '',
            'link'  => '',
            'class' => 'btn btn-primary',
        ],
    ],

    'contactez-nous' => [
        'title' => 'Besoin d\'un service à domicile ?',
        'text'  => 'Découvrez nos tarifs et simulez le coût de votre repassage en quelques clics.',
        'btn1'  => [
            'label' => 'Voir nos tarifs →',
            'link'  => home_url('/tarifs'),
            'class' => 'btn btn-primary',
        ],
        'btn2'  => [
            'label' => '',
            'link'  => '',
            'class' => 'btn btn-primary',
        ],
    ],
];

$cta = null;

if (is_front_page()) {
    $cta = $pages_cta['front_page'];
} else {
    foreach ($pages_cta as $slug => $config) {
        if ($slug !== 'front_page' && is_page($slug)) {
            $cta = $config;
            break;
        }
    }
}
?>

<?php if (!empty($cta) && !empty($cta['title'])) : ?>
    <?php
    $has_btn1 = !empty($cta['btn1']['label']) && !empty($cta['btn1']['link']);
    $has_btn2 = !empty($cta['btn2']['label']) && !empty($cta['btn2']['link']);
    ?>
    <section class="cta-bottom">
        <div class="container">
            <div class="cta-box">
                <h2><?php echo esc_html($cta['title']); ?></h2>
                <p><?php echo esc_html($cta['text']); ?></p>

                <?php if ($has_btn1 || $has_btn2) : ?>
                    <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                        <?php if ($has_btn1) : ?>
                            <a href="<?php echo esc_url($cta['btn1']['link']); ?>" class="<?php echo esc_attr($cta['btn1']['class']); ?>">
                                <?php echo esc_html($cta['btn1']['label']); ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($has_btn2) : ?>
                            <a href="<?php echo esc_url($cta['btn2']['link']); ?>" class="<?php echo esc_attr($cta['btn2']['class']); ?>">
                                <?php echo esc_html($cta['btn2']['label']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>