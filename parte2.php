<nav class="nav">
        <div class="container">
        <title> Parte 2 </title>
            <div class="logo">
            <a href="#">G & A </a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="fotos.php">Fotos</a></li>
                    <li><a href="parte1.php">Parte 1</a></li>
                    <li><a href="parte2.php">Parte 2</a></li>
                    <li><a href="parte3.php">Parte 3</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav><div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>

<input type="checkbox" id="day-night"><label for="day-night"></label>

<div class="content">

	
	<div class="moon-sun"></div>

	<div class="cuboid floor one">
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof one">
		<div class="side"><i class="cactus"></i></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid floor two">
		<div class="side"><span><i class="flowers"></i></span></div>
		<div class="side"></div>
		<div class="side"><span></span></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof two">
		<div class="side"><i class="bush"></i></div>
		<div class="side"></div>
		<div class="side"><i class="bush"></i></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid floor three">
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"><span></span></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof three">
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid floor four">
		<div class="side"><i class="man"></i></div>
		<div class="side"></div>
		<div class="side"><span></span></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof four">
		<div class="side"><i class="bush"></i></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid floor five">
		<div class="side"><i class="cactus2"></i><i class="cactus2"></i><span></span></div>
		<div class="side"></div>
		<div class="side"><span></span></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof five">
		<div class="side"><i class="cactus"></i></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid floor six">
		<div class="side"><span><i class="cat"></i><i class="cat"></i></span></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof six">
		<div class="side"><i class="bush"></i></div>
		<div class="side"></div>
		<div class="side"><i class="cactus"></i></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid floor seven">
		<div class="side"><i class="plant"></i></div>
		<div class="side"></div>
		<div class="side"><span></span></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof seven">
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid floor eight">
		<div class="side"><i class="plant"></i><i class="man"></i></div>
		<div class="side"></div>
		<div class="side"><span></span></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid roof eight">
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid air-cooler">
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="cuboid air-cooler">
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
		<div class="side"></div>
	</div>
	<div class="lights"></div>
	<div class="clouds"></div>

</div>
<link rel="stylesheet" type="text/css" href="css/cs5.css">
  <script src="XD5.js"></script>
  <!-- Jquery needed -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
<link rel="stylesheet" type="text/css" href="css/cs1.css">
  <script src="js/XD.js"></script>