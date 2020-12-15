<?php
get_header();
?>

<main id="site-content" role="main">
    <div class="highlightBox">
        <p>This is a page that demonstrates template hierarchy.</p>
        <p>This page's slug is "template-hierarchy, so I was able to create a template file for this page by creating a new file in my theme called "page-template-hierarchy.php".</p>
        <br>
        <p>In this new file I can add whatever content I want to this page without effecting the other pages.</p>
        <p>Click on the Sample Page link in a header to see a comparision between this templated page and a normal page.</p>
    </div>

</main>
<?php get_template_part('template-parts/footer-menus-widgets'); ?>
<?php get_footer(); ?>