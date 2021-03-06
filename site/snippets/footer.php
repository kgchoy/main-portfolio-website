    <footer>
        <div id="footer-container">

            <div id="footer-bar-main">

                <div id="footer-bar-left">
                    <ul class="menu-items-list" id="left-footer-links">
                        <li>
                            <a class="button-nav button-footer-nav" href="mailto:hello@kevinchoy.ca"><img class="footer-icon" src="<?php echo url('assets/images/icon-email.png') ?>" alt="Email icon" width="32" height="18" aria-hidden="true">Email</a>
                        </li>
                        <li>
                            <a class="button-nav button-footer-nav" href="https://ca.linkedin.com/in/kgchoy"><img class="footer-icon" src="<?php echo url('assets/images/icon-linkedin.png') ?>" alt="Email icon" width="27" height="18" aria-hidden="true">LinkedIn</a>
                        </li>

                    </ul>

                    <ul class="menu-items-list" id="right-footer-links">
                        <li>
                            <a class="button-nav button-footer-nav" href="https://github.com/kgchoy"><img class="footer-icon" src="<?php echo url('assets/images/icon-github.png') ?>" alt="GitHub icon" width="25" height="18" aria-hidden="true">GitHub</a>
                        </li>
                    </ul>
                    

                </div> <!-- ./footer-bar-left -->

                <div id="footer-bar-right">
                    <?php echo $site->copyright()->kirbytext() ?>

                </div> <!-- ./footer-bar-right -->

            </div> <!-- ./footer-bar-main -->

        </div> <!-- ./footer-container -->
    </footer>

    <!-- Piwik -->
    <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//piwik.kevinchoy.ca/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 2]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//piwik.kevinchoy.ca/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik code -->

</body>
</html>