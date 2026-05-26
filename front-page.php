<?php get_header(); ?>

<?php get_template_part('template-parts/home/hero'); ?>
<?php get_template_part('template-parts/home/trust-bar'); ?>
<?php get_template_part('template-parts/home/services'); ?>
<?php get_template_part('template-parts/home/difference'); ?>
<?php get_template_part('template-parts/home/stats'); ?>
<?php get_template_part('template-parts/home/zone'); ?>
<?php get_template_part('template-parts/home/faq'); ?>
<?php get_template_part('template-parts/cta-bottom'); ?>
<?php get_template_part('template-parts/home/contact-compact'); ?>

<script>
    // FAQ accordion
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            const wasOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!wasOpen) item.classList.add('open');
        });
    });

    // Dropdown hero
    document.querySelector('.dropdown-trigger').addEventListener('click', function(e) {
        e.preventDefault();
        this.closest('.dropdown-wrapper').classList.toggle('open');
    });

    // Fermer si clic en dehors
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown-wrapper')) {
            document.querySelectorAll('.dropdown-wrapper.open').forEach(d => d.classList.remove('open'));
        }
    });
</script>

<?php get_footer(); ?>