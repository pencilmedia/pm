<!DOCTYPE html>
<html>
<head>
  <style>
  p { background:yellow; font-weight:bold; cursor:pointer; 
      padding:5px; }
  p.over { background: #ccc; }
  span { color:red; }
  </style>
<script language="javascript" src="global/js/jquery/jquery-1.4.1.min.js"></script>
</head>
<body>
	<p>Click me!</p>

  <span></span>
<script>
    $("p").live("click", function(){
      $(this).after("<p>Another paragraph!</p>");
    });
</script>
</body>
</html>