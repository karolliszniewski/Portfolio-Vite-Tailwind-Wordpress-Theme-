<?php get_header(); ?>




<section id="Myskills" class="h-auto">
    <div class="mx-10">
        <div class="max-w-screen-xl mx-auto ">
            <div class="w-full h-20 flex items-center  ">
                <h2 class="text-yellow-theme font-bold text-3xl h-full flex items-center ml-1">
                    <?php the_title(); ?>
                </h2>


            </div>

            <div class="h-auto w-full flex flex-wrap  justify-center mb-10 md:mb-0">

                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();

                ?>
                        <section class=" text-white">

                            <div>
                                <?php the_content(); ?>
                            </div>
                        </section>
                <?php
                    // Display the post content
                    endwhile;
                else :
                    echo '<p>No content found</p>';
                endif;
                ?>
            </div>

        </div>
    </div>
    </div>
</section>


<?php get_footer(); ?>
