<?php snippet('header') ?>

  <!-- <main class="main" role="main"> -->

    <div id="page-container">
        <div class="grid">
            <div class="col-3of3">
                <section id="first-section" class="section-container">
                    <div id="banner-text">
                        <h1><?php echo $page->main_banner_text() ?></h1>

                        <a class="button-nav partial-width-button" href="<?php echo page('about') ?>">About Me&nbsp;&nbsp;&rsaquo;&rsaquo;</a>

                    </div>
                </section>

                <section class="section-container">

                    <?php snippet('mainPageProjects') ?>

                </section>

                <section class="section-container">

                    <span class="anchor-link" id="contact-me"></span>

                    <?php echo $page->contact_me_text()->kirbytext() ?>

                </section>

            </div> <!-- ./col-3of3 -->
        </div> <!-- ./grid -->
    </div> <!-- ./page-container -->

<?php snippet('footer') ?>