<?php get_header(); ?>

<?php get_template_part('template-parts/page-hero'); ?>
<?php get_template_part('template-parts/contact/contact-section'); ?>
<?php get_template_part('template-parts/contact/map-section'); ?>
<?php get_template_part('template-parts/contact/faq'); ?>
<?php get_template_part('template-parts/cta-bottom'); ?>

<?php get_footer(); ?>

<script>
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            const wasOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!wasOpen) item.classList.add('open');
        });
    });
</script>