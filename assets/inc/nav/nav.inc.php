	<header>
		<h1><a <?php echo 'href="' . $ROOT . '"' ?>><img <?php echo 'src="' . $ROOT . 'assets/img/logo_pm.png"' ?> alt="Pencil Media : Design and Web Development"></a></h1>
        <nav>
            <ul>
                <li<?php if ($thisPage=="work") echo " id=\"selected\""; ?>><a <?php echo 'href="' . $ROOT . 'work/"' ?> id="nav_work">Work</a></li>
                <li<?php if ($thisPage=="about") echo " id=\"selected\""; ?>><a <?php echo 'href="' . $ROOT . 'about/"' ?> id="nav_about">About</a></li>
                <li<?php if ($thisPage=="contact") echo " id=\"selected\""; ?>><a <?php echo 'href="' . $ROOT . 'contact/"' ?> id="nav_contact">Contact</a></li>
            </ul>
        </nav>
	</header>
