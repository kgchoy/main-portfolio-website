<?php snippet('header') ?>

<div id="page-container">

    <div class="grid">
        <div class="col-3of3">
            <section id="first-section" class="section-container colophon">
                <h1><?php echo $page->title()->html() ?></h1>

                <?php echo $page->text()->kirbytext() ?>
            </section>
        </div>
    </div> <!-- ./grid -->

</div> <!-- ./page-container -->

<?php snippet('footer') ?>