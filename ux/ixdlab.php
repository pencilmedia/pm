<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="uxd";
    $subName="uxIXD";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo uxTitle ?></title>
    <?php include("../assets/inc/head.inc.php"); ?></head>
<body id="labs">
    <?php include("../assets/inc/nav/nav.inc.php"); ?>
    <?php include("../assets/inc/socialbar.inc.php"); ?>
    <section class="content">
        <h2>
            <?php echo uxHead ?></h2>
        <?php include("../assets/inc/nav/ux.inc.php"); ?>
        <div class="colonnade">
            <article class="lt_column">
                <div class="slate">

                    <h3>
                        <?php echo ixdName ?></h3>
                    <p>HTML5 exploration and useful development resources.</p>

                    <h4>Developing Personas</h4>
                    <p>
                        A persona is a fictional person who represents a major user group for your site.
                    </p>
                    <p>
                        Personas help you identify major user groups of your Web site. You select the characteristics that are most representative of those groups and turn them into a persona.
                    </p>
                    <p>
                        Reference:
                        <a href="http://usability.gov/methods/analyze_current/personas.html">Developing Personas</a>
                    </p>
                    <hr />

                    <h4>The 6 Principles of Persuasion</h4>
                    <p>
                        Summary of the principles of persuasion, as established by
                        <cite>Dr. Robert Cialdini, leading expert on persuasive techniques</cite>
                        .
                    </p>
                    <p>
                        Reference:
                        <a href="http://ebizine.com/marketing/dr-robert-cialdini-and-6-principles-of-persuasion/">6 Principles of Persuasion</a>
                    </p>
                    <hr />

                    <h4>Usability 101</h4>
                    <p>Basic usability facts.</p>
                    <p>
                        Reference:
                        <a href="http://www.useit.com/alertbox/20030825.html">Intro to Usability</a>
                    </p>

                </div>
            </article>
            <aside class="rt_column">
                <?php include("uxsubnav.inc.php"); ?>
            </aside>
        </div>
    </section>
    <?php include("../assets/inc/foot.inc.php"); ?></body>
</html>