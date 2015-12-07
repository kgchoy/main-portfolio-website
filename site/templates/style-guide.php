<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Portfolio Style Guide</title>


    <?php echo css('assets/css/main.css') ?>

    <?php echo css('assets/css/grid.css') ?>

    <!-- style guide-specific CSS -->
    <?php echo css('assets/css/style-guide.css') ?>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon.png') ?>">


    <?php echo css('http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,700italic,600italic,400italic') ?>

</head>

<body id="style-guide-body">

    <h1 id="style-guide-header">Portfolio Style Guide</h1>

    <nav>

      <p>
          Go to: <br>
          <a href="#interactive_elements" class="button-nav">Interactive Elements</a>
          <a href="#text_elements" class="button-nav">Text Elements</a>
          <a href="#combined_elements" class="button-nav">Combined Elements</a>
          <a href="#color-scheme" class="button-nav">Color Scheme</a>
      </p>

    </nav>



    <!-- INTERACTIVE ELEMENTS SECTION // -->
    <section id="interactive_elements">

        <!-- Default Button styling section -->
        <section>

            <h2 class="style-guide-h2">Partial-Width Navigation Button</h2>

            <p>This type of button is as wide as the amount of text inside of it.</p>

            <h3>CSS selectors:</h3>
            <p>.button-nav, .partial-width-button (both are required)</p>

            <h3>Sample code:</h3>
            <pre><code> <!-- code inside the pre tag must be formatted like this to display c -->
&lt;a class="button-nav partial-width-button" href="#"&gt;Partial-Width Button&lt;/a&gt;
            </code></pre>

            <h3>Rendered element for button-nav:</h3>

            <a class="button-nav partial-width-button" href="#">Partial-Width Button</a>

        </section>

        <section>

            <h2 class="style-guide-h2">Full-Width Navigation Button</h2>

            <p>This type of button is as wide as its parent container.</p>

            <h3>CSS selectors:</h3>
            <p>.button-nav, .full-width-button (both are required)</p>

            <h3>Sample code:</h3>
            <pre><code> <!-- code inside the pre tag must be formatted like this to display c -->
&lt;a class="button-nav full-width-button" href="#"&gt;Full-Width Button&lt;/a&gt;
            </code></pre>

            <h3>Rendered element for button-nav:</h3>

            <a class="button-nav full-width-button" href="#">Full-Width Button</a>

        </section>

        <section>
            <h2 class="style-guide-h2">In-text Link</h2>

            <h3>CSS selectors</h3>

            <p>p a</p>

            <h3>Sample Code</h3>

            <pre><code>
&lt;p&gt;This is a link to &lt;a href="#"&gt;somewhere else on the page&lt;/a&gt; so you should click it.&lt;/p&gt;
            </code></pre>

            <h3>Rendered Element</h3>

            <p>This is a link to <a href="#">somewhere else on the page</a> so you should click it.</p>

        </section>

        <section>
            <h2 class="style-guide-h2">Text Input Field</h2>

            <p>Forms aren't used on the current version of the website, but a layout like this may be used in the future.</p>
            
            <h3>CSS selector:</h3>
            <p>
                .form-field (for input field)<br>
                .form-label (for label)
            </p>
            
            <h3>Sample code:</h3>
            <pre><code>
&lt;form action="reciept.html" method="post" id="contact-form"&gt;
    &lt;div class="grid"&gt;
        &lt;div class="body-gridCol-1of2"&gt;
            &lt;label for="first-name" class="form-label"&gt;First Name:&lt;/label&gt;
            &lt;input class="form-field" type="text" id="first-name" name="first-name"&gt;
        &lt;/div&gt;
        &lt;div class="body-gridCol-2of2"&gt;
            &lt;label for="last-name" class="form-label"&gt;Last Name:&lt;/label&gt;
            &lt;input class="form-field" type="text" id="last-name" name="last-name"&gt;
        &lt;/div&gt;
        &lt;label for="email" class="form-label"&gt;Credit Card Number:&lt;/label&gt;
        &lt;input class="form-field" type="text" id="email" name="email"&gt;
    &lt;/div&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
            </code></pre>
            
            <h3>Rendered Element:</h3>
            <form action="reciept.html" method="post" id="contact-form">
                <div class="grid">
                    <div class="body-gridCol-1of2">
                        <label for="first-name" class="form-label">First Name:</label>
                        <input class="form-field" type="text" id="first-name" name="first-name">
                    </div>
                    <div class="body-gridCol-2of2">
                        <label for="last-name" class="form-label">Last Name:</label>
                        <input class="form-field" type="text" id="last-name" name="last-name">
                    </div>
                    <label for="email" class="form-label">Email:</label>
                    <input class="form-field" type="text" id="email" name="email">
                </div>

                <input type="submit" value="Submit">
            </form>

        </section>

        <h3>Additional Info:</h3>
        <p>
            The field width is set to 100% of whatever container it is in. Grids can be used to adjust the width.
        </p>

    </section>
    <!-- // INTERACTIVE ELEMENTS SECTION -->



    <!-- TEXT ELEMENTS SECTION // -->
    <section id="text_elements">

        <section>
            <h2 class="style-guide-h2">Headings</h2>

            <h3>CSS selectors</h3>
            <p>
                h1<br>
                h2<br>
                h3<br>
                h4<br>
            </p>

            <h3>Sample code for H1:</h3>
            <pre><code>
&lt;h1&gt;This is an H1 header&lt;/h1&gt;
            </code></pre>

            <h3>Rendered Element:</h3>
            <h1>This is an H1 header</h1>

            <h3>Sample code for H2:</h3>
            <pre><code>
&lt;h2&gt;This is an H2 header&lt;/h2&gt;
            </code></pre>

            <h3>Rendered Element:</h3>
            <h2>This is an H2 header</h2>


            <h3>Sample code for H3:</h3>
            <pre><code>
&lt;h3&gt;This is an H3 header&lt;/h3&gt;
            </code></pre>

            <h3>Rendered Element:</h3>
            <h3>This is an H3 header</h3>

            <h3>Sample code for H4:</h3>
            <pre><code>
&lt;h3&gt;This is an H4 header&lt;/h3&gt;
            </code></pre>

            <h3>Rendered Element:</h3>
            <h4>This is an H4 header</h4>

        </section>

        <section>
            <h2 class="style-guide-h2">Paragraphs</h2>

            <h3>CSS selectors</h3>

            <p>p</p>

            <h3>Sample Code</h3>

            <pre><code>
&lt;p&gt;Est erant eligendi tacimates no, cu quo tollit postulant. At fastidii scaevola cum, at hinc docendi splendide sea. Vix an hendrerit referren tur, graeci posidonium percipitur usu te. Ex natum harum saperet vel, ne duo omnis possit aliquando. Usu ne audiam oblique, ne exerci graece disputationi per, omnis essent ne eum. Eos ne fugit omnium graecis, vix no nulla comprehensam. No sit hendrerit assueverit, id nec eleifend tincidunt voluptatibus. Et rebum placerat pri, nam ne liberavisse conclusion emque. At has alii partem ornatus. Cu melius deseruisse pro.&lt;/p&gt;
            </code></pre>

            <h3>Rendered Element:</h3>

            <p>Est erant eligendi tacimates no, cu quo tollit postulant. At fastidii scaevola cum, at hinc docendi splendide sea. Vix an hendrerit referren tur, graeci posidonium percipitur usu te. Ex natum harum saperet vel, ne duo omnis possit aliquando. Usu ne audiam oblique, ne exerci graece disputationi per, omnis essent ne eum. Eos ne fugit omnium graecis, vix no nulla comprehensam. No sit hendrerit assueverit, id nec eleifend tincidunt voluptatibus. Et rebum placerat pri, nam ne liberavisse conclusion emque. At has alii partem ornatus. Cu melius deseruisse pro.</p>

        </section>

        <section>
            <h2 class="style-guide-h2">Bulleted Lists</h2>
            
            <h3>CSS selectors</h3>
            
            <p>ul</p>
            <p>ul li</p>
            
            <h3>Sample Code</h3>
            
            <pre><code>
&lt;ul&gt;
    &lt;li&gt;ele1&lt;/li&gt;
    &lt;li&gt;ele2&lt;/li&gt;
    &lt;li&gt;ele3&lt;/li&gt;
    &lt;li&gt;ele4&lt;/li&gt;
&lt;/ul&gt;
            </code></pre>
            
            <h3>Rendered Element:</h3>
            
            <ul>
                <li>ele1</li>
                <li>ele2</li>
                <li>ele3</li>
                <li>ele4</li>
            </ul>
            
        </section>

        <section>
            <h2 class="style-guide-h2">Numbered Lists</h2>
            
            <h3>CSS selectors</h3>
            
            <p>ol</p>
            <p>ol li</p>
            
            <h3>Sample Code</h3>
            
            <pre><code>
&lt;ol&gt;
    &lt;li&gt;ele1&lt;/li&gt;
    &lt;li&gt;ele2&lt;/li&gt;
    &lt;li&gt;ele3&lt;/li&gt;
    &lt;li&gt;ele4&lt;/li&gt;
&nbsp;&lt;/ol&gt;
            </code></pre>
            
            <h3>Rendered Element:</h3>
            
            <ol>
                <li>ele1</li>
                <li>ele2</li>
                <li>ele3</li>
                <li>ele4</li>
            </ol>
            
        </section>

    </section>
    <!-- // TEXT ELEMENTS SECTION -->

    <!-- COMBINED ELEMENTS SECTION // -->
    <section id="combined_elements">

        <section>
            <h2 class="style-guide-h2">Main Header Navigation</h2>

            <p>
                The navigation bar on the actual site has its position set as fixed, so it will always be at the top of the browser window / screen. For readability, the style guide example below has its CSS overridden to position: static instead of position: fixed. In addition, the grid breakpoints that enable this nav bar to be responsive on the actual site causes it to behave slightly differently on this style guide's stylesheet.
            </p>

            <h3>CSS selectors</h3>
            <p>header</p>

            <h3>Sample Code:</h3>
          
            <pre><code>
&lt;header&gt;
    &lt;nav id="nav-header"&gt; &lt;!-- banner --&gt;
        &lt;div id="centered-nav-container"&gt;
            &lt;div id="nav-bar-main"&gt;
                &lt;div id="nav-bar-left"&gt;
                    &lt;div id="nav-bar-logo"&gt;
                        &lt;a class="logo" href="&lt;?php echo page('home') ?&gt;"&gt;
                            &lt;img src="&lt;?php echo url('assets/images/logo.png') ?&gt;" alt="Site logo" width="49" height="49"&gt;
                        &lt;/a&gt;

                    &lt;/div&gt;
                    &lt;div id="site-name"&gt;&lt;a href="&lt;?php echo page('home') ?&gt;"&gt;evin Choy&lt;/a&gt;&lt;/div&gt;
                &lt;/div&gt; &lt;!-- ./nav-bar-left --&gt;
                &lt;div id="nav-bar-right"&gt;
                    &lt;ul class="menu-items-list"&gt;
                        &lt;li&gt;&lt;a class="button-nav button-header-nav" href="&lt;?php echo page('about') ?&gt;"&gt;About&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="button-nav button-header-nav" href="&lt;?php echo page('home') . '#featured-work' ?&gt;"&gt;Work&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="button-nav button-header-nav" href="&lt;?php echo page('home') . '#contact-me' ?&gt;"&gt;Contact&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;

                &lt;/div&gt; &lt;!-- ./nav-bar-right --&gt;
            &lt;/div&gt; &lt;!-- ./nav-bar-main --&gt;
        &lt;/div&gt; &lt;!-- ./centered-nav-container --&gt;
    &lt;/nav&gt; &lt;!-- ./banner --&gt;
&lt;/header&gt;
            </code></pre>
            
            <h3>Rendered Element</h3>
            
            <header>
                <nav id="nav-header"> <!-- banner -->
                    <div id="centered-nav-container">
                        <div id="nav-bar-main">
                            <div id="nav-bar-left">
                                <div id="nav-bar-logo">
                                    <a class="logo" href="<?php echo page('home') ?>">
                                        <img src="<?php echo url('assets/images/logo.png') ?>" alt="Site logo" width="49" height="49">
                                    </a>

                                </div>
                                <div id="site-name"><a href="<?php echo page('home') ?>">evin Choy</a></div>
                            </div> <!-- ./nav-bar-left -->
                            <div id="nav-bar-right">
                                <ul class="menu-items-list">
                                    <li><a class="button-nav button-header-nav" href="<?php echo page('about') ?>">About</a></li>
                                    <li><a class="button-nav button-header-nav" href="<?php echo page('home') . '#featured-work' ?>">Work</a></li>
                                    <li><a class="button-nav button-header-nav" href="<?php echo page('home') . '#contact-me' ?>">Contact</a></li>
                                </ul>

                            </div> <!-- ./nav-bar-right -->
                        </div> <!-- ./nav-bar-main -->
                    </div> <!-- ./centered-nav-container -->
                </nav> <!-- ./banner -->
            </header>

        </section>


        <section>
            <h2 class="style-guide-h2">Footer Navigation</h2>

            <h3>CSS selectors:</h3>
            <p>footer</p>

            <p>
                The footer contains links to my social media accounts, as well as to my resume and this style guide.
            </p>

            <h3>Sample code:</h3>
            <pre><code>
&lt;footer&gt;
    &lt;div id="footer-container"&gt;
        &lt;div id="footer-bar-main"&gt;
            &lt;div id="footer-bar-left"&gt;
                &lt;ul class="menu-items-list" id="left-footer-links"&gt;
                    &lt;li&gt;
                        &lt;a class="button-nav button-footer-nav" href="mailto:kgchoy@sfu.ca"&gt;&lt;img class="footer-icon" src="&lt;?php echo url('assets/images/icon-email.png') ?&gt;" alt="Email icon" width="32" height="18" aria-hidden="true"&gt;Email&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                        &lt;a class="button-nav button-footer-nav" href="http://ca.linkedin.com/pub/kevin-choy/93/a52/784/"&gt;&lt;img class="footer-icon" src="&lt;?php echo url('assets/images/icon-linkedin.png') ?&gt;" alt="Email icon" width="27" height="18" aria-hidden="true"&gt;LinkedIn&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                        &lt;a class="button-nav button-footer-nav" href="https://github.com/kgchoy"&gt;&lt;img class="footer-icon" src="&lt;?php echo url('assets/images/icon-github.png') ?&gt;" alt="GitHub icon" width="25" height="18" aria-hidden="true"&gt;GitHub&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;

                &lt;ul class="menu-items-list" id="right-footer-links"&gt;
                    &lt;li&gt;
                        &lt;a class="button-nav button-footer-nav" href="assets/doc/resume.pdf"&gt;&lt;img class="footer-icon" src="&lt;?php echo url('assets/images/icon-resume.png') ?&gt;" alt="Resume icon" width="25" height="18" aria-hidden="true"&gt;Resume&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;li&gt;
                        &lt;a class="button-nav button-footer-nav" href="&lt;?php echo page('style-guide') ?&gt;"&gt;&lt;img class="footer-icon" src="&lt;?php echo url('assets/images/icon-style-guide.png') ?&gt;" alt="Style guide icon" width="25" height="18" aria-hidden="true"&gt;Style Guide&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt; &lt;!-- ./footer-bar-left --&gt;
            &lt;div id="footer-bar-right"&gt;
                &lt;?php echo $site-&gt;copyright()-&gt;kirbytext() ?&gt; &lt;!-- copyright text --&gt;
            &lt;/div&gt; &lt;!-- ./footer-bar-right --&gt;
        &lt;/div&gt; &lt;!-- ./footer-bar-main --&gt;
    &lt;/div&gt; &lt;!-- ./footer-container --&gt;
&lt;/footer&gt;
            </code></pre>

            <h3>Rendered element:</h3>

                    <footer>
                        <div id="footer-container">
                            <div id="footer-bar-main">
                                <div id="footer-bar-left">
                                    <ul class="menu-items-list" id="left-footer-links">
                                        <li>
                                            <a class="button-nav button-footer-nav" href="mailto:kgchoy@sfu.ca"><img class="footer-icon" src="<?php echo url('assets/images/icon-email.png') ?>" alt="Email icon" width="32" height="18" aria-hidden="true">Email</a>
                                        </li>
                                        <li>
                                            <a class="button-nav button-footer-nav" href="http://ca.linkedin.com/pub/kevin-choy/93/a52/784/"><img class="footer-icon" src="<?php echo url('assets/images/icon-linkedin.png') ?>" alt="Email icon" width="27" height="18" aria-hidden="true">LinkedIn</a>
                                        </li>
                                        <li>
                                            <a class="button-nav button-footer-nav" href="https://github.com/kgchoy"><img class="footer-icon" src="<?php echo url('assets/images/icon-github.png') ?>" alt="GitHub icon" width="25" height="18" aria-hidden="true">GitHub</a>
                                        </li>
                                    </ul>

                                    <ul class="menu-items-list" id="right-footer-links">
                                        <li>
                                            <a class="button-nav button-footer-nav" href="assets/doc/resume.pdf"><img class="footer-icon" src="<?php echo url('assets/images/icon-resume.png') ?>" alt="Resume icon" width="25" height="18" aria-hidden="true">Resume</a>
                                        </li>

                                        <li>
                                            <a class="button-nav button-footer-nav" href="<?php echo page('style-guide') ?>"><img class="footer-icon" src="<?php echo url('assets/images/icon-style-guide.png') ?>" alt="Style guide icon" width="25" height="18" aria-hidden="true">Style Guide</a>
                                        </li>
                                    </ul>
                                </div> <!-- ./footer-bar-left -->
                                <div id="footer-bar-right">
                                    <?php echo $site->copyright()->kirbytext() ?> <!-- copyright text -->
                                </div> <!-- ./footer-bar-right -->
                            </div> <!-- ./footer-bar-main -->
                        </div> <!-- ./footer-container -->
                    </footer>

        </section>

        <section>
            <h2 class="style-guide-h2">Work Gallery Listings</h2>

            <h3>CSS Selectors:</h3>
            <p>.main-page-work-grid</p>

            <p>Displays work in a three-column grid. I currently only display two projects, but it still allows for whitespace on the rightmost column in that case. It is meant to fill the width of the container it is in; in this style guide, that is the viewport size, which is wider than on the actual portfolio main page.</p>

            <h3>Sample Code:</h3>
            <pre><code>
&lt;div class="grid"&gt;
    &lt;div class="main-page-work-grid"&gt;
        &lt;div class="col-1of3-work-main"&gt;
            
            &lt;div class="col-1of3-work-figure"&gt;
                &lt;div class="main-work-listing-figure"&gt;
                    &lt;figure&gt;
                        &lt;a href="&lt;?php echo page('bccampus') ?&gt;"&gt;&lt;img src="content/home/bcc-website-screenshot-cropped.jpg" alt="BCcampus website screenshot"&gt;&lt;/a&gt;
                    &lt;/figure&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            
            &lt;div class="col-2of3-work-description"&gt;
                &lt;div class="work-description"&gt;
                    &lt;h3&gt;&lt;a href="&lt;?php echo page('bccampus') ?&gt;"&gt;BCcampus.ca Usability Testing&lt;/a&gt;&lt;/h3&gt;
                    &lt;em&gt;UX research &#149; usability testing&lt;/em&gt;
                    &lt;p&gt;
                        I created and facilitated a usability test for the BCcampus.ca website to find out whether the audience could perform typical tasks on the website easily, and to discover usability problems.
                    &lt;/p&gt;
                &lt;/div&gt; &lt;!-- ./work-description --&gt;
            &lt;/div&gt; &lt;!-- ./col-2of3-work-description --&gt;
        &lt;/div&gt; &lt;!-- ./col-1of3-work-main --&gt;
    &lt;/div&gt;

    &lt;div class="main-page-work-grid"&gt;
        &lt;div class="col-1of3-work-main"&gt;
            
            &lt;div class="col-1of3-work-figure"&gt;
                &lt;div class="main-work-listing-figure"&gt;
                    &lt;figure class="notif-image"&gt;
                        &lt;a href="&lt;?php echo page('notif') ?&gt;"&gt;&lt;img src="content/home/notif-thumb.png" alt="Notif use case screenshot"&gt;&lt;/a&gt;
                    &lt;/figure&gt;
                &lt;/div&gt; &lt;!-- ./main-work-listing-figure --&gt;
            &lt;/div&gt; &lt;!-- ./col-1of3-work-figure --&gt;

            &lt;div class="col-2of3-work-description"&gt;
                &lt;div class="work-description"&gt;
                    &lt;h3&gt;&lt;a href="&lt;?php echo page('notif') ?&gt;"&gt;Notif Concept Mapping Tool&lt;/a&gt;&lt;/h3&gt;
                    &lt;em&gt;UX research &amp; development &#149; usability testing &#149; programming&lt;/em&gt;
                    &lt;p&gt;
                        Prototyping a concept mapping tool targeted towards the academic teaching and learning domain. The design and functionality of our tool was heavily use-case and scenario-driven.
                    &lt;/p&gt;

                &lt;/div&gt; &lt;!-- ./work-description --&gt;
            &lt;/div&gt; &lt;!-- ./col-2of3-work-description --&gt;

        &lt;/div&gt; &lt;!-- ./col-1of3-work-main --&gt;
    &lt;/div&gt; &lt;!-- ./main-page-work-grid --&gt;

&lt;/div&gt; &lt;!-- ./grid (3-column) --&gt;

            </code></pre>


            <h3>Rendered Code:</h3>

            <div class="grid">
                <div class="main-page-work-grid">
                    <div class="col-1of3-work-main">
                        
                        <div class="col-1of3-work-figure">
                            <div class="main-work-listing-figure">
                                <figure>
                                    <a href="<?php echo page('bccampus') ?>"><img src="content/home/bcc-website-screenshot-cropped.jpg" alt="BCcampus website screenshot"></a>
                                </figure>
                            </div>
                        </div>
                        
                        <div class="col-2of3-work-description">
                            <div class="work-description">
                                <h3><a href="<?php echo page('bccampus') ?>">BCcampus.ca Usability Testing</a></h3>
                                <em>UX research &#149; usability testing</em>
                                <p>
                                    I created and facilitated a usability test for the BCcampus.ca website to find out whether the audience could perform typical tasks on the website easily, and to discover usability problems.
                                </p>
                            </div> <!-- ./work-description -->
                        </div> <!-- ./col-2of3-work-description -->
                    </div> <!-- ./col-1of3-work-main -->
                </div>

                <div class="main-page-work-grid">
                    <div class="col-1of3-work-main">
                        
                        <div class="col-1of3-work-figure">
                            <div class="main-work-listing-figure">
                                <figure class="notif-image">
                                    <a href="<?php echo page('notif') ?>"><img src="content/home/notif-thumb.png" alt="Notif use case screenshot"></a>
                                </figure>
                            </div> <!-- ./main-work-listing-figure -->
                        </div> <!-- ./col-1of3-work-figure -->

                        <div class="col-2of3-work-description">
                            <div class="work-description">
                                <h3><a href="<?php echo page('notif') ?>">Notif Concept Mapping Tool</a></h3>
                                <em>UX research &amp; development &#149; usability testing &#149; programming</em>
                                <p>
                                    Prototyping a concept mapping tool targeted towards the academic teaching and learning domain. The design and functionality of our tool was heavily use-case and scenario-driven.
                                </p>

                            </div> <!-- ./work-description -->
                        </div> <!-- ./col-2of3-work-description -->

                    </div> <!-- ./col-1of3-work-main -->
                </div> <!-- ./main-page-work-grid -->

            </div> <!-- ./grid (3-column) -->

        </section>

        <section>
            <h2>Work Page Navigation</h2>
            <p>A two-column grid of buttons, used at the end of work pages for navigation.</p>

            <h3>CSS Selectors:</h3>
            <p>.grid, .work-page-bottom-buttons (both are required)</p>

            <h3>Sample Code:</h3>
            <pre><code>
&lt;div class="grid work-page-bottom-buttons"&gt;
    &lt;div class="body-gridCol-1of2"&gt;
        &lt;a class="button-nav full-width-button center-aligned-text" href="&lt;?php echo page('home') . '#featured-work' ?&gt;"&gt;Return to Work Gallery&lt;/a&gt;
    &lt;/div&gt;

    &lt;div class="body-gridCol-2of2"&gt;
        &lt;a class="button-nav full-width-button center-aligned-text" href="&lt;?php echo page('notif') ?&gt;"&gt;Next Work: Notif&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt; &lt;!-- ./work-page-bottom-buttons --&gt;
            </code></pre>


            <h3>Rendered Code:</h3>
            <div class="grid work-page-bottom-buttons">
                <div class="body-gridCol-1of2">
                    <a class="button-nav full-width-button center-aligned-text" href="<?php echo page('home') . '#featured-work' ?>">Return to Work Gallery</a>
                </div>

                <div class="body-gridCol-2of2">
                    <a class="button-nav full-width-button center-aligned-text" href="<?php echo page('notif') ?>">Next Work: Notif</a>
                </div>
            </div> <!-- ./work-page-bottom-buttons -->

        </section>


    </section>
    <!-- // COMBINED ELEMENTS SECTION -->

    <section id="color-scheme">
        <h2 class="style-guide-h2">Main Color Scheme</h2>

        <h3>Light Blue</h3>

        <p>
            rgb(0, 155, 223)<br>
            This is the predominant color used throughout the website to create a consistent personal branding scheme.
        </p>

        <h4>Rendered Color:</h4>
        <div class="light-blue color-block"></div>

        <h3>Dark Blue</h3>

        <p>
            rgb(0, 93, 170)<br>
            Used as a secondary color tone. For example, it is used in the logo and when buttons are hovered over.
        </p>

        <h4>Rendered Color:</h4>
        <div class="dark-blue color-block"></div>

        <h3>Red</h3>

        <p>
            rgb(255, 0, 0)
            Used as a text hyperlink hover color. 
        </p>

        <h4>Rendered Color:</h4>
        <div class="red color-block"></div>


    </section>

</body>
</html>
