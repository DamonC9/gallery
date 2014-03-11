<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>HTML5 Gallery Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/sky-tabs.css">


<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- Reference to html5gallery.js -->
<script type="text/javascript" src="../html5gallery/html5gallery.js"></script>


<script type="text/javascript" src="../html5gallery/responsive.min.js"></script>

</head>

<body>

<!-- A wrapper DIV to center the Gallery -->
<div style="text-align:center;">


<!-- tabs -->
			<div class="sky-tabs sky-tabs-pos-top-left sky-tabs-response-to-switcher">
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="fa fa-bolt"></i>Tesla</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><i class="fa fa-picture-o"></i>da Vinci</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
				<label for="sky-tab3"><span><span><i class="fa fa-cogs"></i>Einstein</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
				<label for="sky-tab4"><span><span><i class="fa fa-globe"></i>Newton</span></span></label>

				<label class="switcher"><span><span><a href="#"><i class="fa fa-unsorted"></i>Choose Project</a></span></span></label>
				
				<?php include 'gallery-large.php'; ?>
				
				<div data-interchange="[../examples/interchange/default.html, (small)], [../examples/interchange/medium.html, (medium)], [../examples/interchange/large.html, (large)]">
  <div data-alert class="alert-box secondary radius">
    This is the default content.
    <a href="#" class="close">&times;</a>
  </div>
</div>
				
			</div>
			<!--/ tabs -->
    <!-- Define the Div for Gallery -->
    <!-- 1. Add class html5gallery to the Div -->
    <!-- 2. Define parameters with HTML5 data tags -->
 

<style type="text/css">


.html5gallery-tn-selected-0, .html5gallery-tn-0, 
.html5gallery-tn-selected-1, .html5gallery-tn-1, 
 .html5gallery-tn-selected-2, .html5gallery-tn-2,
  .html5gallery-tn-selected-3, .html5gallery-tn-3,
  .html5gallery-tn-selected-4, .html5gallery-tn-4 
  {-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;}
* { color: white !important;}
body {background: #2D5063;}
div.guide {margin:12px 24px;}
div.guide span {color:#ff0000; font:italic 14px Arial, Helvetica, sans-serif;}
div.guide p {color:#000000; font:14px Arial, Helvetica, sans-serif;}
div.guide pre {color:#990000;}
div.guide p.title {color:#df501f; font:18px Arial, Helvetica, sans-serif;}

@media screen and (min-width: 800px) {


}
</style>



</body>

</html>