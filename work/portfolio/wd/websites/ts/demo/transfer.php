<html>
<head>
<script language="javascript" src="../global/js/jquery/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
  $().ready(function() {
					 
	$('#add').click(function() {
	return !$('#select1 option:selected').remove().appendTo('#select2');
	});
	$('#remove').click(function() {
	return !$('#select2 option:selected').remove().appendTo('#select1');
	});

	shuttle.markIt();
	shuttle.moveIt();
	
  });

var shuttle = {};
shuttle.markIt = function()
{
	
	$('#box1 li').click(function() {
		$(this).addClass('selected');
	});
	$('#box2 li').click(function() {
		$(this).addClass('selected');
	});	
	
}
shuttle.moveIt = function()
{
	
    $("#box1 li").live("dblclick", function(){
		$('#box1 .selected').appendTo('#list2').removeClass('selected');
    });
    $("#box2 li").live("dblclick", function(){
		$('#box2 .selected').appendTo('#list1').removeClass('selected');
    });
	
	/*
	$('#addBox').click(function() {
		$('#box1 .selected').remove().appendTo('#list2').removeClass('selected');
	});
	$('#removeBox').click(function() {
		$('#box2 .selected').remove().appendTo('#list1').removeClass('selected');
	});
	*/
	
}
  
</script>
 
 <style type="text/css">
  a {
   display: block;
   border: 1px solid #aaa;
   text-decoration: none;
   background-color: #fafafa;
   color: #123456;
   margin: 2px;
   clear:both;
  }
  div {
   float:left;
   text-align: center;
   margin: 10px;
   overflow: auto;
  }
  select {
   width: 100px;
   height: 80px;
  }
  
  ul {margin:0;padding:0;}
  li {border:1px solid silver; padding: 3px; list-style: none;margin:0; width: 200px;}
  li:hover {background-color:#e9e9e9;}
  #list2 {border:1px solid orange;}
 </style>
 
</head>

<body>
<p style="border:1px solid blue; cursor: pointer; background: silver;">Click me!</p>

  <span></span>
<script>
    $("p").live("click", function(){
      $(this).after("<p>Another paragraph!</p>");
    });
</script>

 <div>
  <select multiple id="select1">
   <option value="1">Option 1</option>
   <option value="2">Option 2</option>
   <option value="3">Option 3</option>
   <option value="4">Option 4</option>
  </select>
  <a href="#" id="add">add &gt;&gt;</a>
 </div>
 <div>
  <select multiple id="select2"></select>
  <a href="#" id="remove">&lt;&lt; remove</a>
 </div>
 <div style="display: block; border:1px solid green; clear: both; width: 100%;">
     <div id="box1">
        <ul id="list1">
            <li>Opt One</li>
            <li>Opt Two</li>
            <li>Opt Three</li>
            <li>Opt Four</li>
        </ul>
  <a href="#" id="addBox">add &gt;&gt;</a>
     </div>
      <div id="box2">
        <ul id="list2">
            <li>Choice One</li>
        </ul>
  <a href="#" id="removeBox">&lt;&lt; remove</a>
     </div>
 </div>
 
</body>
</html>
