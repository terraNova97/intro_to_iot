<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<script src="./assets/jscolor.js"></script>
</head>
<body>

<?php
  include "GPIO.php";
  include "header.php";

  $color = "EFFFC9";
  if (isset($_POST['set_color'])) {
    $color = $_POST['color'];
  }
?>

<!-- JSColor Picker -->
<input type="button" class="jscolor" id="picker" onchange="update(this.jscolor)" onfocusout="apply()" value=<?php echo "'" . $color . "'"; ?> >

<!-- Form -->
<form method="POST">
	<input type="text" id="color" name="color">
  <input type="submit" id="smt" name="set_color" hidden>
	<input type="submit" value="Set as Default" id="set_default">
</form>

<!-- Charts -->
<div id="charts-container">
	<canvas id="temp-chart" class="chart" height="350" width="550"></canvas>
    <canvas id="sound-chart" class="chart" height="350" width="550"></canvas>
</div>

<!-- About -->
<div id="about">
<h1>About</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales nisi mollis finibus sollicitudin. Pellentesque eget facilisis ante, nec porttitor lectus. Mauris augue orci, lacinia ac blandit porttitor, egestas quis sem. In lacinia nulla elit, lobortis dignissim elit volutpat non. Mauris ac nulla id lacus venenatis tincidunt. Quisque vitae enim nunc. Mauris blandit vel quam eget posuere.</p>

<p>In tempor mattis velit, ut rhoncus metus laoreet ac. Quisque est enim, bibendum eget fringilla quis, consequat id lectus. Morbi et mauris quam. Nunc non magna a justo posuere lacinia auctor ac diam. Aenean nec sollicitudin dolor. Mauris lacinia nisl ut sollicitudin pulvinar. Vestibulum condimentum, lacus et dictum sodales, lacus eros tempus purus, sit amet convallis sem ligula non lectus. Suspendisse hendrerit orci sed neque maximus euismod.</p>

<p>Integer dolor dui, semper sed pretium in, consectetur ac lectus. Duis ut massa finibus ipsum tempus pulvinar vel et dolor. Fusce et purus iaculis, sollicitudin massa et, tempor ligula. Sed commodo vehicula vulputate. Aliquam semper, mauris vitae elementum volutpat, eros nunc tempus diam, et dictum mauris nisi vel ligula. Fusce efficitur leo ut elit placerat, dignissim convallis magna sagittis. Nunc sagittis nulla urna, quis tincidunt mi pellentesque vitae. Suspendisse potenti. Sed feugiat condimentum magna. Vestibulum volutpat porttitor ex quis convallis. Morbi commodo purus est, in luctus sem vehicula non. Donec sollicitudin sem ac felis cursus pretium.</p>

<p>Vestibulum eu rhoncus libero, eget convallis turpis. Vivamus tincidunt venenatis turpis vel tincidunt. Pellentesque non malesuada nunc. Praesent congue nibh at semper bibendum. Sed sollicitudin efficitur lectus a dictum. Vestibulum malesuada metus mollis est ullamcorper malesuada. Sed ultricies lacus sit amet felis euismod, at rhoncus massa tristique. Nunc ultrices, felis et euismod sollicitudin, dolor nulla finibus elit, facilisis posuere nulla dui vitae massa. Sed id magna ac metus finibus faucibus vitae ut elit. Nunc fringilla congue consequat.</p>

<p>Nullam volutpat iaculis placerat. Duis eu magna suscipit, porttitor magna sed, consectetur erat. Fusce imperdiet sapien viverra, finibus mauris eu, bibendum lacus. Etiam vitae sapien consectetur, ultrices turpis dignissim, vulputate dui. Pellentesque venenatis varius porta. Phasellus dapibus interdum augue congue maximus. Nam scelerisque suscipit tempor. Aliquam egestas in lacus sed sodales. Pellentesque a lacus iaculis, vulputate odio sed, cursus neque. Etiam in vestibulum ligula. Morbi ultricies arcu elit, non facilisis sapien congue ut. Donec at eros libero. Suspendisse placerat massa non felis egestas, nec auctor dui pulvinar.</p>

</div>

<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>
