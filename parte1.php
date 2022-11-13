<nav class="nav">
        <div class="container">
        <title> Parte 1 </title>
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
 <link rel="stylesheet" type="text/css" href="css/cs2.css">
  <script src="XD2.js"></script>

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