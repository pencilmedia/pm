<footer>
    <div id="styleSwitcher">
        <div class="colorBox beige" title="">&nbsp;</div>
        <div class="colorBox silver" title="silver">&nbsp;</div>
        <div class="colorBox orange" title="orange">&nbsp;</div>
        <div class="colorBox lavendar" title="lavendar">&nbsp;</div>
        <div class="colorBox yellow" title="yellow">&nbsp;</div>
        <div class="colorBox blue" title="blue">&nbsp;</div>
        <div class="colorBox pink" title="pink">&nbsp;</div>
        <div class="colorBox red" title="red">&nbsp;</div>
        <div class="colorBox brightgreen" title="brightgreen">&nbsp;</div>
        <div class="colorBox green" title="green">&nbsp;</div>
        <span id="clearTheme"><span>Clear</span></span>
    </div>
    <ul>
        <li><?php echo copyright ?> </li>
        <li><a <?php echo 'href="' . $ROOT . 'ux/"' ?>><?php echo uxHead ?></a></li>
    </ul>
    <div id="footbar">&nbsp;</div>
</footer>

<!-- CDN Scripts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="extras/h5bp/js/libs/jquery-1.7.1.min.js"><\/script>')</script><code></code>
<script src="http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js"></script>


<?php
    // Bootstrap Component Scripts
    echo '<script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-alert.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-button.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'bootstrap/js/bootstrap-typeahead.js"></script>';
    // Custom Scripts
    echo '<script type="text/javascript" src="' . $ROOT . 'assets/js/theme.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'assets/js/global.js"></script>
    <script type="text/javascript" src="' . $ROOT . 'assets/js/fx.js"></script>'; 
?>

<script type="text/javascript">
    $(document).ready(function () {

    });
</script>


<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15047911-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
