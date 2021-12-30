<!DOCTYPE html>
<html>
<head>
	<title>Combile Layer</title>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">SCROLL DOWN</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Parallax Demo</h3>
  <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">LESS HEIGHT</span>
  </div>
</div>
</body>
<style type="text/css">
	* { margin:0 ; padding: 0; }
	html, body {
		min-height: 100%;
		font-size: 1.0em;
		font-family: Helvetica;
		letter-spacing: 0.1em;
		word-spacing: 0.3em;
		line-height: 1.5em;
	}
	.bgimg-1 {
		min-height: 100vh;
		background: url('./images/back_1.jpeg');
	}
	.bgimg-2 {
		min-height: 100vh;
		background: url('./images/back_2.jpeg');
	}
	.bgimg-1, .bgimg-2 {
	  position: relative;
	  opacity: 0.65;
	  background-attachment: fixed;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover; 
	}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}
</style>
</html>