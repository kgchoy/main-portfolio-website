<?php snippet('header') ?>

<div id="page-container">

    <div class="grid">
        <div class="col-3of3">
            <section id="first-section" class="section-container">
                <h1><?php echo $page->title()->html() ?></h1>
            </section>
        </div>
    </div>

    <div class="grid">
        <div class="col-2of3">
            <section class="section-container" id="about-summary">
                <?php echo $page->about_section()->kirbytext() ?>
            </section>

            <section class="section-container" id="skills-summary">
            <?php echo $page->skills_section()->kirbytext() ?>
            </section>

            <a id="about-details-button" class="button-nav partial-width-button" href="https://ca.linkedin.com/in/kgchoy">View My LinkedIn Profile&nbsp;&nbsp;&rsaquo;&rsaquo;</a>

        </div> <!-- ./col-2of3 -->

        <div class="col-1of3-about-sidebar">
            <?php echo $page->profile_image()->kirbytext() ?>
        </div> <!-- ./col-1of3 -->

    </div> <!-- ./grid -->

</div> <!-- ./page-container -->

<?php snippet('footer') ?>