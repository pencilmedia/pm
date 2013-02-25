<?

switch($_GET['page'])  {

	case '#illustrations' : $page = 'portfolio/illustrations_life.inc.php'; break;
	case '#baytsp' : $page = 'portfolio/baytsp.inc.php'; break;
	case '#bds' : $page = 'portfolio/bds.inc.php'; break;
	case '#chriscoando' : $page = 'portfolio/chriscoando.inc.php'; break;
	case '#cupertinobike' : $page = 'portfolio/cupertinobike.inc.php'; break;
	case '#dm' : $page = 'portfolio/dm.inc.php'; break;
	case '#e411' : $page = 'portfolio/e411.inc.php'; break;
	case '#jnrds' : $page = 'portfolio/jnrds.inc.php'; break;
	case '#maxtor' : $page = 'portfolio/maxtor.inc.php'; break;
	case '#mcafee' : $page = 'portfolio/mcafee.inc.php'; break;
	case '#orcl' : $page = 'portfolio/orcl.inc.php'; break;
	case '#skp' : $page = 'portfolio/skplating.inc.php'; break;
	case '#ts' : $page = 'portfolio/ts.inc.php'; break;
	case '#webgain' : $page = 'portfolio/wg.inc.php'; break;
	case '#wyw' : $page = 'portfolio/wyw.inc.php'; break;
	
}

include($page); 

?>


