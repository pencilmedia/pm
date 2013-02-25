<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="ixd";
?>
<!DOCTYPE html>
<html>
    <head>
    <title><?php echo uxTitle ?></title>
    <?php include("../assets/inc/head.inc.php"); ?>
    </head>
    <body id="labs">
<?php include("../assets/inc/nav/nav.inc.php"); ?>
<?php include("../assets/inc/socialbar.inc.php"); ?>
<div class="content">
    <h2><?php echo uxHead ?></h2>
    <?php include("../assets/inc/nav/ux.inc.php"); ?>
      <div class="colonnade">
    <div class="lt_column">
   	  <h3>What is <?php echo ixd ?></h3>
      <p><strong>Interaction design</strong> (abbreviated as <strong>IxD</strong>) defines the structure and behavior of interactive systems. Interaction Designers strive to create meaningful relationships between people and the products and services that they use, from computers to mobile devices to appliances and beyond. The practice typically centers on "embedding <a href="http://en.wikipedia.org/wiki/Information_technology">information technology</a> into the ambient social complexities of the physical world." One good process an Interaction Designer may follow is User Centered-Design (UCD).</p>
      <h4>What is User-Centered Design?</h4>
      <p>User Centered-Design (UCD) is a philosophy and a process. It is a philosophy that places the person (as opposed to the 'thing') at the center; it is a process that focuses on cognitive factors (such as perception, memory, learning, problem-solving, etc.) as they come into play during peoples' interactions with things.</p>
      <p>UCD seeks to answer questions about users and their tasks and goals, then use the findings to drive development and design.</p>
      <ul>
        <li>Who are the users of this 'thing'?</li>
        <li>What are the users&rsquo; tasks and goals?</li>
        <li>What are the users&rsquo; experience levels with this thing, and things like it?</li>
        <li>What functions do the users need from this thing?</li>
        <li>What information might the users need, and in what form do they need it?</li>
        <li>How do users think this 'thing' should work?</li>
        <li>How can the design of this &lsquo;thing&rsquo; facilitate users' cognitive processes?</li>
      </ul>
      <p>UCD can improve the usability and usefulness of everything from "<em>everyday things"</em> (D. Norman) to software to information systems to processes. . . anything with which people interact. As such, User-Centered Design concerns itself with both <em>usefulness</em> and <em>usability</em>.</p>
		<h4>Interaction Design Reference</h4>
        <dl class="reference">
        	<dt><a href="http://www.upassoc.org/">Interaction Design Association</a></dt>
            <dd>A global network dedicated to the professional practices of Interaction Design.</dd>
        	<dt><a href="http://www.upassoc.org/">Usability Professional's Association</a></dt>
            <dd>The UPA supports people who research, design, and evaluate the user experience of products and services.</dd>
        </dl>
        
    </div>
    <div class="rt_column">
          <h3>Job Interviewing Tips</h3>
          <dl>
                <dd><a href="http://uxdesign.smashingmagazine.com/2012/02/16/how-to-recruit-ux-designer/">How To Recruit A UX Designer</a></dd>
     	 </dl>
    </div>
  </div>
    </div>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
