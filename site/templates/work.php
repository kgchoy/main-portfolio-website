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
            <div class="col-1of3-work-sidebar" id="work-sidebar">
                <?php
                    if ($page->resources()->isNotEmpty()) {
                        echo '<section id="project-links-resources">';
                        echo '<h4>Links &amp; Resources</h4>';
                        echo $page->resources()->kirbytext();
                        echo '</section>';
                    }

                    if ($page->categories()->isNotEmpty()) {
                        echo '<h4>Categories</h4>
                        <p>' . $page->categories() . '</p>';
                    }

                    if ($page->roles()->isNotEmpty()) {
                        echo '<h4>Roles</h4>
                        <p>' . $page->roles() . '</p>';
                    }

                    if ($page->time_taken()->isNotEmpty()) {
                        echo '<h4>Duration</h4>
                        <p>' . $page->time_taken() . '</p>';
                    }

                    if ($page->tools()->isNotEmpty()) {
                        echo '<h4>Relevant Programs &amp; Tools</h4>
                        <p>' . $page->tools() . '</p>';
                    }

                    if ($page->collaborators()->isNotEmpty()) {
                        echo '<h4>Collaborators</h4>
                        <p>' . $page->collaborators() . '</p>';
                    }

                ?>

            </div> <!-- ./col-1of3-work-sidebar -->


            <div class="col-2of3">
                <section class="section-container" id="about-section">
                
                    <?php echo $page->about_section()->kirbytext() ?>

                </section>

                <section class="section-container" id="process-section">
                    <?php echo $page->process_section()->kirbytext() ?>
                </section>

                <section class="section-container" id="outcomes-section">
                    <?php echo $page->outcomes_section()->kirbytext() ?>
                </section>

                <!-- navigation buttons for end of a work page -->
                <div class="grid work-page-bottom-buttons">
                    <div class="body-gridCol-1of2">
                        <?php
                            if ($prev = $page->prevVisible()) {
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $page->prev()->url() . '">&laquo;&nbsp; Go to Previous Work</a>';
                            }
                            else {
                                // homePage(): http://getkirby.com/docs/cheatsheet/site/home-page

                                // to go to the overall site root: url('../../home')
                                // otherwise: $site->homePage()
                                // or maybe loop to last item instead?: $page->first()
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $pages->children()->last()->url() . '">&laquo;&nbsp; Go to Last Work</a>';
                                
                                // echo $pages->children()->last();
                            }
                        ?>
                        
                    </div>

                    <div class="body-gridCol-2of2">
                        <?php
                            if ($prev = $page->nextVisible()) {
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $page->next()->url() . '">Go to Next Work &nbsp;&raquo;</a>';
                            }

                            else {
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $pages->children()->first()->url() . '">Go to First Work &nbsp;&raquo;</a>';
                            }
                        ?>

                    </div>
                </div> <!-- ./work-page-bottom-buttons -->

            </div> <!-- ./col-2of3 -->

        </div> <!-- ./grid -->

    </div> <!-- ./page-container -->

<?php snippet('footer') ?>