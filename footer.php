<?php
$img_path = get_template_directory_uri() . '/assets/images';
$logo = $img_path . '/ELIServiceLogo.png';
?>

<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="#" class="logo">
                    <img src="<?php echo $logo; ?>" alt="Eli Services" class="logo-img">
                </a>
                <p>Entreprise de titres-services éthique, fondée en 2011. L'humain avant le profit.</p>
            </div>
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/aide-menagere/')); ?>">Aide ménagère</a></li>
                    <li><a href="<?php echo esc_url(home_url('/atelier-de-repassage/')); ?>">Repassage</a></li>
                    <li><a href="<?php echo esc_url(home_url('/tarifs')); ?>">Nos tarifs</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>L'entreprise</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/a-propos-de-nous/')); ?>">À propos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/rejoignez-notre-equipe/')); ?>">Rejoignez-nous</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Infos pratiques</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/contactez-nous/')); ?>">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Conditions de travail</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; 2026 Eli Services — Tous droits réservés</span>
            <div class="footer-legal">
                <a href="#">Mentions légales</a>
                <a href="#">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>