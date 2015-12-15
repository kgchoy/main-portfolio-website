    <footer>
        <div id="footer-container">

            <div id="footer-bar-main">

                <div id="footer-bar-left">
                    <ul class="menu-items-list" id="left-footer-links">
                        <li>
                            <a class="button-nav button-footer-nav" href="mailto:kevinc.2052@gmail.com"><img class="footer-icon" src="<?php echo url('assets/images/icon-email.png') ?>" alt="Email icon" width="32" height="18" aria-hidden="true">Email</a>
                        </li>
                        <li>
                            <a class="button-nav button-footer-nav" href="http://ca.linkedin.com/pub/kevin-choy/93/a52/784/"><img class="footer-icon" src="<?php echo url('assets/images/icon-linkedin.png') ?>" alt="Email icon" width="27" height="18" aria-hidden="true">LinkedIn</a>
                        </li>

                    </ul>

                    <ul class="menu-items-list" id="right-footer-links">
                        <li>
                            <a class="button-nav button-footer-nav" href="https://github.com/kgchoy"><img class="footer-icon" src="<?php echo url('assets/images/icon-github.png') ?>" alt="GitHub icon" width="25" height="18" aria-hidden="true">GitHub</a>
                        </li>
                        <li>
                            <a class="button-nav button-footer-nav" href="assets/doc/resume.pdf"><img class="footer-icon" src="<?php echo url('assets/images/icon-resume.png') ?>" alt="Resume icon" width="25" height="18" aria-hidden="true">Resume</a>
                        </li>
                    </ul>
                    

                </div> <!-- ./footer-bar-left -->

                <div id="footer-bar-right">
                    <?php echo $site->copyright()->kirbytext() ?>

                </div> <!-- ./footer-bar-right -->

            </div> <!-- ./footer-bar-main -->

        </div> <!-- ./footer-container -->
    </footer>


</body>
</html>