<header class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <h1><a <?php echo 'href="' . $ROOT . '"' ?>><img <?php echo 'src="' . $ROOT . 'assets/img/logo_omp.png"' ?> alt="Pencil Media : Design and Web Development"></a></h1>
      <nav class="pull-right">
        <ul>
            <li<?php if ($thisPage=="work") echo " id=\"selected\""; ?>><a <?php echo 'href="' . $ROOT . 'work/"' ?> id="nav_work"><?php echo menu ?></a></li>
            <li<?php if ($thisPage=="about") echo " id=\"selected\""; ?>><a <?php echo 'href="' . $ROOT . 'about/"' ?> id="nav_about"><?php echo about ?></a></li>
            <li<?php if ($thisPage=="contact") echo " id=\"selected\""; ?>><a <?php echo 'href="' . $ROOT . 'contact/"' ?> id="nav_contact"><?php echo contact ?></a></li>
        </ul>
      </nav><!--/.nav-collapse -->
    </div>
  </div>
</header>