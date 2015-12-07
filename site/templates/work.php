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
                <section id="project-links-resources">
                    <?php echo $page->resources()->kirbytext() ?>

                    <!-- https://forum.getkirby.com/t/checking-if-field-key-extsts-in-field-method/1323
                         TO DO:
                         - only display each section below if not empty
                         - make sure there is no top margin 
                    -->
                    <!-- <?php echo 'isnotempty = ' . $page->categories()->isEmpty() ?> -->
                </section>

                    <?php echo '<h4>Categories</h4>
                    <p>' . $page->categories() .
                    '</p>
                    '
                    ?>

                    <?php echo '<h4>Roles</h4>
                    <p>' .
                    $page->roles() .
                    '</p>
                    '
                    ?>

                    <?php echo '<h4>Year / Time Taken</h4>
                    <p>' . $page->time_taken() .
                    '</p>
                    '
                    ?>

                    <?php echo '<h4>Relevant Programs &amp; Tools</h4>
                    <p>' . $page->tools() .
                    '</p>
                    '
                    ?>

                    <?php echo '<h4>Collaborators</h4>
                    <p>' . $page->collaborators() .
                    '</p>
                    '
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
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $page->prev()->url() . '">Previous Work</a>';
                            }
                            else {
                                // homePage(): http://getkirby.com/docs/cheatsheet/site/home-page

                                // to go to the overall site root: url('../../home')
                                // otherwise: $site->homePage()
                                // or maybe loop to last item instead?: $page->first()
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $pages->children()->last()->url() . '">Last Overall Work</a>';
                                
                                // echo $pages->children()->last();
                            }
                        ?>
                        
                    </div>

                    <div class="body-gridCol-2of2">
                        <?php
                            if ($prev = $page->nextVisible()) {
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $page->next()->url() . '">Next Work</a>';
                            }

                            else {
                                echo '<a class="button-nav full-width-button center-aligned-text" href="' . $pages->children()->first()->url() . '">First Overall Work</a>';
                            }
                        ?>
                         
<!--                         <?php if($next = $page->nextVisible()): ?>
                            <a class="button-nav full-width-button center-aligned-text" href="<?php echo $page->next()->url() ?>">Next Work: Notif</a>
                        <?php endif ?> -->


                    </div>
                </div> <!-- ./work-page-bottom-buttons -->

            </div> <!-- ./col-2of3 -->

        </div> <!-- ./grid -->

    </div> <!-- ./page-container -->

<?php snippet('footer') ?>