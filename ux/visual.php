<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="uxd";
    $subName="uxVisual";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo uxTitle ?></title>
    <?php include("../assets/inc/head.inc.php"); ?>
    <style></style>
    <script></script>
</head>
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
                        <?php echo visualName ?></h3>
                    <p>
                        Here's a table showing you pixel sized fonts versus em-sized fonts.
                    </p>
                    <style>
                table {
                    margin-bottom: 5em;
                    width: 100%;
                }
                table th, table td {
                    padding: 5px;
                    font-size: 86%;
                }
            </style>
                    <h4>Google Web Fonts</h4>
                    <a href="http://www.google.com/webfonts" target="_blank">Google Web Fonts</a>
                    lets you browse all the fonts available via the Google Web Fonts API. All fonts in the directory are available for use on your website under an open source license and are served by Google servers.
                    <hr />
                    <h4>Font Size Comparisons</h4>
                    <h5>Pixel vs. Em-Sized Fonts</h5>
                    <table>
                        <tbody>
                            <tr>
                                <th>Font Sizes</th>
                                <th>Pixels</th>
                                <th>Em's</th>
                            </tr>
                            <tr>
                                <th>10px vs. 0.8em</th>
                                <td>
                                    <span style="font-size: 10px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 0.8em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>11px vs. 0.9em</th>
                                <td>
                                    <span style="font-size: 11px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 0.9em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>12px vs. 1em</th>
                                <td>
                                    <span style="font-size: 12px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>13px vs. 1.1em</th>
                                <td>
                                    <span style="font-size: 13px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.1em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>14px vs. 1.2em</th>
                                <td>
                                    <span style="font-size: 14px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.2em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>15px vs. 1.3em</th>
                                <td>
                                    <span style="font-size: 15px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.3em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>16px vs. 1.4em</th>
                                <td>
                                    <span style="font-size: 16px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.4em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>17px vs. 1.5em</th>
                                <td>
                                    <span style="font-size: 17px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.5em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>18px vs. 1.6em</th>
                                <td>
                                    <span style="font-size: 18px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.6em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>19px vs. 1.7em</th>
                                <td>
                                    <span style="font-size: 19px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.7em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>20px vs. 1.8em</th>
                                <td>
                                    <span style="font-size: 20px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.8em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>21px vs. 1.9em</th>
                                <td>
                                    <span style="font-size: 21px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 1.9em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>22px vs. 2em</th>
                                <td>
                                    <span style="font-size: 22px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>23px vs. 2.1em</th>
                                <td>
                                    <span style="font-size: 23px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.1em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>24px vs. 2.2em</th>
                                <td>
                                    <span style="font-size: 24px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.2em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>25px vs. 2.3em</th>
                                <td>
                                    <span style="font-size: 25px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.3em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>26px vs. 2.4em</th>
                                <td>
                                    <span style="font-size: 26px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.4em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>27px vs. 2.5em</th>
                                <td>
                                    <span style="font-size: 27px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.5em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>28px vs. 2.6em</th>
                                <td>
                                    <span style="font-size: 28px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.6em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>29px vs. 2.7em</th>
                                <td>
                                    <span style="font-size: 29px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.7em;">Fun fonts!</span>
                                </td>
                            </tr>
                            <tr>
                                <th>30px vs. 2.8em</th>
                                <td>
                                    <span style="font-size: 30px;">Fun fonts!</span>
                                </td>
                                <td>
                                    <span style="font-size: 2.8em;">Fun fonts!</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
            <aside class="rt_column">
                <?php include("uxsubnav.inc.php"); ?>
            </aside>
        </div>
    </section>
    <?php include("../assets/inc/foot.inc.php"); ?></body>
</html>