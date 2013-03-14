<h3><?php echo labsName ?></h3>
<dl id="menu">
  <dd><a href="index.php" <?php if ($subName=="labsProj") echo " class=\"selected\""; ?> ><?php echo allProjSubNav ?></a></dd>
  <dd><a href="index.php" <?php if ($subName=="") echo " class=\"selected\""; ?> ><?php echo gitSubNav ?></a></dd>
</dl>
