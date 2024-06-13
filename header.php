<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class('bg-black') ?>>
<?php wp_body_open(); ?>

    <header class="flex-0 bg-slate-100 px-4 border shadow-md z-50">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center min-h-[40px]">
            <div class="">
                <a href="<?php echo home_url() ?>">Logo</a>
            </div>
            <div >
                <?php wp_nav_menu( ['theme_location' => 'header-menu', 'menu_id' => 'header-menu',] );?>
            </div>
        </div>
    </header>

    <main>

