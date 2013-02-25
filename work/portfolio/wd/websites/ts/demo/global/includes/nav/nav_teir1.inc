<ul id="global_nav">
	<li>&nbsp;</li>
	<li id="logo"><a href="#" id="nav_logo"><span>TriGeminal Solutions ™</span></a></li>
	<li>
		<?php
		 if ($thisPage=="page1") echo page1Header; 
		 if ($thisPage=="page2") echo page2Header; 
		 if ($thisPage=="page3") echo page3Header; 
		 if ($thisPage=="page4") echo page4Header; 
		 if ($thisPage=="page5") echo page5Header; 
		 if ($thisPage=="page6") echo page6Header; 
		 ?>
     </li>
    
    
	<!--<li><?php    //       if ($thisPage=="page1") echo " id=\"selected\""; ?></li>-->
</ul>

