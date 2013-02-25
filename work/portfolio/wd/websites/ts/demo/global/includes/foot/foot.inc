<ul id="footer">
	<li><a class="button" 	
		<?php
		 if ($thisPage=="page1") echo page1Next; 
		 if ($thisPage=="page2") echo page2Next; 
		 if ($thisPage=="page3") echo page3Next; 
		 if ($thisPage=="page4") echo page4Next; 
		 if ($thisPage=="page5") echo page5Next; 
		 if ($thisPage=="page6") echo page6Next; 
		 ?> ><span>Next <em class="next">&nbsp;</em></span></a></li>
	<li><a class="button" 	
		<?php
		 if ($thisPage=="page1") echo page1Back; 
		 if ($thisPage=="page2") echo page2Back; 
		 if ($thisPage=="page3") echo page3Back; 
		 if ($thisPage=="page4") echo page4Back; 
		 if ($thisPage=="page5") echo page5Back; 
		 if ($thisPage=="page6") echo page6Back; 
		 ?> ><span><em class="back">&nbsp;</em>Back</span></a></li>
	<li class="spacer"><p>&copy; 2010 TriGeminal Solutions <sup>&trade;</sup></p></li>
</ul>