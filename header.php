<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class('bg-background-base max-w-[100vw] overflow-x-hidden') ?>>
<?php wp_body_open(); ?>

    <header class="h-12 md:h-20 flex justify-center items-center">
        <div class="bg-stone-gray h-full w-full max-w-screen-xl mx-10 shadow-sm">

            <div  class="z-10">
                <?php
  wp_nav_menu(array(
    'theme_location' => 'header-menu',
    'menu_class' => 'flex w-full justify-between open_ul',
    'container' => '',
    'walker' => new KarolPortfolio\inc\Customwalker(),
  ));
                ?>
            </div>
        </div>
    </header>

    <main>

