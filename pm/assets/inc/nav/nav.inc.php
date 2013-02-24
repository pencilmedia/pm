	<header>
		<h1><a href="http://www.pencilmedia.com"><img src="<?php echo path ?>/global/img/logo_pm.png" alt="Pencil Media : Design and Web Development"></a></h1>
		<nav>
            <ul>
                <li<?php if ($thisPage=="work") echo " id=\"selected\""; ?>><a href="<?php echo pathToWork ?>" id="nav_work">Work</a></li>
                <li<?php if ($thisPage=="about") echo " id=\"selected\""; ?>><a href="<?php echo pathToAbout ?>" id="nav_about">About</a></li>
                <li<?php if ($thisPage=="contact") echo " id=\"selected\""; ?>><a href="<?php echo pathToContact ?>" id="nav_contact">Contact</a></li>
            </ul>
        </nav>
	</header>
