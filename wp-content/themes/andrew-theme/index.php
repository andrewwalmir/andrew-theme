<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Teste de Tema</title>

    <?php wp_head(); ?>

</head>

<body>
    <h1><?php bloginfo('name') ?></h1>
    <h2><?php bloginfo('description') ?></h2>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h3><?php the_title(); ?></h3>
            <div>
                <h3><?php the_content(); ?></h3>
            </div>
        <?php endwhile;
    else :
        ?>
        <h3>Não há posts</h3>
    <?php
    endif;
    ?>

    <?php wp_footer(); ?>
</body>

</html>