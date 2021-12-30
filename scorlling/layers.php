
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>A pure CSS parallax demo by Keith Clark</title>
<meta name="description" content="Demonstration of the pure CSS parallax scrolling concept">
<style>

  /* Parallax base styles
  --------------------------------------------- */

  .parallax {
    height: 100vh;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-perspective: 1px;
    perspective: 1px;
  }

  .parallax__layer {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
  }

  .parallax__layer--base {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    background: rgba(200,200,220, 0.25);
  }

  .parallax__layer--back {
    background: rgba(240,230,255,0.5);
    -webkit-transform: translateZ(-1px) scale(2);
    transform: translateZ(-1px) scale(2);
  }
  .parallax__layer--front {
    border-left: thin solid rgba(255, 0, 0, 0.5);
    -webkit-transform: translateZ(0.75px) scale(0.241);
    transform: translateZ(0.75px) scale(0.241);
  }


  /* demo styles
  --------------------------------------------- */

  * {
    margin:0;
    padding:0;
    font-size: 1.2em;
  }
   /* add some padding to force scrollbars */
  .parallax__layer {
    padding: 100vh 0;
  }



</style>
</head>
<body>
  <div class="parallax">
    <div class="parallax__layer parallax__layer--back">
      <div class="title">This is the background</div>
    </div>
    <div class="parallax__layer parallax__layer--base">
      <div class="title">This is the foreground</div>
    </div>
    <div class="parallax__layer parallax__layer--front">
      <div class="title">This is the Super foreground</div>
    </div>
  </div>
</body>
</html>