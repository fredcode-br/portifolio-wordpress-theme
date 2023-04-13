<?php 
    //Template Name: Sobre
?> 
    <?php get_header(); ?>
    <section id="about">
        <div class="container pb-5">
            <h2 class="py-5 text-center">Sobre mim</h2>
            <div class="about-content d-flex">
                <div class="about-image col-5">
                    <img src="<?php echo get_theme_root_uri();?>/portifólio/images/about.png" alt="">
                </div>
                <div class="about-description text-light col-7 pe-5">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing
                         and typesetting industry. Lorem Ipsum has been
                          the industry's standard dummy text ever since
                           the 1500s, Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard
                         dummy text 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>