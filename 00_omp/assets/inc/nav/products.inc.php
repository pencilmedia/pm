		<nav class="subnav">
            <ul>
                <li <?php if ($subPage=="web") echo " id=\"selected\""; ?> ><a href="index.php" id="nav_web"><?php echo webWork ?></a></li>
                <li <?php if ($subPage=="icons") echo " id=\"selected\""; ?> ><a href="icons.php" id="nav_ico"><?php echo icoWork ?></a></li>
                <li <?php if ($subPage=="mobile") echo " id=\"selected\""; ?> ><a href="mobile.php" id="nav_mobi"><?php echo mobiWork ?></a></li>
                <li <?php if ($subPage=="logos") echo " id=\"selected\""; ?> ><a href="logos.php" id="nav_mobi"><?php echo logoWork ?></a></li>
            </ul>
        </nav>