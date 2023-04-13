<?php 
    //Template Name: Home
?> 
    <?php get_header(); ?>
    <section id="home">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div class="home-download col-6 d-flex justify-content-center flex-column text-light">
                <h1>FREDERICO RUFINO</h1>
                <p>Web Designer,  Web Developer</p>
                <div class="home-buttons d-flex gap-3 pt-4">
                    <button class="cv">Baixar CV</button>
                    <button class="show">Ver mais</button>
                </div>
            </div>
            <div class="home-image col-6 d-flex flex-column justify-content-center align-items-center h-100">
                <img src="<?php echo get_theme_root_uri();?>/portifólio/images/home.png" alt="" >
            </div>
        </div>
    </section>
    <?php get_footer(); ?>